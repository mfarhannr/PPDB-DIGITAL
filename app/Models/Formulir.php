<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    protected $fillable = ['full_name', 'nisn', 'gender', 'birthday', 'address', 'school_origin', 'parents_name', 'parents_occupation', 'achievement', 'additional_file'];
}
