<?php

interface Bank
{
    public function send(array $data);
}

interface Auth
{
    public function login();
}

//class TestBank implements Bank, Auth
//{
//    public function login()
//    {
//        ///
//    }
//    public function send(array $data)
//    {
//        ///
//    }
//}

class Mono extends TestBank
{
    public $url;

    public function login()
    {
        //
    }

    public function auth()
    {
        return $this->auth();
    }

    public function send(array $data)
    {
        $result = $this->auth();
        ///
        echo 'Send data ';
    }
}

class Privat extends TestBank
{
    public function send(array $data)
    {
        $this->getToken();
        echo 'Send data ';
        //
    }

    public function getToken()
    {
        //
        return 'token';
    }

    public function login()
    {
        ///
        return $this->getToken();
    }
}

class ProductController
{
    public $bank;

    public function __construct(Bank $bank)
    {
        $this->bank = $bank;
    }

    public function pay()
    {
        $this->bank->send([
            'name' => 'Product1',
            'price' => 10
        ]);
    }
}

//$bank = new Mono();
$bank = new Privat();

$post = new PostController($bank);
$post->pay();