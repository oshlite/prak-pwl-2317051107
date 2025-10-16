<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url("{{ asset('images/background.jpeg') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
            transition: all 0.3s ease;
        }
        .profile-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.25);
        }
        .profile-image {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: #f0f0f0;
            overflow: hidden;
            margin-bottom: 20px;
            border: 3px solid #60a5fa;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }
        .info-box {
            width: 100%;
            padding: 14px;
            margin: 8px 0;
            background: #f9fafb;
            border-radius: 12px;
            text-align: center;
            font-size: 17px;
            font-weight: 500;
            color: #333;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        .info-box:hover {
            background: #e0f2fe;
            border-color: #60a5fa;
            color: #1e3a8a;
        }
        h2 {
            margin-bottom: 15px;
            color: #1e3a8a;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        
        <div class="profile-image">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Foto Profil">
        </div>

        <div class="info-box">{{ $nama }}</div>
        <div class="info-box">{{ $kelas }}</div>
        <div class="info-box">{{ $npm }}</div>
    </div>
</body>
</html>
