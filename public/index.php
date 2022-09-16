<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';

use Hillel\Models\User;
use Hillel\Models\Order;

//$model = new User;
//$model->username = 'test user 2';
//$model->email = 'test2@test.com';
//$model->password = password_hash('test', PASSWORD_BCRYPT);
//$model->save();

//$users = User::all();

//$users = User::find(1);
//$users->delete();

//$users = User::find(1);
//foreach ($users->orders as $order){
//    echo $order->title.'<br>';
//}

//$user = User::find(1);
//$order = new Order();
//$order->title = 'order 3';
//$order->price = 12;
//$order->user_id = $user->id;
//$order->save();

//$user = User::find(1);
//$order = new Order();
//$order->title = 'order ' . rand(0, 255);
//$order->price = 12;
//$user->orders()->save($order);

//$orders = Order::all();
//foreach ($orders as $order) {
//    echo $order->id .' '.$order->title . ': <br>';
//    foreach ($order->products as $product) {
//        echo $product->name . ': <br>';
//    }
//}

//$order = Order::find(3);
//$order->products()->sync([4,5,1]);
//$order->products()->attach([2]);


//$order = Order::where('title', 'order 3')->get();
//$order = Order::where('title', 'like', 'order 2%')->get();
//$order = Order::where('title', '>', '2')->get();
 //******* where title like "order 2%"
 //******* where id in (2,3)

$order = Order::whereIn('id', [5,6])->get();
echo '<pre>';
print_r($order);
echo '</pre>';

