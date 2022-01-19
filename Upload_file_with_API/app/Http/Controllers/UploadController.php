<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $result = $request->file('file')->store('/apiDocs');
        return ["Upload"=>$result];
    }
}
