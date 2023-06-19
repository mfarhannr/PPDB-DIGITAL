<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;
    protected $table = 'berkas';
    protected $fillable = ['name', 'kk', 'ijazah', 'nilai_rapot', 'foto', 'file', 'ktp_ortu'];
}
