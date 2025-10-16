<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

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
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
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
        $data = [
            'title' => 'List Users',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
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