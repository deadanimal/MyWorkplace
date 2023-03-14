<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'clock_in_time',
        'clock_out_time',

        'clock_in_location',
        'clock_out_location',        

        'clock_in_selfie',
        'clock_out_selfie',           

        'remarks',
        'status',
        
        'user_id',

    ];  

    public function users()
    {
        return $this->hasMany(User::class);
    }      
}
