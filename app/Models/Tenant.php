<?php

namespace App\Models;
use App\Models\Pemilik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //data yang tidak boleh di-assign, sedangkan sisanya boleh
    protected $with = ['pasar']; //eager loading. with digunakan agar sekalian pasar terambil saat pemanggilan tenant
    protected $fillable = [
        'pasar_id',
        'nama_tenant',
        'pemilik_id',
        'biaya_iuran',
        'longitude',
        'latitude',
        'created_by'
    ];
    
    public function pasar() { //menghubungkan model Tenant dengan model Pasar
        return $this->belongsTo(Pasar::class); //mengembalikan relasi dari model Tenant terhadap model Pasar [dalam case ini, 1 tenant punya 1 pasar. jadi pake belongsTo(Pasar)]
    }
    public function pemilik() { //menghubungkan model Tenant dengan model Pasar
        return $this->belongsTo(Pemilik::class); //mengembalikan relasi dari model Tenant terhadap model Pasar [dalam case ini, 1 tenant punya 1 pasar. jadi pake belongsTo(Pasar)]
    }
}
