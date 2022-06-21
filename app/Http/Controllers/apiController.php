<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public  function fromAPI()
    {
        return ['name:'=>'Imran', 'email'=>'imran@example.com'];
    }
}
