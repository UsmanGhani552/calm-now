<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $fillable = [
        'user_id',
        'product_id',
        'purchase_token',
        'transaction_receipt',
        'trial_days',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function subscription_product(){
        return $this->belongsTo(SubscriptionProduct::class,'product_id');
    }
}
