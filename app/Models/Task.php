<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Task extends Model
{
    protected $fillable = ['project_id','task_name','task_status'];
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
