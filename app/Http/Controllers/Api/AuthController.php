<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeviceToken;
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
        // Validate the request inputs
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'fcm_token' => 'required',
        ]);

        // Return errors if validation fails
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Load the user with their subscription
            $user->load('activeSubscription');

            // Check if the token already exists
            $existingToken = DeviceToken::where('user_id', $user->id)
                ->where('fcm_token', $request->fcm_token)
                ->first();

            // If the token does not exist, create a new DeviceToken
            if (!$existingToken) {
                $userToken = new DeviceToken();
                $userToken->user_id = $user->id;
                $userToken->fcm_token = $request->fcm_token;
                $userToken->save();
            }

            // Generate an access token for the user
            $token = $user->createToken('Calm-Now')->accessToken;

            $user->subscription = $user->activeSubscription;
            unset($user->activeSubscription);
            // dd($user);
            // Return the response with the user data and token
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successfully',
                'user' => $user,
                'token' => $token
            ]);
        } else {
            // Return an error response if authentication fails
            return response()->json([
                'error' => 'Invalid email or password'
            ], 401);
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
        if ($request->provider == 'apple') {
            // Validate incoming request
            $validator = Validator::make($request->all(), [
                'social_id' => 'required|string',
                'provider' => 'required|in:google,facebook,apple',
                'fcm_token' => 'required',
            ]);
        } else {
            // Validate incoming request
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'social_id' => 'required|string',
                'provider' => 'required|in:google,facebook,apple',
                'fcm_token' => 'required',
            ]);
        }
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            // $existingEmail = User::where('social_id','!=', $request->social_id)->where('email', $request->email)->first();
            // if ($existingEmail) {
            //     return response()->json([
            //         'status_code' => 400,
            //         'message' => 'Email Already Taken',
            //     ]);
            // }
            
            // $userDetails = Socialite::driver('google')->userFromToken($request->token);
            $existingProvider = User::where('social_id', $request->social_id)->where('provider', '!=', $request->provider)->first();
            if ($existingProvider) {
                return response()->json([
                    'status_code' => 400,
                    'message' => 'User logged in with differnt provider',
                ]);
            }
            $user = User::where('social_id', $request->social_id)->where('provider', $request->provider)->first();
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

            $existingToken = DeviceToken::where('user_id', $user->id)
                ->where('fcm_token', $request->fcm_token)
                ->first();
            if (!$existingToken) {
                $user_token = new DeviceToken();
                $user_token->user_id = $user->id;
                $user_token->fcm_token = $request->fcm_token;
                $user_token->save();
            }
            // Generate an API token for the user
            $token = $user->createToken('MyApp')->accessToken;
            if ($user->subscription) {
                $user->subscription->subscription_product;
            }
            return response()->json([
                'message' => 'User logged in with ' . ucfirst($request->provider) . ' successfully',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to authenticate with ' . ucfirst($request->provider) . $e->getMessage()], 500);
        }
    }
   
}
