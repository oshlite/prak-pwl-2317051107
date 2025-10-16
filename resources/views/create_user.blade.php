@extends('layouts.app')

@section('content')
<div class="bikini-form-container">

  <div class="bikini-header">
    <h1 class="bikini-title">
      🧽 <i class="bi bi-person-plus-fill me-2"></i> Tambah Pengguna Baru
    </h1>
    <p class="bikini-subtitle">
      Isi data pengguna baru seperti SpongeBob memasak Krabby Patty! 🍔
    </p>
  </div>

  <form action="{{ route('user.store') }}" method="POST" class="bikini-form">
    @csrf

    <div class="bikini-form-group">
      <label for="nama" class="bikini-label">
        <i class="bi bi-person me-1"></i> Nama
      </label>
      <input type="text" class="bikini-input" id="nama" name="nama" placeholder="Masukkan Nama" required>
    </div>

    <div class="bikini-form-group">
      <label for="npm" class="bikini-label">
        <i class="bi bi-card-text me-1"></i> NPM
      </label>
      <input type="text" class="bikini-input" id="npm" name="npm" placeholder="Masukkan NPM" required>
    </div>

    <div class="bikini-form-group">
      <label for="kelas_id" class="bikini-label">
        <i class="bi bi-building me-1"></i> Kelas
      </label>
      <select class="bikini-select" name="kelas_id" id="kelas_id" required>
        <option value="" selected disabled>Pilih Kelas</option>
        @if(isset($kelas) && $kelas->count() > 0)
          @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
          @endforeach
        @else
          <option value="" disabled>Tidak ada data kelas</option>
        @endif
      </select>
    </div>

    <div class="bikini-form-actions">
      <a href="/user" class="btn-bubble-back">
        <i class="bi bi-arrow-left me-2"></i> Kembali
      </a>
      <button type="submit" class="btn-bubble-save">
        <i class="bi bi-check-lg me-2"></i> Simpan Data
      </button>
    </div>
  </form>
</div>

<style>

.bikini-form-container {
  max-width: 600px;
  margin: 2rem auto;
  background: linear-gradient(180deg, #fffde1 0%, #fff3b0 100%);
  border: 4px solid #ffcc00;
  border-radius: 20px;
  box-shadow: 0 8px 25px rgba(255, 204, 0, 0.3);
  padding: 2rem;
  font-family: 'Comic Sans MS', 'Trebuchet MS', sans-serif;
}

.bikini-header {
  text-align: center;
  background: #ffe066;
  border: 3px solid #ffcc00;
  border-radius: 15px;
  padding: 1rem 1.5rem;
  box-shadow: 0 4px 12px rgba(255, 204, 0, 0.4);
  margin-bottom: 2rem;
}

.bikini-title {
  color: #004e98;
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: 0.4rem;
}

.bikini-subtitle {
  color: #0077b6;
  font-size: 1rem;
}

.bikini-form-group {
  margin-bottom: 1.5rem;
  text-align: center;
}

.bikini-input, .bikini-select {
  width: 70%;
  padding: 0.7rem 1rem;
  border: 2px solid #ffdd57;
  border-radius: 10px;
  font-size: 1rem;
  transition: all 0.2s ease;
  background-color: #ffffff;
  display: inline-block;
}

.bikini-input:focus, .bikini-select:focus {
  border-color: #00b4d8;
  box-shadow: 0 0 0 4px rgba(0,180,216,0.2);
  outline: none;
  transform: translateY(-1px);
}

.bikini-form-actions {
  display: flex;
  justify-content: space-between;
  margin-top: 2rem;
}

.btn-bubble-back, .btn-bubble-save {
  border: none;
  border-radius: 50px;
  padding: 0.7rem 1.4rem;
  text-decoration: none;
  font-weight: bold;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-bubble-back {
  background: linear-gradient(135deg, #caf0f8, #ade8f4);
  color: #0077b6;
}

.btn-bubble-back:hover {
  background: linear-gradient(135deg, #90e0ef, #48cae4);
  transform: translateY(-3px);
}

.btn-bubble-save {
  background: linear-gradient(135deg, #ffb703, #fb8500);
  color: white;
  box-shadow: 0 4px 12px rgba(251,133,0,0.4);
}

.btn-bubble-save:hover {
  background: linear-gradient(135deg, #fca311, #ffb703);
  transform: translateY(-3px);
}

@media (max-width: 576px) {
  .bikini-form-container {
    padding: 1.5rem;
  }
  .bikini-title {
    font-size: 1.5rem;
  }
  .bikini-input, .bikini-select {
    width: 100%;
  }
  .bikini-form-actions {
    flex-direction: column;
    gap: 10px;
  }
}
</style>
@endsection