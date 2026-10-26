<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class Project extends Model
{
    protected $fillable = ['user_id','project_name','client_name','project_description','project_deadline','project_status'];
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
