<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Pagination extends Controller
{
    public function index(){
        $data = Student::paginate(1);
        return view('list',['list'=>$data]);
    }
}
