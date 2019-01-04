<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * fillable are the ONLY fields we allow to be filled. This
     * protects us from form hacking.
     *
     * guarded are fields we do not want to provide access to. Setting
     * guarded to an emtpy array ALLOWS all fields to be entered.
     */
    // protected $fillable = [
    //     // 'project_id',
    //     // 'description',
    //     'completed',
    // ];

    protected $guarded = [];

    /**
     * Get the project associated with this task.
     * @param None
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Marks a task as completed
     * @param boolean Cache::flush();
     * @return None
     */
    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    /**
     * Marks a task as incomplete
     * @param None
     * @return None
     */
    public function incomplete()
    {
        $this->complete(false);
    }
}
