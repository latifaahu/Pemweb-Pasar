<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pasar',
        'alamat',
        'created_by',
        'edited_by'
    ];
}
