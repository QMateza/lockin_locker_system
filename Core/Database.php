<?php

namespace Core;

use PDO;

class Database
{
  private $connection;
  public $stmt;

  public function __construct($username = 'root', $password = '')
  {
    $dsn = 'mysql:host=localhost;port=3306;dbname=lockin';

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = [])
  {
    $this->stmt = $this->connection->prepare($query);
    $this->stmt->execute($params);

    return $this;
  }

  public function get()
  {
    return $this->stmt->fetchAll();
  }

  public function find()
  {
    return $this->stmt->fetch();
  }

  public function findOrFail()
  {
    $result = $this->find();

    if (!$result) {
      abort();
    }

    return $result;
  }
}
