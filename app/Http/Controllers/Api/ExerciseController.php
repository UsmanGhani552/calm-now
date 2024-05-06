<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseController extends Controller
{
    public function storeExercise(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

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

        $exercise->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Category Stored Successfully',
        ]);
    }

    public function getExercise(){

        $exercises = Exercise::all();

        return response()->json([
            'status' => 'success',
            'exercises' => $exercises
        ]);
    }
}
