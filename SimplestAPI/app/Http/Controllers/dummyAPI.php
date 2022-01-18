<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    public function getData()
    {
        return ['name'=>'Md Juwel','id'=>'382','email'=>'mdjuwel771@gmail.com'];
    }
}
