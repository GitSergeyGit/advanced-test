<?php

/**
 * Цей клас імутабельний
 */
class Email
{
    private $email;

    public function __construct($email)
    {
        $this->setEmail($email);
    }

    private function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Невалідний email');
        }
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class EmailHillel extends Email
{
    public function __construct($email)
    {
        parent::__construct($email);
        if (strpos($email, '@hillel.com') === false) {
            throw new InvalidArgumentException('Невалідний email Hillel');
        }
    }
}

$email2 = new EmailHillel('awdadawd@gmail.com');
//$email2 = new EmailHillel('awdadawd@hillel.com');
//$email1 = new Email('awdadawd');

var_dump($email2->getEmail());