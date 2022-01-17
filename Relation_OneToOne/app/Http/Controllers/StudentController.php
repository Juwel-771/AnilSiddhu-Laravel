<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Sport;

class StudentController extends Controller
{
    public function relation(){
        return Student::find(3)->getSport;
    }
}
