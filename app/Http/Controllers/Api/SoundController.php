<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\Sound;
use App\Models\SoundInstruction;
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
            'mp3' => 'required|mimes:mp3',
            'time' => 'required',
            'duration' => 'required|array',
            'exercise_id' => 'required|exists:exercises,id',
            'sound_type_id' => 'nullable|exists:sound_types,id',
            'instruction_name.*' => 'required|',
            'instruction_icon.*' => 'required|image',
        ]);
        // dd($request->mp3);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }
        $sound = new Sound();
        $sound->name = $request->name ;
        $sound->description = $request->description ;
        $sound->time = $request->time ;
        $sound->duration = $request->duration ;
        $sound->exercise_id = $request->exercise_id ;
        $sound->sound_type_id = $request->sound_type_id ;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/sounds/', $filename);
            $sound->image = 'uploads/sounds/' . $filename;
        }
        if ($request->hasfile('mp3')) {
            $file = $request->file('mp3');
            $extenstion = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extenstion;
            $file->move('uploads/sounds/', $filename);
            $sound->mp3 = 'uploads/sounds/' . $filename;
        }

        if ($sound->save()) {
            // Store instructions and associated icons
            $instructionNames = $request->instruction_name;
            $instructionIcons = $request->instruction_icon;

            foreach ($instructionNames as $key => $instructionName) {
                $instruction = new SoundInstruction();
                $instruction->name = $instructionName;
                $instruction->sound_id = $sound->id;
                if ($request->hasfile('instruction_icon') && isset($instructionIcons[$key])) {
                    $file = $request->file('instruction_icon')[$key];
                    $extenstion = $file->getClientOriginalExtension();
                    $filename = uniqid() . '.' . $extenstion;
                    $file->move('uploads/sounds/instructions/', $filename);
                    $instruction->icon = 'uploads/sounds/instructions/' . $filename;
                }
                // Save the instruction
                $instruction->save();
            }
        };
        // Load the instructions associated with the sound
        $sound->load('instructions');

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

        if ($id == 2) {
            $validator = Validator::make($request->all(), [
                'sound_type_id' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors(),
                ]);
            }
            $sound_type = SoundType::where('id', $request->sound_type_id)->first();
            $sound_type_name = $sound_type->name;
            $sounds = Sound::select('id', 'name', 'image', 'time', 'duration')->where('exercise_id', $id)->where('sound_type_id', $request->sound_type_id)->get();
            // Load instructions for each sound
            $sounds->load('instructions');
            return response()->json([
                'status' => 'success',
                'sound_type' => $sound_type_name,
                'sounds' => $sounds
            ]);
        } else {
            $sounds = Sound::select('id', 'name', 'image', 'time', 'duration')->where('exercise_id', $id)->get();
            // Load instructions for each sound
            $sounds->load('instructions');
            return response()->json([
                'status' => 'success',
                'sounds' => $sounds
            ]);
        }
    }
    public function getSoundById($id)
    {
        $sound = Sound::with('instructions')->find($id);
        // $sound->load('instructions');
        if (!$sound) {
            return response()->json([
                'status' => 'error',
                'message' => 'Sound does not exist'
            ]);
        } else {
            return response()->json([
                'status' => 'success',
                'sound' => $sound
            ]);
        }
    }

    public function deleteSound($id)
    {
        $sound = Sound::find($id);

        if (!$sound) {
            return response()->json([
                'message' => 'Sound not found',
            ], 404);
        }

        // Delete the associated instructions (if any)
        $sound->instructions()->delete();

        // Delete the sound
        $sound->delete();

        return response()->json([
            'message' => 'Sound deleted successfully',
        ]);
    }
}
