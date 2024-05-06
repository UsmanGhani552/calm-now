<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $token = $user->createToken('MyApp')->accessToken;

        return response()->json([
            'message' => 'User Registered Successfully',
            'user' => $user,
            'token' => $token
        ]);

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            // dd('asd');
            $token =  $user->createToken('Calm-Now')->accessToken;

            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successfully',
                'user' => $user,
                'token' => $token
            ]);
        }
        else{
            return response()->json([
                'error'=>'Unauthorised'
            ]);
        }
    }

    public function loginWithGoogle(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            // Retrieve user details from Google using the token
            $userDetails = Socialite::driver('google')->userFromToken($request->token);

            // Find or create the user in your application
            $user = User::firstOrCreate([
                'email' => $userDetails->getEmail(),
                'first_name' => $userDetails->getName(),
                'password' => Hash::make('11111111'),
                // Additional user attributes...
            ]);

            // Generate an API token for the user
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json([
                'message' => 'User logged in with Google successfully',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to authenticate with Google.'], 500);
        }
    }

    public function image(Request $request){

        $imageData = base64_decode($request->image);
        dd($imageData);
    }
}
