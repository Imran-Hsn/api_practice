<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AddMultipleController extends Controller
{
    public function addMultipleMember(Request $req)
    {
        if ($req->ismethod('post')) {
            $data = $req->all();

            $rules = [
                'users.*.name' => 'required',
                'users.*.email' => 'required | email | unique:users',
                'users.*.password' => 'required | min:4 | max:80'
            ];

            $customMessage = [
                'users.*.name.required' => 'Name is required',
                'users.*.email.email' => 'Email must be valid email',
                'users.*.password.required' => 'Password is required'
            ];

            $validateData = Validator::make($data, $rules, $customMessage);

            if ($validateData->fails()) {
                return response()->json($validateData->errors(), 422);
            }

            foreach ($data['users'] as $item) {
                $user = new User();
                $user->name = $item['name'];
                $user->email = $item['email'];
                $user->password = bcrypt($item['password']);
                $user->save();
            }

            $message = "User Added Successfully";
            return response()->json(['message' => $message], 201);
        }
    }
}
