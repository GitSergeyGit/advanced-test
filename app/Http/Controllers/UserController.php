<?php

namespace Hillel\Application\Http\Controllers;

use Hillel\Application\Http\Models\User;

class UserController
{

    public function actionIndex()
    {
        $user = new User();
        $user->actionIndex();
    }
}