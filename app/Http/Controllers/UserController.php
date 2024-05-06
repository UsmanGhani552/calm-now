<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $request->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'image' => 'required|image',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        // dd($request->all());
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = 'uploads/users/' . $filename;
        }

        $user->save();
        return redirect()->route('users.index')->withSuccess('User Created Successfully');
    }
    public function edit(User $user){
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request , User $user){
        $request->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'image' => 'image',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'confirmed',
        ]);
        // dd($request->all());
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = 'uploads/users/' . $filename;
        }

        $user->save();
        return redirect()->route('users.index')->withSuccess('User Updated Successfully');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('users.index')->withSuccess('User Deleted Successfully');
    }
}
