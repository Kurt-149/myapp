<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name = 'Admin')
    {
        return $name;
    }

    public function data($name = "admin")
    {
        $data = [
            "user" => [
                "name" => $name,
                "age" => 19,
                "course" => "bsis",
                "address" => [
                    "street" => "pinalagdan",
                    "city" => "Paombong",
                    "province" => "Bulacan"
                ]
            ]
        ];
        return view('hello', [
            'user' => $data['user'],
            'address' => $data['user']['address']
        ]);
    }
    public function webpage()
    {
        return redirect('https://shopwave.gt.tc/');
    }
}
