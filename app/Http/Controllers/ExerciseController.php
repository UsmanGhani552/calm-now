<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index(){
        $exercises = Exercise::all();
        return view('admin.exercises.index',compact('exercises'));
    }

    public function create(){
        return view('admin.exercises.create');
    }

    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required',
            'image' => 'required|image',
            'icon' => 'required|image',
        ]);

        $exercise = new Exercise();
        $exercise->name = $request->name;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->image = 'uploads/exercises/'.$filename;
        }

        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->icon = 'uploads/exercises/'.$filename;
        }

        $exercise->save();
        return redirect()->route('exercise.index')->withSuccess('Exercise Created Successfully');
    }
    public function edit(Exercise $exercise){
        return view('admin.exercises.edit',compact('exercise'));
    }

    public function update(Request $request , Exercise $exercise)
    {
        $request->validate( [
            'name' => 'required',
        ]);

        $exercise->name = $request->name;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->image = 'uploads/exercises/'.$filename;
        }

        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->icon = 'uploads/exercises/'.$filename;
        }

        $exercise->save();

        return redirect()->route('exercise.index')->withSuccess('Exercise Updated Successfully');
    }

    public function delete(Exercise $exercise){
        $exercise->delete();
        return redirect()->route('exercise.index')->withSuccess('Exercise Deleted Successfully');
    }
    

}
