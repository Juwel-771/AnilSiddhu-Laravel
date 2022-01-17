<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentContorller extends Controller
{
    public function addData(){
        $data = new Student();
        $data->name = "Juwel";
        $data->email = "nomail@mail.com";
        $data->address = "Noakhali";
        $data->save();
    }
}
