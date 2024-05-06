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
        // dd('asda');
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
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

        $token = $user->createToken('Calm-Now')->accessToken;

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

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // dd('asd');
            $token =  $user->createToken('Calm-Now')->accessToken;

            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successfully',
                'user' => $user,
                'token' => $token
            ]);
        } else {
            return response()->json([
                'error' => 'Unauthorised'
            ]);
        }
    }

    public function logout()
    {
        $user = Auth::user();
        $user->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    public function socialLogin(Request $request)
    {
            // Validate incoming request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'social_id' => 'required|numeric',
            'provider' => 'required|in:google,facebook,apple',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            // Retrieve user details from Google using the token
            // $userDetails = Socialite::driver('google')->userFromToken($request->token);
            // dd($userDetails);

            // Check if the user already exists in the database
            $user = User::where('email', $request->email)->first();

            if (!$user) {
                // User doesn't exist, create a new user
                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make('user1234'),
                    'social_id' => $request->social_id,
                    'provider' => $request->provider,
                ]);
            }
            // Generate an API token for the user
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json([
                'message' => 'User logged in with ' . ucfirst($request->provider) . ' successfully',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to authenticate with'. ucfirst($request->provider) . $e->getMessage()], 500);
        }
    }
    public function loginWithFacebook(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            // Retrieve user details from Facebook using the token
            $userDetails = Socialite::driver('facebook')->userFromToken($request->token);
            // dd($userDetails);

            // Check if the user already exists in the database
            $user = User::where('email', $userDetails->email)->first();

            if (!$user) {
                // User doesn't exist, create a new user
                $user = User::create([
                    'first_name' => $userDetails->name,
                    'email' => $userDetails->email,
                    'password' => Hash::make('user1234'),
                    'google_id' => $userDetails->id,
                ]);
            }
            // Generate an API token for the user
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json([
                'message' => 'User logged in with Google successfully',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to authenticate with Google.' . $e->getMessage()], 500);
        }
    }


}
