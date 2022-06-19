<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index() {

        $tenants = Tenant::get();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $tenants->where('nama_tenant', 'like', '%' . request('search') . '%')
                ->orWhere('nama_pasar', 'like', '%' . request('search') . '%');
        }

        return view('tenant', [
            "title" => "Data Tenant",
            "active" => 'tenant',
            "tenants" => $tenants
        ]);
    }

    public function create()
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();

        return view('tenant.create-tenant', [
            "title" => "Tambah Tenant",
            "active" => 'tenant',
            "tenants" => $tenants,
            "pasars" => $pasars,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required|max:255|min:2',
            'pasar' => 'required',
            'pemilik' => 'required',
            'biaya_iuran' => 'required|integer'
        ]);

        Tenant::firstOrCreate([
            'nama_tenant' => $request['nama'],
            'pasar_id' => $request['pasar'],
            'pemilik' =>  $request['pemilik'],
            'biaya_iuran' =>(int) $request['biaya_iuran'],
            'created_by' => $request['created_by']
        ]);

        return redirect('/tenant')->with('status', 'Tenant berhasil ditambahkan!');
    }
}
