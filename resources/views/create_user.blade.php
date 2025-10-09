@extends('layouts.app')
@section('content')
<div class="py-0">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-extrabold text-center mb-6">🧽 Buat User Baru Bikini Bottom 🛟</h1>
        <div class="card-sb bg-white p-3 mb-6">
            <p class="text-sm">Isi form di bawah untuk menambahkan pengguna ke daftar</p>
        </div>

        <div class="card-sb bg-white p-6">
            <form action="{{ route('user.store') }}" method="POST" class="space-y-2">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-semibold">Nama</label>
                    <input type="text" id="nama" name="nama" class="mt-1 block w-full px-4 py-2 border rounded-md" placeholder="Contoh: SpongeBob SquarePants">
                </div>

                <div>
                    <label for="nim" class="block text-sm font-semibold">NPM</label>
                    <input type="text" id="nim" name="nim" class="mt-1 block w-full px-4 py-2 border rounded-md" placeholder="2317051107">
                </div>

                <div>
                    <label for="kelas_id" class="block text-sm font-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="mt-1 block w-60 px-3 py-2 border rounded-md">
                        @if(isset($kelas) && count($kelas))
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        @else
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        @endif
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn-sb px-6 py-2 rounded-md font-bold">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection