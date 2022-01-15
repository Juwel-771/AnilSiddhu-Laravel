<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBack extends Controller
{
    public function index(){
        return DB::select("select * from student");
    }
}
