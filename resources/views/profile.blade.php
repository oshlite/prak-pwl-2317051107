<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .profile-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid #ddd;
            overflow: hidden;
        }
        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .info-field {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #e9ecef;
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }
        .field-label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-photo">
            <img src="{{asset('img/oryza.png')}}" alt="Profile Photo">
        </div>
        
        <div class="info-container">
            <div class="info-field">
                <div class="field-label">Nama</div>
                {{ $nama }}
            </div>
            
            <div class="info-field">
                <div class="field-label">Kelas</div>
                {{ $kelas }}
            </div>
            
            <div class="info-field">
                <div class="field-label">NPM</div>
                {{ $npm }}
            </div>
        </div>
    </div>
</body>
</html>