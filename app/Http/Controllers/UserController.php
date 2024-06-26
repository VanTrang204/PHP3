<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        $users = [
            [
                'id'=> '1',
                'name' => 'John'
            ],
            [
                'id'=> '2',
                'name' => 'Joee'
            ]
            ];
            // echo '<pre>';
            // print_r($users);
            // die();
        return view('list-user')->with([
            'users' => $users
        ]);
    }

    function getUser($id, $name = ''){
        echo $id; 
        echo $name;
    }

    function updateUser(Request $request){
        echo $request->id;
    }
}
