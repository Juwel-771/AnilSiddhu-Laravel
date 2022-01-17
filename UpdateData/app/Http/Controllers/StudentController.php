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

    public function show($id){
        $data = Student::find($id);

        return view('edit',['data'=>$data]);
    }

    public function update(Request $request){
        $data = Student::find($request->id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;

        $data->save();

        return redirect('addStudent');
    }
}
