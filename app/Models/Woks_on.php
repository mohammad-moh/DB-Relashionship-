<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woks_on extends Model
{
    use HasFactory;

    protected $table= 'woks_ons';
    protected $fillable=[
        'Essn',
        'Pno',
        'Hours',
    ];
}