<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;
    protected $table= 'dependents';
    
    protected $fillable=[
        'Essn',
        'Dependent_name',
        'Sex',
        'Bdate',
        'Relationship',
    ];
}