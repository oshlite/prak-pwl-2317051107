<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile Oryza</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
  font-family: 'Poppins', sans-serif;
  position: relative;
  min-height: 100vh;
  overflow: hidden;
  background: linear-gradient(135deg, #e0a9f9ff, #c4e4faff, #d2fff0ff);
  background-size: 400% 400%;
  animation: bgMove 12s ease infinite;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* agar .bg-text tetap absolute, .card tetap di tengah */
    }
    @keyframes bgMove {
      0%   { background-position: 0% 0%; }
      50%  { background-position: 100% 100%; }
      100% { background-position: 0% 0%; }
    }

    /* TEXT BACKGROUND */
    .bg-text {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
  display: block;
  white-space: nowrap;
      z-index: 0;
      pointer-events: none;
  opacity: 0.45;
    }
    .bg-text span {
      display: inline-block;
      margin: 0 12px 0 0;
      font-size: 2.5rem;
      white-space: nowrap;
      font-weight: bold;
      text-shadow:
        0 0 3px #fff,
        0 0 0px currentColor;
    }
    /* warna-warni siklus */
    .bg-text span:nth-child(5n+1){ color: #e74c3c; }
    .bg-text span:nth-child(5n+2){ color: #f1c40f; }
    .bg-text span:nth-child(5n+3){ color: #2ecc71; }
    .bg-text span:nth-child(5n+4){ color: #3498db; }
    .bg-text span:nth-child(5n+5){ color: #9b59b6; }

    /* CARD */
    .card {
  position: relative;
  z-index: 1;
  width: 350px;
  margin: 0 auto;
      background: #ffffffdd;
      border-radius: 20px;
      padding: 2rem 1.5rem 3rem;
      text-align: center;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    /* CONFETTI */
    .card::before,
    .card::after {
      content: "";
      position: absolute;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      background-image: radial-gradient(circle at 20% 20%, #ff7675 15%, transparent 16%),
                        radial-gradient(circle at 80% 30%, #74b9ff 15%, transparent 16%),
                        radial-gradient(circle at 30% 80%, #ffeaa7 15%, transparent 16%),
                        radial-gradient(circle at 70% 70%, #55efc4 15%, transparent 16%);
      background-size: 50% 50%;
      animation: confetti 8s linear infinite;
      pointer-events: none;
      opacity: 0.3;
    }
    .card::after {
      animation-delay: 4s;
      opacity: 0.2;
    }
    @keyframes confetti {
      0%   { transform: rotate(0deg) translate(0,0); }
      100% { transform: rotate(360deg) translate(0,0); }
    }

    /* AVATAR */
    .avatar {
      position: relative;
      width: 120px;
      height: 120px;
      margin: 0 auto 1rem;
      border-radius: 50%;
      background: linear-gradient(45deg, #fdcb6e, #e17055);
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      cursor: pointer;
    }
    .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .avatar input {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
    }

    /* INPUT FIELDS */
    .fields {
      margin-top: 1rem;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    .fields label {
      display: block;
      text-align: left;
      font-size: 0.9rem;
      color: #2d3436;
      margin-bottom: 0.25rem;
    }
    .fields input {
      width: 100%;
      padding: 0.6rem;
      border: 2px solid #0984e3;
      border-radius: 8px;
  font-size: 0.95rem;
  font-weight: bold;
  outline: none;
    }
    .fields input:focus {
      border-color: #74b9ff;
      box-shadow: 0 0 5px rgba(116,185,255,0.5);
    }
  </style>
</head>
<body>

  <!-- background text -->
  <div class="bg-text" id="bgText"></div>

  <!-- kartu profil -->
  <div class="card">
    <div class="avatar" title="Klik untuk ganti foto">
      <img
        id="preview"
        src="https://i.pinimg.com/736x/eb/08/b9/eb08b9f6ae46db06347c0b213eec5861.jpg"
        alt="Avatar DUARRRRR"
      />
      <input type="file" accept="image/*" id="upload" />
    </div>

    <div class="fields">
      <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" placeholder="Masukkan Nama"/>
      </div>
      <div>
        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" placeholder="Masukkan Kelas"/>
      </div>
      <div>
        <label for="npm">NPM</label>
        <input type="text" id="npm" placeholder="Masukkan NPM"/>
      </div>
    </div>
  </div>

  <script>
    // preview upload
    const upload = document.getElementById('upload');
    const preview = document.getElementById('preview');
    upload.addEventListener('change', e => {
      const file = e.target.files[0];
      if (!file) return;
      const reader = new FileReader();
      reader.onload = () => preview.src = reader.result;
      reader.readAsDataURL(file);
    });

    // generate background text agar looping horizontal tidak pernah kepotong
    const bg = document.getElementById('bgText');
    const colors = ['#e74c3c','#f1c40f','#2ecc71','#3498db','#9b59b6'];
    function fillBgText() {
      bg.innerHTML = '';
      const span = document.createElement('span');
      span.textContent = 'PLIS PWL ONLINE MAKASIH KAK ';
      span.style.visibility = 'hidden';
      bg.appendChild(span);
      const spanWidth = span.offsetWidth;
      bg.innerHTML = '';
      const rowCount = Math.ceil(window.innerHeight / 60);
      const colCount = Math.ceil(window.innerWidth / spanWidth) + 2;
      for (let row = 0; row < rowCount; row++) {
        for (let col = 0; col < colCount; col++) {
          const s = document.createElement('span');
          s.textContent = 'PLIS PWL ONLINE MAKASIH KAK';
          s.style.color = colors[(col + row) % colors.length];
          bg.appendChild(s);
        }
        bg.appendChild(document.createElement('br'));
      }
    }
    fillBgText();
    window.addEventListener('resize', fillBgText);
  </script>
</body>
</html>
