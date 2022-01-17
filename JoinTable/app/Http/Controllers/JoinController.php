<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JoinController extends Controller
{
    public function index(){
        return DB::table('students')
        ->join('sports','students.id','=','sports.students_id')
        // ->where('sports.id',2)
        ->get();
    }
}
