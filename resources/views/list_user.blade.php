@extends('layouts.app')
@section('content')
<div class="bikini-bottom-container">

    <div class="bikini-header">
        <div class="header-bubble">
            <h1 class="bikini-title">
                🧽 <i class="bi bi-people-fill me-2"></i> Bikini Bottom University User Management
            </h1>
            <p class="bikini-subtitle">Kelola data user sistem dengan ceria seperti SpongeBob di Bikini Bottom!</p>
        </div>
        <a href="/user/create" class="btn-bubble">
             + Tambah User Baru
        </a>
    </div>

    @if(session('success'))
    <div class="bubble-alert success">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
    </div>
    @endif

    <div class="bikini-table-card">
        <table class="bikini-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <div class="user-bubble">
                            <div class="bubble-avatar">
                                {{ substr($user->nama, 0, 1) }}
                            </div>
                            <span class="bubble-name">{{ $user->nama }}</span>
                        </div>
                    </td>
                    <td><span class="bubble-npm">{{ $user->nim }}</span></td>
                    <td><span class="bubble-class">{{ $user->nama_kelas }}</span></td>
                    <td class="text-center">
                        <div class="bubble-actions">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn-bubble-edit" title="Edit User">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-bubble-delete" 
                                    onclick="return confirm('Yakin ingin menghapus user {{ $user->nama }}?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

                @if(count($users) === 0)
                <tr>
                    <td colspan="5" class="text-center py-5">
                        <div class="empty-sea">
                            <i class="bi bi-star text-warning display-4"></i>
                            <h4>Belum ada user!</h4>
                            <p>Klik tombol <b>Tambah User Baru</b> untuk memulai petualangan bawah laut 🌊</p>
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<style>

.bikini-bottom-container {
    max-width: 1200px;
    margin: 0 auto;
    background: linear-gradient(180deg, #b3ecff 0%, #e0f7ff 100%);
    border-radius: 20px;
    padding: 30px;
    font-family: 'Comic Sans MS', 'Trebuchet MS', sans-serif;
}

.bikini-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #ffe066;
    border: 3px solid #ffcc00;
    border-radius: 15px;
    padding: 15px 25px;
    box-shadow: 0 4px 15px rgba(255, 204, 0, 0.4);
    margin-bottom: 25px;
    flex-wrap: wrap;
}

.bikini-title {
    color: #004e98;
    font-size: 2rem;
    font-weight: bold;
    margin: 0;
}

.bikini-subtitle {
    color: #0077b6;
    font-size: 1rem;
}

.btn-bubble {
    background: linear-gradient(135deg, #00b4d8, #0096c7);
    color: white;
    border-radius: 50px;
    padding: 0.7rem 1.4rem;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0, 150, 199, 0.4);
    transition: transform 0.3s ease;
}

.btn-bubble:hover {
    background: linear-gradient(135deg, #0096c7, #0077b6);
    transform: translateY(-3px);
}

.bubble-alert {
    background: #d4edda;
    color: #155724;
    border-left: 5px solid #28a745;
    padding: 12px 16px;
    border-radius: 12px;
    margin-bottom: 15px;
    box-shadow: 0 3px 10px rgba(40,167,69,0.2);
    font-weight: bold;
}

.bikini-table-card {
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    overflow: hidden;
}

.bikini-table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}

.bikini-table thead {
    background: linear-gradient(90deg, #00b4d8, #90e0ef);
    color: white;
}

.bikini-table th, .bikini-table td {
    padding: 1rem;
    border-bottom: 2px solid #f0f0f0;
}

.bikini-table tbody tr:hover {
    background-color: #fff9c4;
    transform: scale(1.01);
    transition: all 0.2s ease-in-out;
}

.user-bubble {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 0.6rem;
}

.bubble-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ffb703, #fca311);
    color: white;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 6px rgba(252,163,17,0.4);
}

.bubble-name {
    color: #023047;
    font-weight: bold;
}

.bubble-npm {
    background: #caf0f8;
    color: #0077b6;
    padding: 5px 10px;
    border-radius: 10px;
    font-family: 'Courier New', monospace;
    font-weight: 600;
}

.bubble-class {
    background: #ffe066;
    color: #664d03;
    padding: 5px 12px;
    border-radius: 15px;
    font-weight: 600;
}

.bubble-actions {
    display: flex;
    justify-content: center;
    gap: 8px;
}

.btn-bubble-edit, .btn-bubble-delete {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: 0.3s;
}

.btn-bubble-edit {
    background: linear-gradient(135deg, #219ebc, #023047);
}
.btn-bubble-edit:hover {
    transform: rotate(-10deg);
}

.btn-bubble-delete {
    background: linear-gradient(135deg, #ff595e, #c1121f);
}
.btn-bubble-delete:hover {
    transform: rotate(10deg);
}

.empty-sea {
    padding: 3rem 1rem;
    color: #004e98;
    background: #e0f7ff;
    border-radius: 15px;
}
.empty-sea i {
    color: #ffcc00;
}

@media (max-width: 768px) {
    .bikini-header {
        flex-direction: column;
        text-align: center;
    }
    .btn-bubble {
        margin-top: 10px;
    }
}
</style>
@endsection