<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;


class APIvalidationController extends Controller
{
    public function dataValidation(Request $request)
    {
        $data = $request->all();

        $rules = [
            "name" => "required",
            "email" => "required | unique:members | ",
            "address" => "required"
        ];

        $customMessage = [
            "name.required" => "Name is required",
            "email.email" => "Email must be a valid email",
            "address.required" => "Address is required",
        ];

        $validator = Validator::make($data, $rules, $customMessage);


        if($validator->fails()) 
        {
            return response()->json($validator->errors(), 422);
        }

        $member = new Member;
        $member->name = $data['name'];
        $member->email = $data['email'];
        $member->address = $data['address'];
        $member->save();

        $message = "Member Added Successfully";
        return response()->json(["message"=>$message], 201);

    }
}
