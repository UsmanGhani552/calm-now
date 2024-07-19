<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FirebaseService;
use Illuminate\Http\Request;
use Kreait\Firebase\Exception\Messaging\NotFound;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
    public function pushNotification(Request $request)
    {

        $data=[];
        $data['message']= "Some message";

        $tokens = [];
        // $tokens[] = Auth::user()->fcm_token;
        $tokens[] = $request->token;
        // $tokens[] = 'fQlPbhp0-ErUv1sG5JaCVQ:APA91bFEKpLVLMbYxMh0Z8C8ONcnG1G5Avtx54F16s7iagezKjBvO3iaF_l5qMHG5naUygkZWqtfGLUHdYkGEyLnfm2St9u0y6MgcCaxQ4-N4ygxOlSHhPwOi_n53NLMeIhQ_tANm4PA';
        $response = $this->sendFirebasePush($tokens,$data);

        return response($response);

    }
    public function sendPushNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'device_token' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }
        
        $deviceToken = $request->input('device_token');
        $title = $request->input('title');
        $body = $request->input('body');
        $data = $request->input('data', []);
        
        // Resolve FirebaseService directly within the method
        $firebaseService = app(FirebaseService::class);

        try {
            $firebaseService->sendNotification($deviceToken, $title, $body, $data);
            return response()->json(['message' => 'Notification sent successfully']);
        } catch (NotFound $e) {
            return response()->json([
                'message' => 'The device token is not recognized. It might have been unregistered or registered to a different Firebase project.',
                'error' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            // Handle other exceptions
            Log::error('Error sending Firebase notification: ' . $e->getMessage());
            return response()->json([
                'message' => 'An error occurred while sending the notification.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function sendFirebasePush($tokens, $data)
    {

        $serverKey = 'AAAAd2bhwcI:APA91bFn8nPVJmqhel-ZskJMTSRu6ZyDn23G2nV5MB0o35gKUGoI01hq0jeruegVbtZ8c-HsVLZHi8F_zn44gYaWQstkU9K0npz7qALGU1ffHU-srFCemt7QcZb5fgmL1SPFFN4QMsNW';

        // prep the bundle
        $msg = array
        (
            'message'   => $data['message'],
        );

        $notifyData = [
             "body" => $data['message'],
             "title"=> "Calm Now App"
        ];

        $registrationIds = $tokens;

        if(count($tokens) > 1){
            $fields = array
            (
                'registration_ids' => $registrationIds, //  for  multiple users
                'notification'  => $notifyData,
                'data'=> $msg,
                'priority'=> 'high'
            );
        }
        else{

            $fields = array
            (
                'to' => $registrationIds[0], //  for  only one users
                'notification'  => $notifyData,
                'data'=> $msg,
                'priority'=> 'high'
            );
        }

        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;

        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        // curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        if ($result === FALSE)
        {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close( $ch );
        return $result;
    }
}
