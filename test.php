<?php

// vendor\name_package\name
// Hillel\Lms\Login

require_once 'src/User.php';
require_once 'User.php';

use A\User;
use B\User as UserB;

$model = new User();
$model2 = new UserB();
$model3 = new User();
var_dump($model, $model2);



















//
//$a = $b = 1;
//
//$a = 2;
//
//echo $b;

//class Test
//{
//    public $a;
//}
//
//$boj = new Test();
//$boj->a = 2;
//
//var_dump($boj);
//
////$obj2 = $boj;
//$obj2 = clone $boj;
//$obj2->a = 3;
//
//var_dump($boj, $obj2);
//
//function awdaw($onaw){
//    $onaw->a = 12;
//}
//
//
//awdaw($boj);