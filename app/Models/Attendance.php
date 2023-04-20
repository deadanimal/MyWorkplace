<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Attendance extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        
        'clock_in_timestamp',
        'clock_out_timestamp',

        'clock_in_location',
        'clock_out_location',        

        'clock_in_selfie',
        'clock_out_selfie',           

        'attachment',
        'remarks',
        'status',
        
        'employee_id',

    ];  

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }     
            

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
    }    
}
