<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * fillable are the ONLY fields we allow to be filled. This
     * protects us from form hacking.
     *
     * guarded are fields we do not want to provide access to. Setting
     * guarded to an emtpy array ALLOWS all fields to be entered.
     */
    protected $fillable = [
        'title',
        'description',
    ];

    /**
     *
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        return $this->tasks()->create($task);
    }
}
