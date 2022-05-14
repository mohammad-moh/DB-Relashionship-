<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    
    protected $fillable= [
        'Dname',
        'Dnumber',
        'Mgr_ssn',
        'Mgr_start_date',
    ];
}