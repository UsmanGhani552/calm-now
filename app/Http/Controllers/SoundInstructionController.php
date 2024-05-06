<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\SoundInstruction;
use Illuminate\Http\Request;

class SoundInstructionController extends Controller
{
    public function index()
    {
        $soundInstructions = SoundInstruction::all();
        // dd($soundInstructions);
        return view('admin.sound-instructions.index', compact('soundInstructions'));
    }

    public function create()
    {
        $sounds = Sound::all();
        return view('admin.sound-instructions.create', compact('sounds'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required|image',
            'sound' => 'required',
        ]);

        $soundInstruction = new SoundInstruction();
        $soundInstruction->name = $request->name;
        $soundInstruction->sound_id = $request->sound;

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/instructions/', $filename);
            $soundInstruction->icon = 'uploads/instructions/' . $filename;
        }

        $soundInstruction->save();
        return redirect()->route('sound-instruction.index')->withSuccess('Sound Instruction Created Successfully');
    }

    public function edit(SoundInstruction $soundInstruction)
    {
        // dd($soundInstruction);
        $sounds = Sound::all();
        return view('admin.sound-instructions.edit', compact('sounds', 'soundInstruction'));
    }

    public function update(Request $request, SoundInstruction $soundInstruction)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'image',
            'sound' => 'required',
        ]);

        $soundInstruction->name = $request->name;
        $soundInstruction->sound_id = $request->sound;

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/instructions/', $filename);
            $soundInstruction->icon = 'uploads/instructions/' . $filename;
        }

        $soundInstruction->save();
        return redirect()->route('sound-instruction.index')->withSuccess('Sound Instruction Updated Successfully');
    }

    public function delete(SoundInstruction $soundInstruction){
        $soundInstruction->delete();
        return redirect()->route('sound-instruction.index')->withSuccess('Sound Instruction Deleted Successfully');
    }
}
