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

Route::get('/test-task', function () {
    Task::create([
        'title' => 'Тестовая задача',
        'project_id' => 1,
        'department_id' => 1,
        'assigned_to' => 1,
        'created_by' => 1,
        'due_date' => now(),
        'description' => 'Проверка создания задачи',
        'status' => 'new',
        'priority' => 'medium',
    ]);

    return 'OK';
});

Route::get('/test-data', function () {
    Project::create([
        'name' => 'ЖК Север',
    ]);

    Department::create([
        'name' => 'Проектирование',
    ]);

    return 'TEST DATA OK';
});