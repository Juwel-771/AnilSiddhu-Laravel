<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add(Request $request)
    {
        $data = new Student();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;

        $result = $data->save();

        if($result)
        {
            return ["RESULT"=>'DATA SAVED'];
        }else{
            return ['RESULT'=>'DATA DECLINED'];
        }
    }
}
