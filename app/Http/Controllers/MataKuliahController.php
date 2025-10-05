<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah; // Mengimpor model MataKuliah

class MataKuliahController extends Controller
{
    /**
     * Menampilkan daftar semua mata kuliah.
     */
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(), // Mengambil semua data mata kuliah dari database
        ];
        return view('list_mk', $data);
    }

    /**
     * Menampilkan form untuk membuat mata kuliah baru.
     */
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    /**
     * Menyimpan data mata kuliah baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Tambahkan Validasi Data Input
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:20', // SKS harus angka, minimal 1, dll.
        ]);

        // 2. Simpan Data ke Database
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        // 3. Redirect dengan Pesan Sukses
        return redirect()->to('/matakuliah')->with('success', 'Mata kuliah baru berhasil ditambahkan.');
    }
}