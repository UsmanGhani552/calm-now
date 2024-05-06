<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function sendResetToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $token = Str::random(6);
        $data = [
            'token' => $token,
        ];

        //expiration time
        $expiration = Carbon::now()->addMinutes(2);

        $passwordReset = PasswordReset::firstOrNew(['email' => $user->email]);
        $passwordReset->token = $token;
        $passwordReset->expires_at = $expiration;
        $passwordReset->created_at = now();
        $passwordReset->updated_at = now();
        $passwordReset->save();

        Mail::send('emails/forget_password', $data, function ($m) use ($request) {
            $m->from("calm-now@gmail.com", 'Calm Now');
            $m->to($request->email)->subject('Password Reset');
        });

        return response()->json(['message' => 'Reset token sent successfully']);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user_token = PasswordReset::where('token', $request->token)->first();
        if (!$user_token) {
            return response()->json([
                'message' => 'Invalid Token'
            ]);
        }

        // Check if the token has expired
        $expirationTime = Carbon::parse($user_token->expires_at);

        if (Carbon::now()->gt($expirationTime)) {
            return response()->json([
                'message' => 'Token has expired',
            ]);
        }

        $user = User::where('email', $user_token->email)->first();
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        $user_token->delete();

        return response()->json([
            'message' => 'Password Updated Successfully'
        ]);
    }
}
