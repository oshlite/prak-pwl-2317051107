@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}">Buat Mata Kuliah Baru</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>NAMA MATA KULIAH</td>
                <td>SKS</td>
            </tr>
        </thead>
        <tbody>
            {{-- PERBAIKAN: Ubah $matakuliah menjadi $mks --}}
            @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection