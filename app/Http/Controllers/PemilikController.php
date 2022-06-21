<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index() {

        $pemiliks = Pemilik::get();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $pemiliks->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        return view('pemilik', [
            "title" => "Data Pemilik",
            "active" => 'pemilik',
            "pemiliks" => $pemiliks
        ]);
    }
}
