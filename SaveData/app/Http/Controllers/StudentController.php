<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(Request $request){
        $add = new Student();

        $add->name=$request->name;
        $add->email=$request->email;
        $add->address=$request->address;

        $add->save();

        return redirect('add');
    }
}
