<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reminder extends Model
{
    use HasFactory;

    protected $table = 'reminders';
    protected $fillable =[
    'reminder_id',
    'Employee_ID',
    'Reminder_name',
    'Reminder_Date_Time',
    'Assign_Employee_Id',
    'to_other',
    ];

public function Emp_Details()
{
    return $this->belongsTo(users::class,'Employee_ID','id');
}
}
