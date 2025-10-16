<nav class="spongebob-navbar">
  <div class="container mx-auto flex flex-col justify-center items-center px-6 py-4 text-center">
    <h1 class="text-2xl font-extrabold text-blue-900 tracking-wide title-text mb-2">
      --------------------------- Bikini Bottom University -------------------------
    </h1>

    <div class="flex justify-center items-center space-x-4 nav-buttons">
      <a href="/matakuliah" class="nav-link">
        <i class="bi bi-journal-bookmark-fill mr-1"></i> Daftar Mata Kuliah
      </a>
      <a href="{{ route('matakuliah.create') }}" class="nav-btn">
        <i class="bi bi-plus-circle-fill mr-1"></i> Tambah Mata Kuliah
      </a>
    </div>
  </div>
</nav>

<style>

  .spongebob-navbar {
    background: linear-gradient(90deg, #ffec61, #ffd400, #ffb400);
    border-bottom: 6px solid #004aad;
    box-shadow: 0 6px 20px rgba(0, 50, 100, 0.25);
    font-family: 'Comic Sans MS', 'Trebuchet MS', Helvetica, Arial, sans-serif;
    position: sticky;
    top: 0;
    z-index: 1000;
    animation: floaty 5s ease-in-out infinite;
  }

  .title-text {
    color: #003366;
    text-shadow: 2px 2px #ffffff;
    letter-spacing: 1px;
  }

  .nav-link, .nav-btn {
    padding: 9px 16px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
    font-size: 0.95rem;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
  }

  .nav-link {
    background-color: #0077cc;
    color: #fffbe7;
    border: 2px solid #004e98;
  }

  .nav-link:hover {
    background-color: #0099ff;
    transform: translateY(-3px) rotate(-2deg);
    box-shadow: 0 5px 10px rgba(0, 153, 255, 0.4);
  }

  .nav-btn {
    background-color: #ff9800;
    color: #003366;
    border: 2px solid #cc7a00;
  }

  .nav-btn:hover {
    background-color: #ffc93c;
    transform: translateY(-3px) rotate(2deg);
    box-shadow: 0 5px 10px rgba(255, 193, 7, 0.4);
  }

  @keyframes floaty {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(3px); }
  }

  @media (max-width: 768px) {
    .nav-buttons {
      flex-direction: column;
      gap: 0.6rem;
    }

    .nav-link, .nav-btn {
      width: 100%;
      justify-content: center;
    }

    .title-text {
      font-size: 1.6rem;
    }
  }
</style>