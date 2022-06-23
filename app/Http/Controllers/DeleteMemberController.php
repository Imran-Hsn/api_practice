<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DeleteMemberController extends Controller
{
    public function delete($id)
    {
        $delete = Member::find($id)->delete();
        if($delete)
        {
            return ["Result" => "Record:$id Deleted Successfully"];
        }
        else 
        {
            return ["Result"=>"Deletion failed!"];
        }
    }
}
