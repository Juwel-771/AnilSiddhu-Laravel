<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
class StudentController extends Controller
{
    // public function add(Request $request)
    // {
    //     $data = new Student();
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->address = $request->address;

    //     $result = $data->save();

    //     if($result)
    //     {
    //         return ["RESULT"=>'DATA SAVED'];
    //     }else{
    //         return ['RESULT'=>'DATA DECLINED'];
    //     }
    // }

    // public function update(Request $request)
    // {
    //     $data = Student::find($request->id);
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->address = $request->address;

    //     $result = $data->save();

    //     if($result)
    //     {
    //         return ["RESULT"=>'DATA UPDATED'];
    //     }else{
    //         return ['RESULT'=>'DATA UPDATED FAILED'];
    //     }
    // }

    // public function delete(Request $request)
    // {
    //     $data = Student::find($request->id);
    //     $result = $data->delete();

    //     return "Data deleted";
    // }

    // public function search($name)
    // {
    //     return Student::where("name","like","%".$name."%")->get(); 
    // }

    // public function testData(Request $request)
    // {
    //     $rules = array(
    //         "address"=>"required | max: 10 | min: 4"
    //     );
    //     $validator = Validator($request->all(),$rules);
    //     if($validator->fails())
    //     {
    //         return $validator->errors();
    //     }
    //     else 
    //     {
    //         $data = new Student();
    //         $data->name = $request->name;
    //         $data->email = $request->email;
    //         $data->address = $request->address;

    //         $result = $data->save();

    //         if($result)
    //         {
    //             return ["RESULT"=>'DATA UPDATED'];
    //         }
    //         else
    //         {
    //             return ['RESULT'=>'DATA UPDATED FAILED'];
    //         }
    //     }
    // }
}
