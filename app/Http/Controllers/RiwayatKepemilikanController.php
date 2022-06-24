<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Pemilik;
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

    public function create()
    {
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();

        return view('transaksi.create-kepemilikan', [
            "title" => "Riwayat Kepemilikan",
            "active" => 'riwayat kepemilikan',
            "pasars" => $pasars,
            "pemiliks" => $pemiliks
        ]);
    }

    // public function store(Request $request) {

    //     $request->validate([
    //         'nama' => 'required|max:255|min:2',
    //         'alamat' => 'required'
    //     ]);

    //     Pasar::firstOrCreate([
    //         'nama_pasar' => $request['nama'],
    //         'alamat' => $request['alamat'],
    //         'created_by' => $request['created_by']
    //     ]);

    //     return redirect('/pasar')->with('status', 'Pasar berhasil ditambahkan!');
    // }
}
