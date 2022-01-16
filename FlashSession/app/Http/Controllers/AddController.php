<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(Request $request){
      $data = $request->input();
      $request->session()->flash('user',$data);

      return redirect('add');
    }
}
