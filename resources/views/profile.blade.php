<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url("{{ asset('images/bgg.jpg') }}") no-repeat center center;
      background-size: cover;
    }
    .profile-card {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      width: 350px;
    }
    .profile-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 3px solid #ffb6d9;
    }
    .info {
      padding: 12px;
      margin: 8px 0;
      border-radius: 8px;
      font-weight: bold;
      text-align: left; 
    }
    .pink-light {
      background: #ffe6f2; 
    }
    .pink-strong {
      background: #ffb6d9; 
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <img src="{{ asset('images/fotoku.jpg') }}" alt="Foto Profil">

    <div class="info pink-light">Nama  : {{ $nama }}</div>
    <div class="info pink-light">Kelas : {{ $kelas }}</div>
    <div class="info pink-light">Npm   : {{ $npm }}</div>
  </div>
</body>
</html>
