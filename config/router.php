<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Hillel\Controllers\PageController;
use Hillel\Controllers\OrderController;
use Hillel\Controllers\ProductController;

$request = Request::createFromGlobals();

function request()
{
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router()
{
    global $router;

    return $router;
}

$router->get('/about', [PageController::class, 'about']);

$router->get('/order', [OrderController::class, 'index']);
$router->get('/order/trash', [OrderController::class, 'trash']);
$router->get('/order/{id}/show', [OrderController::class, 'show']);
$router->get('/order/create', [OrderController::class, 'create']);
$router->post('/order/store', [OrderController::class, 'store']);
$router->get('/order/{id}/edit', [OrderController::class, 'edit']);
$router->post('/order/update', [OrderController::class, 'update']);
$router->get('/order/{id}/delete', [OrderController::class, 'destroy']);
$router->get('/order/{id}/restore', [OrderController::class, 'restore']);
$router->get('/order/{id}/force-delete', [OrderController::class, 'forceDelete']);

$router->get('/product', [ProductController::class, 'index']);
//$router->get('/product/{id}/show', [ProductController::class, 'show']);
$router->get('/product/{id}', [ProductController::class, 'show'])->whereNumber('id');
$router->get('/product/create', [ProductController::class, 'create']);
$router->post('/product/store', [ProductController::class, 'store']);
$router->get('/product/{id}/edit', [ProductController::class, 'edit']);
$router->post('/product/update', [ProductController::class, 'update']);
$router->get('/product/{id}/delete', [ProductController::class, 'destroy']);
