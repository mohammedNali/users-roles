<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;


    public function students()
    {
        return $this->belongsToMany(User::class, 'lecture_users');
    }
}
