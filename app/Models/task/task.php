<?php

namespace App\Models\task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class task extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= 'tasks';
    protected $fillable =[
   'SenderId',
   'ReciverId',
   'Sndr_DeptId',
   'Rcvr_DeptId',
   'Title',
   'Description',
   'AdditionalCmnt',
   'StartDate',
   'CompletionDate',
   'file',
   'Status',
    ];
public function userInfo()
{
    return $this->belongsTo(\App\Models\users::class,'ReciverId','id');
}
public function senderInfo()
{
 return $this->belongsTo(\App\Models\users::class,'SenderId','id');   
}
public function taskImages()
{
    return $this->belongsTo(task_image::class,'id','TaskId');
}
public  function taskStatus()
{
    return $this->belongsTo(task_Status::class,'Status','TaskStatusCode');
}
}
