<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'address',
        'no_telp',
        'univ',
        'major',
        'ipk',
        'cv',
        'lowongan_id',
    ];
}
