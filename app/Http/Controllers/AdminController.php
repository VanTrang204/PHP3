<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showUser(){
        $users = [
            [
                'id'=> '1',
                'name' => 'Lê Văn Tráng',
                'diachi' => 'Xuân Hòa - Thọ Xuân - Thanh Hóa',
                'namsinh' => '27/10/2004',
                'email'=> 'tranglvph33945@fpt.edu.vn',
                'hoctai'=> 'Trường cao đẳng FPT',
                'chuyennganh'=> 'Lập Trình Website',
            ],
            
            ];
        return view('thong-tin-sv')->with([
            'users' => $users
        ]);
    }
}
