<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($name) 
    {
        $searchData = Member::where('name','like', "%".$name."%")->get();

        // Experiment code
        // Check if found searched data, show the data. If not show not found
        if(count($searchData)) 
        {
            return $searchData;
        }
        else
        {
            return ["result"=>"Not Found"];
        }
    }
}
