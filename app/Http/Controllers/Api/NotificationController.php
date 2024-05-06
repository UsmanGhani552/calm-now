<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function pushNotification()
    {

        $data=[];
        $data['message']= "Some message";

        $tokens = [];
        $tokens[] = Auth::user()->fcm_token;
        $response = $this->sendFirebasePush($tokens,$data);

        return response($response);

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
