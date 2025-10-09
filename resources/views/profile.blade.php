<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile CardBox</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      font-family: 'Poppins', sans-serif;
      color: #fff;
    }

    /* Header & Footer */
    header, footer {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 15px 30px;
      text-align: center;
      font-weight: 600;
      letter-spacing: 1px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    footer {
      font-size: 14px;
      margin-top: auto;
    }

    /* Container tengah */
    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Card */
    .cardbox {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      padding: 40px 35px;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.4);
      text-align: center;
      width: 320px;
      animation: fadeInUp 0.8s ease-out;
    }

    @keyframes fadeInUp {
      0% { transform: translateY(50px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      margin-bottom: 20px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.6);
      transition: transform 0.3s ease;
    }

    .profile-img:hover {
      transform: scale(1.08);
    }

    .box {
      background: rgba(255,255,255,0.85);
      padding: 12px;
      margin: 12px 0;
      border-radius: 10px;
      font-size: 15px;
      color: #222;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      gap: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: all 0.25s ease;
    }

    .box i {
      color: #2c5364;
      font-size: 18px;
    }

    .box:hover {
      transform: translateX(5px) scale(1.03);
      background: #fff;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    🌟 Profile Mahasiswa
  </header>

  <!-- Main content -->
  <main>
    <div class="cardbox">
      <!-- Foto profil -->
      <img src="" alt="Foto Profil" class="profile-img">

      <!-- Kotak info -->
      <div class="box"><i class="fa-solid fa-user"></i> Nama : {{ $nama }}</div>
      <div class="box"><i class="fa-solid fa-school"></i> Kelas : {{ $kelas }}</div>
      <div class="box"><i class="fa-solid fa-id-card"></i> NPM : {{ $npm }}</div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    © 2025 Syahdam Rizky Firdaus | All Rights Reserved
  </footer>
</body>
</html>
