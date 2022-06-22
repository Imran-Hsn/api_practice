<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createData(Request $req) {
        $data = new Student;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return ["Result"=>"Data Saved"];
    }
}
