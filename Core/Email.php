<?php

namespace Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);

        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'qmateza@gmail.com';
        $this->mailer->Password = 'yrwx oepk jvoi oeyz';
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;

        $this->mailer->setFrom('qmateza@gmail.com', 'Lockin, student Locker System');
        $this->mailer->isHTML(true);
    }

    public function sendRegistrationEmail($to, $firstName)
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);
            $this->mailer->Subject = 'Welcome to LockIn, a student Locker System';
            $this->mailer->Body = "
                <h2>Welcome, {$firstName}!</h2>
                <p>Your account has been successfully created.</p>
                <p>You can now log in to manage locker applications for your child.</p>
                <br>
                <p>Thank you for joining us!</p>
            ";
            $this->mailer->send();
        } catch (Exception $e) {
            dd($this->mailer->ErrorInfo);
            error_log('Email Error (registration): ' . $this->mailer->ErrorInfo);
        }
    }

    public function sendLockerApplicationEmail($to, $studentName, $lockerNumber)
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);
            $this->mailer->Subject = 'Locker Application Received';
            $this->mailer->Body = "
                <h2>Application Received</h2>
                <p>Dear Parent,</p>
                <p>Your locker application for <strong>{$studentName}</strong> (Locker: <strong>{$lockerNumber}</strong>) has been received.</p>
                <p>We will notify you once it has been approved or if additional steps are required.</p>
                <br>
                <p>Thank you,<br>LockIn Student Locker Team</p>
            ";
            $this->mailer->send();
        } catch (Exception $e) {
            dd($this->mailer->ErrorInfo);
            error_log('Email Error (locker application): ' . $this->mailer->ErrorInfo);
        }
    }

    public function sendWaitingListUpdateEmail($to, $studentName, $lockerNumber, $action)
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);

            if ($action === 'approve') {
                $this->mailer->Subject = 'Locker Assigned';
                $this->mailer->Body = "
                <h2>Good News!</h2>
                <p>Dear Parent,</p>
                <p><strong>{$studentName}</strong> has been moved out of the waiting list and assigned Locker <strong>{$lockerNumber}</strong>.</p>
                <p>Please proceed with the next steps as communicated by the school.</p>
                <br>
                <p>Kind regards,<br>LockIn Student Locker Team</p>
            ";
            } elseif ($action === 'decline') {
                $this->mailer->Subject = 'Locker Not Assigned';
                $this->mailer->Body = "
                <h2>Application Declined</h2>
                <p>Dear Parent,</p>
                <p>We regret to inform you that <strong>{$studentName}</strong> was not assigned a locker at this time.</p>
                <p>You may reapply later or contact the school for assistance.</p>
                <br>
                <p>Kind regards,<br>LockIn Student Locker Team</p>
            ";
            }

            $this->mailer->send();
        } catch (Exception $e) {
            dd($this->mailer->ErrorInfo);
            error_log('Email Error (waiting list update): ' . $this->mailer->ErrorInfo);
        }
    }
}
