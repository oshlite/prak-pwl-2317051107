@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-pink-50 py-8">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-pink-600 text-center mb-8">Daftar User</h1>
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <table class="w-full text-center border-collapse">
                <thead>
                    <tr class="bg-pink-400 text-white">
                        <th class="py-3 px-4 text-sm font-semibold">ID</th>
                        <th class="py-3 px-4 text-sm font-semibold">Nama</th>
                        <th class="py-3 px-4 text-sm font-semibold">NPM</th>
                        <th class="py-3 px-4 text-sm font-semibold">Kelas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-100">
                    @foreach ($users as $user)
                        <tr class="hover:bg-pink-100 transition duration-300">
                            <td class="py-3 px-4 text-gray-700">{{ $user->id }}</td>
                            <td class="py-3 px-4 text-gray-700">{{ $user->nama }}</td>
                            <td class="py-3 px-4 text-gray-700">{{ $user->nim }}</td>
                            <td class="py-3 px-4 text-gray-700">{{ $user->kelas->nama_kelas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
