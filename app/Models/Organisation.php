<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subdomain',
        'status',
        'user_id',
    ];  

    public function users()
    {
        return $this->hasMany(User::class);
    }      

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }     
     
}
