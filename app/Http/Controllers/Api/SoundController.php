<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\Sound;
use App\Models\SoundType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SoundController extends Controller
{
    public function storeSound(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'time' => 'required',
            'instructions' => 'required|array',
            'exercise_id' => 'required|exists:exercises,id',
            'sound_type_id' => 'nullable|exists:sound_types,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }
        $sound = new Sound();
        $sound->name = $request->name;
        $sound->description = $request->description;
        $sound->time = $request->time;
        $sound->instructions = $request->instructions;
        $sound->exercise_id = $request->exercise_id;
        $sound->sound_type_id = $request->sound_type_id;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/sounds/', $filename);
            $sound->image = 'uploads/sounds/' . $filename;
        }

        $sound->save();

        return response()->json([
            'message' => 'Sound created successfully',
            'sound' => $sound
        ]);
    }

    public function getSoundsByCategory($id, Request $request)
    {
        // dd($exercise);
        $existing_exercise = Exercise::where('id', $id)->first();
        if (!$existing_exercise) {
            return response()->json([
                'status' => 'error',
                'message' => 'Exercise not found',
            ], 404);
        }

        $sounds_for_exercise = Sound::where('exercise_id', $id)->first();
        if (!$sounds_for_exercise) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Sounds for this exercise id'
            ]);
        }
        if ($id == 5) {
            $validator = Validator::make($request->all(), [
                'sound_type_id' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors(),
                ]);
            }
            $sound_type = SoundType::where('id',$request->sound_type_id)->first();
            $sound_type_name = $sound_type->name;
            $sounds = Sound::select('name', 'image','time')->where('exercise_id', $id)->where('sound_type_id', $request->sound_type_id)->get();
            return response()->json([
                'status' => 'success',
                'sound_type' => $sound_type_name,
                'sounds' => $sounds
            ]);
        } else {
            $sounds = Sound::select('name', 'image','time')->where('exercise_id', $id)->get();
            return response()->json([
                'status' => 'success',
                'sounds' => $sounds
            ]);
        }

    }
}
