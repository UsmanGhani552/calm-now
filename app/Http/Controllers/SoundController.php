<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Sound;
use App\Models\SoundType;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function index()
    {
        // $sounds = Sound::with('exercise','soundType','instructions')->get()->toArray();
        // dd($sounds[13]);

        $sounds = Sound::with('exercise', 'soundType', 'instructions')->get();
        // if($sounds[13]->instructions){
        //     dd($sounds[13]->instructions);
        // }
        return view('admin.sounds.index', compact('sounds'));
    }

    public function create()
    {
        $exercises = Exercise::all();
        $sound_types = SoundType::all();
        return view('admin.sounds.create', compact('exercises', 'sound_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'mp3' => 'required|mimes:mp3',
            'time' => 'required',
            'duration.*' => 'required',
            'exercise' => 'required|exists:exercises,id',
        ]);
        // dd(session()->get('errors'));
        // dd($request->all());
        if ($request->exercise == 2) {
            $request->validate([
                'sound_type' => 'required|exists:sound_types,id',
            ]);
        }
        $sound = new Sound();
        $sound->name = $request->name;
        $sound->description = $request->description;
        $sound->time = $request->time;
        $sound->duration = $request->duration;
        $sound->exercise_id = $request->exercise;
        if ($request->exercise == 2) {
            $sound->sound_type_id = $request->sound_type;
        } else {
            $sound->sound_type_id = null;
        }

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

        $sound->save();
        return redirect()->route('sound.index')->withSuccess('Sound Created Successfully');
    }
    public function edit(Sound $sound)
    {
        $exercises = Exercise::all();
        $sound_types = SoundType::all();
        return view('admin.sounds.edit', compact('sound', 'exercises', 'sound_types'));
    }

    public function update(Request $request, Sound $sound)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'time' => 'required',
            'duration.*' => 'required',
            'exercise' => 'required|exists:exercises,id',
        ]);

        if ($request->exercise == 2) {
            $request->validate([
                'sound_type' => 'required|exists:sound_types,id',
            ]);
        }
        $sound->name = $request->name;
        $sound->description = $request->description;
        $sound->time = $request->time;
        $sound->duration = $request->duration;
        $sound->exercise_id = $request->exercise;
        if ($request->exercise == 2) {
            $sound->sound_type_id = $request->sound_type;
        } else {
            $sound->sound_type_id = null;
        }

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

        $sound->save();
        return redirect()->route('sound.index')->withSuccess('Sound Updated Successfully');
    }

    public function delete(Sound $sound){
        $sound->instructions()->delete();
        $sound->delete();
        return redirect()->route('sound.index')->withSuccess('Sound Deleted Successfully');
    }
}
