<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class Claim extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        
        'amount',
        'currency',           

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
