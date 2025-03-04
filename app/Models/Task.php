<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Fillable fields
    protected $fillable = ['title', 'description', 'completed'];
}
