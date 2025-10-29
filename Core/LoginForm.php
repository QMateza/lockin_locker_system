<?php

namespace Core;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
  protected $errors = [];

  public function __construct($attributes)
  {
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = 'Please provide a valid email.';
    }

    if (!Validator::string($attributes['password'])) {
      $this->errors['password'] = 'Please provide a valid password.';
    }
  }

  public static function validate($attributes)
  {
    $instance = new static($attributes); //LoginForm()

    if ($instance->failed()) { // 4. checking if LoginForm() has errors.
      throw new ValidationException();
    }

    return $instance;
  }

  public function failed() // 3. Counting the errors
  {
    return count($this->errors);
  }

  public function error($field, $message) // 1. Setting the errors
  {
    $this->errors[$field] = $message;
  }

  public function errors() // 2. Getting the errors
  {
    return $this->errors;
  }
}
