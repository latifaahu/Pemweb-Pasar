<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    //
    public function index() {

        $pengelolas = Pengelola::get();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $pengelolas->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        return view('pengelola', [
            "title" => "Data Pengelola",
            "active" => 'pengelola',
            "pengelolas" => $pengelolas
        ]);
    }
}
