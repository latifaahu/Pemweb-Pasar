<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKepemilikan;
use Illuminate\Http\Request;

class RiwayatKepemilikanController extends Controller
{
    //
    public function index() {

        $kepemilikans = RiwayatKepemilikan::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $kepemilikans->where('nama_pasar', 'like', '%' . request('search') . '%')
            ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        return view('transaksi.riwayat-kepemilikan', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "kepemilikans" => $kepemilikans->get()
        ]);
    }
}
