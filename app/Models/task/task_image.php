<?php

namespace App\Models\task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task_image extends Model
{
    use HasFactory;
    protected $table ='task_images';
    protected $fillable = [
    'TaskId',
    'FileName',
    'mediaType',
    ];
}
