<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Undangan Pernikahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Bagian Atas (Header) -->
  <header class="bg-white text-center py-12 shadow-md">
  <a href="{{ route('login') }}" class="text-1xl text-white justify-center bg-slate-500 bg-cover">Login Sini
    <p class="text-gray-500">Kepada Yang melihat website ini</p>
    <h1 class="text-6xl font-extrabold text-gray-700">Fadhlan & Nafi</h1>
    <p class="text-gray-400 mt-2">akan melakukan pernikahan</p>
    <button class="mt-6 px-4 py-2 bg-rose-100 text-pink-600 rounded-lg shadow-lg hover:bg-pink-200 transition">
      Lihat Undangan
    </button>
  </header>

  <!-- Section Acara Pernikahan -->
  <section class="bg-cover bg-center bg-no-repeat py-12" style="background-image: url('your-background-image-url');">
    <div class="text-center">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Acara Pernikahan</h2>
      <p class="text-lg text-gray-600">Diselenggarakan di SMK Telkom, 21 Agustus 2024</p>
      <p class="text-lg text-gray-600 mt-2">
        Oleh karena itu kami mengundang anda untuk datang ke acara pernikahan Fadhlan dan Nafi
      </p>
    </div>
  </section>

  <!-- Section Pengantin -->
  <section class="text-center py-8 bg-white">
    <div class="flex justify-center space-x-12">
      <!-- Pengantin Wanita -->
      <div class="text-left">
        <h3 class="text-2xl font-bold text-gray-800">Nafi Kusuma</h3>
        <p class="text-md text-gray-600">Anak dari:</p>
        <p class="text-md text-gray-600">Mr. Yoso dan Miss Yoso</p>
      </div>
      <!-- Pengantin Pria -->
      <div class="text-left">
        <h3 class="text-2xl font-bold text-gray-800">Muhammad Fadhlan</h3>
        <p class="text-md text-gray-600">Anak dari:</p>
        <p class="text-md text-gray-600">Mr. Heru dan Miss Heru</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-center py-4">
    <p class="text-white text-xl">BELUM SELESAI</p>
    <p class="text-white mt-2">vvvvvv</p>
    <a href="{{ route('about') }}" class="text-1xl text-white">Tentang Saya
  </footer>

</body>
</html>
