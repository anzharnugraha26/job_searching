<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        return view('page.admin.input-lowongan.index');
    }

    public function daftar()
    {
        return view('page.admin.input-lowongan.daftar-lowongan');
    }

    public function save(Request $request)
    {
        Lowongan::create([
            'id_perusahaan' => $request->id_perusahaan,
            'nama_perusahaan' => $request->id_perusahaan,
            'posisi' => $request->posisi,
            'alamat_perusahaan' => $request->alamat_perusahaan,
        ]);
        return redirect()->back();
    }
}
