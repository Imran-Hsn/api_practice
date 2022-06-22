<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class apiController extends Controller
{
    public  function fromAPI()
    {
        // return ['name:'=>'Imran', 'email'=>'imran@example.com'];
        $data = Student::get();
        // return view('showApi', ['students'=>$data]);
        return $data;
    }
}
