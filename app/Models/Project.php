<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $filable=[
        'Pname',
        'Pnumber',
        'Plocation',
        'Dnum',
        'Pname',
    ];
}