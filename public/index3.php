<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hillel\Application\Traits\IdentificatorTrait;
use Hillel\Application\Traits\CreatedAtTimestampTrait;

class User
{
    use IdentificatorTrait;

    public function __construct($id)
    {
        $this->setId($id);
    }
}

class Product
{
    use IdentificatorTrait, CreatedAtTimestampTrait;

    public function __construct($id, $createdAt)
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
    }
}

class Category
{
    use IdentificatorTrait, CreatedAtTimestampTrait;

    public function __construct($id, $createdAt)
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
    }
}

$user = new User(1);
$product = new Product(1, time());
$category = new Category(1, time());
$category->setId();
var_dump($user, $product, $category);