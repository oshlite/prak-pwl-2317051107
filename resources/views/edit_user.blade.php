@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-5">
    <div class="bikini-form-container">

      <div class="bikini-header">
        <h1 class="bikini-title">
          🧽 <i class="bi bi-person-check me-2"></i> Edit User
        </h1>
        <p class="bikini-subtitle">Perbarui data user <strong>{{ $user->nama }}</strong></p>
      </div>

      @if($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        Terdapat kesalahan dalam pengisian form. Silakan periksa kembali.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <form action="{{ route('user.update', $user->id) }}" method="POST" class="bikini-form">
        @csrf
        @method('PUT')

        <div class="bikini-form-group">
          <label for="nama" class="bikini-label">
            <i class="bi bi-person me-1"></i> Nama Lengkap
          </label>
          <input type="text" class="bikini-input" id="nama" name="nama"
            value="{{ old('nama', $user->nama) }}" placeholder="Masukkan Nama Lengkap" required>
          @error('nama')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="bikini-form-group">
          <label for="npm" class="bikini-label">
            <i class="bi bi-card-text me-1"></i> NPM
          </label>
          <input type="text" class="bikini-input" id="npm" name="npm"
            value="{{ old('npm', $user->nim) }}" placeholder="Masukkan NPM" required>
          @error('npm')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="bikini-form-group">
          <label for="kelas_id" class="bikini-label">
            <i class="bi bi-building me-1"></i> Kelas
          </label>
          <select class="bikini-select" name="kelas_id" id="kelas_id" required>
            <option value="" disabled>Pilih Kelas</option>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"
              {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
              {{ $kelasItem->nama_kelas }}
            </option>
            @endforeach
          </select>
          @error('kelas_id')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="bikini-form-actions">
          <a href="/user" class="btn-bubble-back">
            <i class="bi bi-arrow-left me-2"></i> Kembali
          </a>
          <button type="submit" class="btn-bubble-save">
            <i class="bi bi-check-lg me-2"></i> Update Data
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>

.bikini-form-container {
  background: linear-gradient(180deg, #fffde1 0%, #fff3b0 100%);
  border: 4px solid #ffcc00;
  border-radius: 20px;
  box-shadow: 0 8px 25px rgba(255, 204, 0, 0.3);
  padding: 2rem;
  font-family: 'Comic Sans MS', 'Trebuchet MS', sans-serif;
  margin-top: 2rem;
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

.bikini-label {
  display: block;
  font-weight: bold;
  color: #004e98;
  margin-bottom: 0.5rem;
}

.bikini-input,
.bikini-select {
  width: 70%;
  padding: 0.7rem 1rem;
  border: 2px solid #ffdd57;
  border-radius: 10px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background-color: #ffffff;
  display: inline-block;
}

.bikini-input:focus,
.bikini-select:focus {
  border-color: #00b4d8;
  box-shadow: 0 0 0 4px rgba(0, 180, 216, 0.2);
  outline: none;
  transform: translateY(-2px);
}

.text-danger {
  font-size: 0.85rem;
  margin-top: 0.3rem;
  color: #e63946;
}

.bikini-form-actions {
  display: flex;
  justify-content: space-between;
  margin-top: 2rem;
}

.btn-bubble-back,
.btn-bubble-save {
  border: none;
  border-radius: 50px;
  padding: 0.7rem 1.4rem;
  font-weight: bold;
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
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
  box-shadow: 0 4px 12px rgba(251, 133, 0, 0.4);
}

.btn-bubble-save:hover {
  background: linear-gradient(135deg, #fca311, #ffb703);
  transform: translateY(-3px);
}

@media (max-width: 576px) {
  .bikini-input,
  .bikini-select {
    width: 100%;
  }
  .bikini-form-actions {
    flex-direction: column;
    gap: 10px;
  }
}
</style>
@endsection