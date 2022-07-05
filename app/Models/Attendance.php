<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table= 'attendances';
    protected $fillable =[
      
        'user_id',
        ];
    
    
    public function atn()
    {
        return $this->belongsTo(users::class,'user_id','id');
        
    }
}
