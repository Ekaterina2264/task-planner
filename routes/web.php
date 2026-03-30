<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Models\Project;
use App\Models\Department;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        $tasks = Task::with('creator')
            ->where('assigned_to', auth()->id())
            ->get();

        return view('dashboard', compact('tasks'));
    })->name('dashboard');
});

require __DIR__.'/settings.php';

