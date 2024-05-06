<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser()
    {
        $user = Auth::user();
        if ($user) {
            return response()->json([
                'status' => 'success',
                'user' => $user
            ], 201);
        }
    }
    public function editProfile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|max:12',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        // dd($user);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'User Updated Successfully',
        ]);
    }

    public function editProfileImage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $user = Auth::user();

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = 'uploads/users/' . $filename;
        }
        $user->save();

        return response()->json([
            'status' => 'success',
            'image' => $user->image,
            'message' => 'User Image Updated Successfully',
        ]);
    }

    public function deleteAccount()
    {
        $user = Auth::user();
        if ($user->delete()) {
            return response()->json([
                'status' => 'success',
                'message' => 'User Deleted Successfully',
            ], 200);
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 422,
                'errors' => $validator->errors(),
            ]);
        }

        // Verify the old password
        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'status_code' => 400,
                'message' => 'The old password is incorrect.',
            ]);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'status_code' => 200,
            'message' => 'Password updated successfully.',
        ]);
    }
}
