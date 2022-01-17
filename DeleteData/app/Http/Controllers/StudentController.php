<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();

        return view('addStudent',['list'=>$data]);
    }

    public function delete($id){
        $data = Student::find($id);
        $data->delete();

        return redirect('addStudent');
    }
}
