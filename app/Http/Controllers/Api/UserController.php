<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editProfile(User $user , Request $request){

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User Updated Successfully',
        ]);
    }

    public function editProfileImage(User $user , Request $request){

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = 'uploads/users/'.$filename;
        }
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User Updated Successfully',
        ]);
    }
}
