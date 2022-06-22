<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function add(Request $req)
    {
        $add_info = new Member;
        // $add_info->id = $req->id;
        $add_info->name = $req->name;
        $add_info->email = $req->email;
        $add_info->address = $req->address;
        $result = $add_info->save();
        // $add_info->save();

        if($result) 
        {
            return ["Result"=>"Data saved successfully"];
        }
        else 
        {
            return ["Result"=>"Failed to save data!"];
        }

            // return ["Result"=>"Saved data successful!"];
        
//=========================================================================
            // {
            //     $add=Member::create($req->all());
            //     $add->save();
            //     if ($add) {
            //         return ["message"=>"200"];
            //     } else {
            //         return ["message"=>"500"];
            //     }
            // }
        
    }
}
