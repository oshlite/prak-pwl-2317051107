<footer class="spongebob-footer">
  <div class="container mx-auto px-4 py-8">
    <div class="footer-content flex flex-wrap justify-between items-center">
      <div class="footer-section text-center">
        <h5 class="footer-logo">🧽 Bikini Bottom University</h5>
      </div>

      <div class="footer-section text-center">
        <h6 class="footer-title">Menu</h6>
        <ul class="footer-menu">
          <li><a href="/user"><i class="bi bi-list-ul mr-2"></i>List User</a></li>
          <li><a href="/user/create"><i class="bi bi-person-plus mr-2"></i>Create User</a></li>
        </ul>
      </div>

      <div class="footer-section text-center">
        <h6 class="footer-title">Contact</h6>
        <div class="footer-contact">
          <p><i class="bi bi-envelope mr-2"></i>support@Bikini Bottom University.ac.id</p>
          <p><i class="bi bi-telephone mr-2"></i>082317051107</p>
        </div>
      </div>
    </div>

    <div class="footer-bottom text-center mt-6 border-t border-yellow-400 pt-4">
      <p>🧽 Copyright Oryza Surya Hapsari - 2317051107 (Warga Rock Bottom) 🧽</p>
    </div>
  </div>
</footer>

<style>

  .spongebob-footer {
    background: linear-gradient(180deg, #0077cc 0%, #004e98 70%, #003366 100%);
    color: #fffbcc;
    border-top: 6px solid #ffd400;
    box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.25);
    position: relative;
    overflow: hidden;
    font-family: 'Comic Sans MS', 'Trebuchet MS', Helvetica, Arial, sans-serif;
  }

  .spongebob-footer::before, .spongebob-footer::after {
    content: '🫧';
    position: absolute;
    font-size: 2rem;
    animation: floatBubbles 8s linear infinite;
    opacity: 0.5;
  }
  .spongebob-footer::before {
    top: 80%;
    left: 10%;
    animation-delay: 1s;
  }
  .spongebob-footer::after {
    top: 90%;
    left: 80%;
    animation-delay: 3s;
  }

  @keyframes floatBubbles {
    0% { transform: translateY(0) scale(1); opacity: 0.7; }
    50% { transform: translateY(-40px) scale(1.2); opacity: 1; }
    100% { transform: translateY(-80px) scale(1); opacity: 0.6; }
  }

  .footer-logo {
    color: #ffec61;
    font-size: 2rem;
    font-weight: 900;
    text-shadow: 2px 2px 0px #003366;
  }

  .footer-subtitle {
    color: #fff8a5;
    font-size: 0.95rem;
    margin-top: 0.4rem;
  }

  .footer-title {
    color: #ffd400;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0.7rem;
    text-shadow: 1px 1px #004e98;
  }

  .footer-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-menu li {
    margin-bottom: 0.6rem;
  }

  .footer-menu a {
    color: #fffbe7;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
  }

  .footer-menu a:hover {
    color: #ffe76b;
    transform: scale(1.08) rotate(-2deg);
  }

  .footer-contact p {
    color: #fffbe7;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
  }

  .footer-bottom {
    border-top: 2px dashed #ffd400;
    margin-top: 2rem;
    padding-top: 1rem;
    color: #ffec61;
    font-weight: 600;
    text-shadow: 1px 1px #002b5b;
  }

  @media (max-width: 768px) {
    .footer-content {
      flex-direction: column;
      text-align: center;
      gap: 2rem;
    }
    .footer-logo {
      font-size: 1.8rem;
    }
    .footer-title {
      font-size: 1.1rem;
    }
  }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">