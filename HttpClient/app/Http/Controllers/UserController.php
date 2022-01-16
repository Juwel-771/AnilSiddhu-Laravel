<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(){

        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('user',['collection'=>$collection['data']]);
    }
}
