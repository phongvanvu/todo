<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::latest()->get();
        return view('todos', compact('tasks'));
    }

    public function store(Request $request) {
        $data = $request->validate(['title' => 'required|max:255']);
        Task::create($data);
        return back();
    }

    public function update(Task $task) {
        $task->update(['is_completed' => !$task->is_completed]);
        return back();
    }

    public function destroy(Task $task) {
        $task->delete();
        return back();
    }
}