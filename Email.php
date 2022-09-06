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

$email2 = new Email('awdadawd@gmail.com');
$email1 = new Email('awdadawd');

var_dump($email1->getEmail(), $email2->getEmail());