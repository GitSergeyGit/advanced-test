<?php

namespace Hillel\Base;

class Router
{
    public function route(): callable
    {
        $controller = new \Hillel\Controllers\PageController();
        if($_SERVER['REQUEST_URI'] == '/contact'){
            return [$controller, 'contact'];
        } elseif ($_SERVER['REQUEST_URI'] == '/about'){
            return [$controller, 'about'];
        }

        throw new \Error('Not found');
    }
}