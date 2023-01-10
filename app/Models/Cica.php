<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cica extends Model
{
    use HasFactory;

    protected  $primaryKey = 'cica_id';

    protected $fillable = [
        'neve',
        'neme',
        'fajta',
        'kora',
        'sulya',
        'gazda_neve',
        'gazda_lakcim'
    ];
}
