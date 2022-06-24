<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatIuran;
use App\Models\Tenant;
use App\Models\Pemilik;


class RiwayatIuranController extends Controller
{
    public function index(){
    $iurans = RiwayatIuran::latest();

    // untuk mwngambil keyword yang dimasukkan dalam search box
    if(request('search')) {
        $iurans->where('nama_tenant', 'like', '%' . request('search') . '%')
        ->orWhere('alamat', 'like', '%' . request('search') . '%');
    }

    return view('transaksi.riwayat-iuran', [
        "title" => "Riwayat Iuran",
        "active" => 'riwayat iuran',
        "iurans" => $iurans->get()
    ]);
}
    public function create()
{
    $tenants = Tenant::get();
    $iurans = RiwayatIuran::get();

    return view('transaksi.create-iuran', [
        "title" => "Riwayat Iuran",
        "active" => 'riwayat Iuran',
        "tenants" => $tenants,
        "iurans" => $iurans

    ]);
}


}
