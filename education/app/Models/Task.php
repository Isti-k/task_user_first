<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillabe = [
        'title',
        'description',
        'end_date',
        'status',
        'user_id',
        'projects_id'
    ];
}
