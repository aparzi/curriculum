<?php

require_once '../../PHPMailer-master/class.phpmailer.php';
/**
 * Description of Email
 *
 * @author angelo
 */
class Email {

    private $email;

    function __construct() {
        $this->email = $this->getIstance();
    }

    private function getIstance() {
        return new PHPMailer();
    }

    private function configMailer() {
        $this->email->isHTML(true);
    }

    public function sendEmail() {
        $this->configMailer();
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $this->email->setFrom($email, $name);                       // Add a sender
        $this->email->addAddress('angeloparziale94@gmail.com');     // Add a recipient
        $this->email->Subject = filter_input(INPUT_POST, 'subject');
        $this->email->Body = filter_input(INPUT_POST, 'message');

        if (!$this->email->send()) {
            echo $this->email->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

}

$em = new Email();
$em->sendEmail();
