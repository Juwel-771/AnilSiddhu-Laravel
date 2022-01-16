<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudenController extends Controller
{
    public function index(Request $request){
        $data = Student::all();

        return view('list',['list'=>$data]);
    }
}
