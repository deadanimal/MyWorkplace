<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Leave extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'proposed_date',
        'leave_type',

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
        // Chain fluent methods for configuration options
    }      
}
