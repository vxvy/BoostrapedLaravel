<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function userWelcome(){
        return view('welcome');
    }
    public function userInfo(){
        return view('information');
    }
    public function userUserHome(){
        return view('pu');
    }
}