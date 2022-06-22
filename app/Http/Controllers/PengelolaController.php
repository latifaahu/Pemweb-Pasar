<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Pengelola;
use App\Models\User;
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

    public function create()
    {
        $users = User::get();
        $pasars = Pasar::get();

        return view('pengelola.create-pengelola', [
            "title" => "Tambah Pengelola",
            "active" => 'pengelola',
            "users" => $users,
            "pasars" => $pasars,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'user' => 'required',
            'pasar' => 'required'
        ]);

        if(Pengelola::where('user_id', '=', request('user')) -> exists()) {
            return redirect('/pengelola')->with('status', 'Gagal ditambahkan! Pengelola sudah ditugaskan di pasar lain');
        }

        if(Pengelola::where('pasar_id', '=', request('pasar')) -> exists()) {
            return redirect('/pengelola')->with('status', 'Gagal ditambahkan! Pasar sudah memiliki pengelola');
        }

        Pengelola::firstOrCreate([
            'user_id' => $request['user'],
            'pasar_id' => $request['pasar'],
            'created_by' => $request['created_by']
        ]);

        return redirect('/pengelola')->with('status', 'Pengelola berhasil ditambahkan!');
    }

    public function edit(Pengelola $pengelola)
    {
        $users = User::get();
        $pasars = Pasar::get();

        return view('pengelola.edit-pengelola', [
            "title" => "Tambah Pengelola",
            "active" => 'pengelola',
            "pengelola" => $pengelola,
            "users" => $users,
            "pasars" => $pasars
        ]);
    }

    public function update(Pengelola $pengelola)
    {
        request()->validate([
            'user' => 'required',
            'pasar' => 'required'
        ]);

        $pengelola->update([
            'user_id' => request('user'),
            'pasar_id' => request('pasar'),
            'edited_by' => request('edited_by')
        ]);

        return redirect('/pengelola')->with('status', 'Pengelola berhasil diupdate!');
    }

    public function destroy(Pengelola $pengelola)
    {
        $pengelola->delete();

        return redirect('/pengelola')->with('status', 'Pengelola berhasil dihapus!');

    }
}
