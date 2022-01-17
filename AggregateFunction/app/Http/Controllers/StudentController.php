<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function operation(){
        return DB::table('student')
        // ->avg('id');
        // ->count('id');
        // ->max('id');
        // ->min('id');
        // ->sum('id');
        ->get();
    }
}
