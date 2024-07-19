<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\SubscriptionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function getProductId()
    {
        // $androidProductIdArray = [];
        $androidProductIds = SubscriptionProduct::where('type', 1)->select('id','product_id','title','price','description')->get();
        // foreach ($androidProductIds as $androidProductId) {
        //     $androidProductIdArray[] = $androidProductId->product_id;
        // }

        // $iosProductIdArray = [];
        $iosProductIds = SubscriptionProduct::where('type', 2)->select('id','product_id','title','price','description')->get();
        // foreach ($iosProductIds as $iosProductId) {
        //     $iosProductIdArray[] = $iosProductId->product_id;
        // }
        
        return response()->json([
            'status_code' => 200,
            'ids' => [
                'android' => $androidProductIds,
                'ios' => $iosProductIds
            ]
        ]);
    }

    public function storeReceipt(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:subscription_products,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try{
            $subscription = new Subscription();
            $subscription->user_id = $request->user_id;
            $subscription->product_id = $request->product_id;
            $subscription->purchase_token = $request->purchase_token;
            $subscription->transaction_receipt = $request->transaction_receipt;
            $subscription->trial_days = 30;
            $subscription->status = 1;
            $subscription->save();

            return response()->json([
                'status_code'=> 200,
                'message'=> 'Subscription Stored Successfully',
                'subscription'=> $subscription
            ]);
        }catch (\Exception $e){
            return response()->json(['error'=> $e->getMessage()],400);
        }
    }

    public function cancelSubscription(Request $request){
        $validator = Validator::make($request->all(), [
            'subscription_id' => 'required|integer|exists:subscriptions,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        
        try{
            $subscription = Subscription::find($request->subscription_id);
            if ($subscription->status == 0) {
                return response()->json([
                    'status_code' => 200,
                    'success' => 'Subscription cancelled successfully'
                ]);
            }
    
            $subscription->status = 0;
            $subscription->save();
    
            return response()->json(['success' => 'Subscription cancelled successfully']);
        }catch (\Exception $e){
            return response()->json(['error'=> $e->getMessage()],400);
        }
    }
}
