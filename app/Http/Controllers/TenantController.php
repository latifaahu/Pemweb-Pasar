<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Tenant;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index() {

        $tenants = Tenant::latest();

        // untuk mwngambil keyword yang dimasukkan dalam search box
        if(request('search')) {
            $tenants->where('nama_tenant', 'like', '%' . request('search') . '%')
                ->orWhere('nama_pasar', 'like', '%' . request('search') . '%');
        }

        return view('tenant', [
            "title" => "Data Tenant",
            "active" => 'tenant',
            "tenants" => $tenants->get()
        ]);
    }

    public function create()
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();

        return view('tenant.create-tenant', [
            "title" => "Tambah Tenant",
            "active" => 'tenant',
            "tenants" => $tenants,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required|max:255|min:2',
            'pasar' => 'required',
            'pemilik' => 'required',
            'biaya_iuran' => 'required|integer',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        Tenant::firstOrCreate([
            'nama_tenant' => $request['nama'],
            'pasar_id' => $request['pasar'],
            'pemilik_id' =>  $request['pemilik'],
            'biaya_iuran' =>(int) $request['biaya_iuran'],
            'created_by' => $request['created_by'],
            'longitude' => $request['longitude'],
            'latitude' => $request['latitude']
        ]);

        return redirect('/tenant')->with('status', 'Tenant berhasil ditambahkan!');
    }
    public function edit(Tenant $tenant)
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();
        return view('tenant.edit-tenant', [
            "title" => "Edit Tenant",
            "active" => 'tenant',
            "tenants" => $tenant,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks
        ]);
    }

    public function update(Tenant $tenant)
    {
        request()->validate([
            'nama' => 'required|max:255|min:2',
            'pasar' => 'required',
            'pemilik' => 'required',
            'biaya_iuran' => 'required|integer',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $tenant->update([
            'nama_tenant' => request('nama'),
            'pasar_id' => request('pasar'),
            'pemilik_id' =>  request('pemilik'),
            'biaya_iuran' =>(int) request('biaya_iuran'),
            'created_by' => request('created_by'),
            'longitude' => request('longitude'),
            'latitude' => request('latitude')
        ]);

        return redirect('/tenant')->with('status', 'Tenant berhasil diupdate!');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        return redirect('/tenant')->with('status', 'Tenant berhasil dihapus!');

    }

    public function info(Tenant $tenant)
    {
        $tenants = Tenant::get();
        $pasars = Pasar::get();
        $pemiliks = Pemilik::get();
        return view('tenant.info-tenant', [
            "title" => "Informasi Tenant",
            "active" => 'tenant',
            "tenants" => $tenant,
            "pasars" => $pasars,
            "pemiliks" => $pemiliks
        ]);
    }

}
