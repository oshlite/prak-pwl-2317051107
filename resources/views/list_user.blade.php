@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-extrabold text-center mb-6">🛟 Daftar User - Bikini Bottom 🛟</h1>
        <div class="card-sb bg-white p-6 mb-6">
            <p class="text-sm">Welcome to Rumah Nanas Spongebob alamatnya Bikini Bottom.</p>
        </div>
        <x-user-table :users="$users" />
    </div>
</div>
@endsection
