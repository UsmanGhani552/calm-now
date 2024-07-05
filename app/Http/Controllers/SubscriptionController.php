<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionProduct;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptionProducts = SubscriptionProduct::all();
        return view('admin.subscription-products.index',compact('subscriptionProducts'));
    }

    public function create(){
        return view('admin.subscription-products.create');
    }

    public function store(Request $request){
        $request->validate( [
            'product_id' => 'required',
            'type' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        // dd($request->all());
        $subscriptionProduct = new subscriptionProduct();
        $subscriptionProduct->product_id = $request->product_id;
        $subscriptionProduct->type = $request->type;
        $subscriptionProduct->title = $request->title;
        $subscriptionProduct->price = $request->price;
        $subscriptionProduct->description = $request->description;
        $subscriptionProduct->save();
        return redirect()->route('subscription-product.index')->withSuccess('Subscription Product Created Successfully');
    }
    public function edit(SubscriptionProduct $subscriptionProduct){
        return view('admin.subscription-products.edit',compact('subscriptionProduct'));
    }

    public function update(Request $request , SubscriptionProduct $subscriptionProduct){
        $request->validate( [
            'product_id' => 'required',
            'type' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        // dd($request->all());
        $subscriptionProduct->product_id = $request->product_id;
        $subscriptionProduct->type = $request->type;
        $subscriptionProduct->title = $request->title;
        $subscriptionProduct->price = $request->price;
        $subscriptionProduct->description = $request->description;
        $subscriptionProduct->save();
        return redirect()->route('subscription-product.index')->withSuccess('Subscription Product Updated Successfully');
    }
    
    public function delete(SubscriptionProduct $subscriptionProduct){
        $subscriptionProduct->delete();
        return redirect()->route('subscription-product.index')->withSuccess('Subscription Product Deleted Successfully');

    }
}
