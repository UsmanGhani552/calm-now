<?php 
namespace App\Services;

use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Exception\Messaging\NotFound;

class FirebaseService
{
    protected $messaging;

    public function __construct()
    {
        $firebase = (new Factory)
            ->withServiceAccount(base_path('firebase-sdk.json'));

        $this->messaging = $firebase->createMessaging();
    }

    public function sendNotification($deviceToken, $title, $body, $data = [])
    {
        try{
            $notification = Notification::create($title, $body);
            $message = CloudMessage::withTarget('token', $deviceToken)
                ->withNotification($notification)
                ->withData($data);
                
            $this->messaging->send($message);
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
        return null;
    }
}