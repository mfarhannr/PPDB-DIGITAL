<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    protected $fillable = ['name', 'nisn', 'place', 'gender', 'birthday', 'religion', 'phone', 'disease',  'address', 'school_origin', 'parents_name', 'parents_occupation', 'parents_contact', 'achievement', 'file'];
}
