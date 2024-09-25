<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
    $user = [
        ["name"=>"john",
        "age"=>24],
        ["name"=> "Liam",
        "age"=> 24],
    ];
    return view ("users", ["user"=> $user]);
}
}
