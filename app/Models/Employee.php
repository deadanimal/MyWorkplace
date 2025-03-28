<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Employee extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'organisation_id',
        'user_id',
    ];      

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
    
    public function organisation()
    {
        return $this->belongsTo(User::class);
    }    
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
        // Chain fluent methods for configuration options
    }      
}
