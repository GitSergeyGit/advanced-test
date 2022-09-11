<?php

require_once 'autoload.php';



$model = new \Hillel\Base();
$model->actionIndex();
//$model = new \Hillel\Application\Http\Controllers\UserController();
//$model->actionIndex();

//$user = new \Hillel\Application\Http\Models\User();
//$user->actionIndex();















//function autoload($className){
//    $filePath = __DIR__.'/app/'.str_replace('\\', '/', $className).'.php';
//    require_once $filePath;
//}
//spl_autoload_register('autoload');
