<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UpdateMemberController extends Controller
{
    public function update(Request $req) {
        $member = Member::find($req->id);
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $result = $member->save();

        if($result) {
            return ["result"=>"Data Updated Successfully"];
        }
        else {
            return ["result"=>"Failed to Update Data"];
        }
    }
}
