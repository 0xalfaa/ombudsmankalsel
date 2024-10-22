<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    // Menampilkan form laporan
    public function create()
    {
        return view('laporan.form');
    }

    // Menyimpan data laporan
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'laporan' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        // Simpan file jika ada
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('laporan_files', 'public');
        }

        // Simpan laporan ke database atau kirim ke email, dll.
        // (Tambahkan logika sesuai kebutuhan Anda, misalnya simpan ke database)

        // Kirimkan pesan sukses
        return back()->with('success', 'Laporan Anda berhasil dikirim!');
    }
}
