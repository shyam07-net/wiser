<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees_Profile extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'employees__profiles';
    protected $fillable =[
    'Employee_ID',
    'First_Name',
    'Last_Name',
    'DateOfJoining',
    'Designation',
    'Gender',
    'Marital_Status',
    'DOB',
    'Mob',
    'Profile_Image',
    'Highest_Qualification',
    'Address',
    'State',
    'Country',
    'PinCode',
    ];

public function EmployeeDetails()
{
    return $this->belongsTo(users::class,'Employee_ID','id');
}
}
