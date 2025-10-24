<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create()
{
    $kelas = Kelas::all();

    foreach ($kelas as $kelasItem) {
        if ($kelasItem && !empty($kelasItem->nama_kelas)) {
            try {
                $decryptedName = Crypt::decryptString($kelasItem->nama_kelas);
                $kelasItem->nama_kelas = $decryptedName;
            } catch (DecryptException $e) {
                Log::error(
                    'Gagal dekripsi nama_kelas (ID: ' . $kelasItem->id . ') saat memuat form create user',
                    ['error' => $e->getMessage()]
                );

                $kelasItem->nama_kelas = '[Data Kelas Rusak]';
            }
        }
    }

    return view('create_user', ['kelas' => $kelas]);
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $this->userModel->create([
            'nama' => $validated['nama'],
            'nim' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan!');
    }

    public function index()
{
    $users = Pengguna::with('kelas')->get();
    $title = 'test';

    foreach ($users as $user) {
        if ($user->kelas && !empty($user->kelas->nama_kelas)) {
            try {
                $decryptedName = Crypt::decryptString($user->kelas->nama_kelas);
                $user->kelas->nama_kelas = $decryptedName;
            } catch (DecryptException $e) {
                Log::error(
                    'Gagal dekripsi nama_kelas (ID: ' . $user->kelas->id . ') untuk user: ' . $user->id,
                    ['error' => $e->getMessage()]
                );

                $user->kelas->nama_kelas = '[Data Kelas Rusak]';
            }
        }
    }

    return view('list_user', compact('users', 'title'));
}


    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();
        
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];
        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $user = $this->userModel->findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
    }
}