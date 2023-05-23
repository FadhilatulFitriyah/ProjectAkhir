<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    // protected $fillable = ['id', 'nama', 'nik', 'jenis_kelamin', 'jabatan', 'alamat']
    protected $guarded = [];
}