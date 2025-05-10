<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user)
    {
        echo $user;
        echo " ";
        echo "Hello from Users Controller";
        echo "\n";

        return ['name' => "ABC", 'age' => 20];
    }

    public function loadView($user)
    {
        $data = [
            'YLLoo',
            'Peter',
            'Nigel',
        ];

        return view("users", ['user' => $user, 'users' => $data]);
    }
}
