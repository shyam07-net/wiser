<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class users extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'Role','Dept',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department()
    {
        return $this->belongsTo(department::class,'Dept_ID','department_id');
        
    }
    public function empleave()
    {
        return $this->belongsTo(Employeeleaves::class,'id','Employee');
        
    }
    public function leave()
    {
        return $this->belongsTo(leave_manage::class,'id','Emp_id');
        
    }
        public function designations()
    {
        return $this->belongsTo(designation::class,'Designations','des_id');
        
    }
    
 
}
