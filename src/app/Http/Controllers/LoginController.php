<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LoginController extends Controller
{
    public function index(){
        $session = session("value");
        return view('login.index');


    }
    public function store(Request $request){
        alert('Добро пожаловать');


        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');
        $agreement = $request->boolean('agreement');
//        if (true) return back()->withInput();
       return view('user.posts.index');
    }
}
