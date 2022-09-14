<?php

abstract class Model
{
    public static function findOne($id)
    {
        $tableName = strtolower(static::class);
        // SELECT * FROM {table} WHERE id = :id
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = :id';
        var_dump($sql);
    }

    public function delete()
    {
        $tableName = strtolower(static::class);
        $sql = 'DELETE FROM ' . $tableName . ' WHERE id = :id';
        var_dump($sql);
    }

    public function create()
    {
        $tableName = strtolower(static::class);
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'INSERT ' . $tableName . ' (' . implode(',', $property) . ') VALUES (' . implode(',', $property2) . ')';
        var_dump($sql);
    }

    public function update()
    {
        $tableName = strtolower(static::class);
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'INSERT ' . $tableName . ' (' . implode(',', $property) . ') 
        VALUES (' . implode(',', $property2) . ') WHERE id = :id';
//        :id -> $this->id
//        :id -> $this->getId()
        var_dump($sql);
    }
}

// user
class User extends Model
{
    public $email;
    public $password;
}

// product
class Product extends Model
{
    public $id;
    public $createdAt;
    public $name;
}

// category
class Category extends Model
{
    public $id;
    public $createdAt;
    public $description;
}

$product = new Category();
$product->create();

//$user = User::findOne(1);
//$product = Product::findOne(1);
//$category = Category::findOne(1);
var_dump($product);