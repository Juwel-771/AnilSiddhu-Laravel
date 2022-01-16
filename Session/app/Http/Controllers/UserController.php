<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function data(Request $req){
    
        $data = $req->input();
        $req->session()->put('user',$data['user']);
    }
}
