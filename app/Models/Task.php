<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'delai',
        'description',
        'user_id'

    ];
    public function user ()
    {
        return $this->belongsTo(User::class);
    }


    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'status_task');
        // return $this->belongsToMany(Task::class, StatusTask::class);

    }

}
