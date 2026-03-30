<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'project_id',
        'department_id',
        'assigned_to',
        'created_by',
        'due_date',
        'description',
        'status',
        'priority',
    ];

    public function creator()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }
}

