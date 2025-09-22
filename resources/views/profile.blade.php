<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile CardBox</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Card utama */
    .cardbox {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      text-align: center;
      width: 300px;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #fff;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .box {
      background: rgba(255,255,255,0.8);
      padding: 10px;
      margin: 10px 0;
      border-radius: 8px;
      font-size: 16px;
      color: #222;
      font-weight: 500;
      transition: transform 0.2s;
    }

    .box:hover {
      transform: scale(1.05);
      background: rgba(255,255,255,1);
    }
  </style>
</head>
<body>
  <div class="cardbox">
    <!-- Foto profil -->
    <img src="https://i.pinimg.com/1200x/28/26/04/2826047e092c901480fe4c0c4221c110.jpg" alt="Foto Profil" class="profile-img">

    <!-- Kotak info -->
    <div class="box">Nama : {{ $nama }}</div>
    <div class="box">Kelas : {{ $kelas }}</div>
    <div class="box">NPM : {{ $npm }}</div>
  </div>
</body>
</html>
