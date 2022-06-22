<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'nik',
        'no_wa',
        'no_telp',
        'created_by'
    ];
}
