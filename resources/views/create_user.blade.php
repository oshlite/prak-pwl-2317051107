@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-pink-50 py-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-pink-600 text-center mb-8">Buat pengguna baru</h1>
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <form action="{{ route('user.store') }}" method="POST" class="px-10 py-5">
                @csrf
                <label for="nama" class="py-3 text-sm font-semibold">Nama:</label><br>
                <input type="text" id="nama" name="nama" class="py-3 px-8 w-full border-pink border border-radius-md"><br><br>
                <label for="nim" class="py-3 text-sm font-semibold">NPM:</label><br>
                <input type="text" id="nim" name="nim" class="py-3 px-8 w-full border-pink border border-radius-md"><br><br>
                <label for="kelas">Kelas:</label><br>
                <select name="kelas_id" id="kelas_id" class="w-[200px]">


                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{
                    $kelasItem->nama_kelas }}</option>
                @endforeach
                
                </select><br><br>
                <button type="submit" class="bg-pink-400 px-6 py-2 rounded-md font-bold text-white">Submit</button>
            </form>
        </div>
    </div>
</div>
<div>
    <h1>Buat Pengguna Baru</h1>
    
</div>
@endsection