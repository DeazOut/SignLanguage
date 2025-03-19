<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;
    protected $table = 'lessons';

    public function question(){
        return $this->hasMany(Questions::class);
    }
    public function completedByUsers(){
    return $this->belongsToMany(User::class, 'completed_lessons', 'lesson_id', 'user_id');
    }
}


