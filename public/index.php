<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

$title = 'Home page';
$text = 'Simple Text';
$orders = \Hillel\Models\Order::all();

/** @var $blade */
echo $blade->make('pages/index', compact('title', 'text', 'orders'))->render();

