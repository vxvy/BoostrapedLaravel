<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserController extends Controller{
    
    public function adminWelcome(){
        return view('welcome');
    }
    public function adminHome(){
        return view('home');
    }
    public function adminInfo(){
        return view('information');
    }
    public function adminUserHome(){
        return view('pu');
    }
    public function adminAdminHome(){
        return view('pa');
    }
}