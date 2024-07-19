<?php

namespace App\Http\Controllers;

use App\Models\DeviceToken;
use App\Models\Exercise;
use App\Services\FirebaseService;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('admin.exercises.index', compact('exercises'));
    }

    public function create()
    {
        return view('admin.exercises.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'icon' => 'required|image',
        ]);

        $exercise = new Exercise();
        $exercise->name = $request->name;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->image = 'uploads/exercises/' . $filename;
        }

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->icon = 'uploads/exercises/' . $filename;
        }

        $exercise->save();
        
        $firebaseService = app(FirebaseService::class);
        $title = 'New exercise available!';
        $body = `Try our latest {$exercise->name} now.
                Update alert: We've added new {$exercise->name} to help you relax even more.`;

        // $deviceTokens = DeviceToken::all();
        // foreach ($deviceTokens as $deviceToken) {
        //     $obj = $firebaseService->sendNotification($deviceToken->fcm_token, $title, $body);
        // }
        $deviceTokens = DeviceToken::pluck('fcm_token')->toArray();
        $response = $firebaseService->sendNotificationToMultipleDevices($deviceTokens, $title, $body);

        return redirect()->route('exercise.index')->withSuccess('Exercise Created Successfully');
    }
    public function edit(Exercise $exercise)
    {
        return view('admin.exercises.edit', compact('exercise'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $exercise->name = $request->name;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->image = 'uploads/exercises/' . $filename;
        }

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/exercises/', $filename);
            $exercise->icon = 'uploads/exercises/' . $filename;
        }

        $exercise->save();

        return redirect()->route('exercise.index')->withSuccess('Exercise Updated Successfully');
    }

    public function delete(Exercise $exercise)
    {
        $exercise->delete();
        return redirect()->route('exercise.index')->withSuccess('Exercise Deleted Successfully');
    }
}
