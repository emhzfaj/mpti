<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <style>
    h1, h2 {
      font-family: 'Inter-Bold', sans-serif;
    }
    h3,h4,nav{
      font-family: 'Inter', sans-serif;
    }
    </style>
    <nav>
    <img src="images/navman.png" alt="Logo" class="logo">
  <ul>
    <li><a href="#">Program Kami</a></li>
    <li><a href="#">Testimoni</a></li>
    <li><a href="#">Benefit</a></li>
    <li><a href="#">Sign In</a></li>
  </ul>
</nav>
<script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
  
<div class="container sr-fade">
    <div class="image-container">
      <img src="images/human.png" alt="Image Description">
    </div>

<h1 class="sr-fade">Bimbel</h1>
<h2 class="sr-fade">Teman Juara</h2>
<h3 class="sr-fade">Bersama bisa menjadi sang juara
</h3>

<div class="button-container sr-fade">
  <button type="button" class="btn">Daftar Sekarang</button>
  <button type="button" class="btn">Tentang Kami</button>
</div>

<h1 class="sr-fade">Tentang Kami</h1>


<div class="container">
  <h4 class="sr-fade">Layanan bimbingan belajar kami menawarkan berbagai program belajar dari jenjang TK hingga SMP yang disesuaikan dengan kebutuhan dan minat siswa, mulai dari pelajaran matematika, bahasa Inggris hingga IPA maupun IPS. Kami memiliki tutor yang berpengalaman dan berkualitas dalam membimbing siswa dalam belajar, sehingga siswa dapat lebih mudah memahami materi pelajaran dan meraih prestasi akademik yang lebih baik. Ingin belajar dimana saja dan kapan saja? Kami memiliki dua sistem pembelajaran, yakni pembelajaran secara online dan pembelajaran secara offline loh.. Menarik bukan? Belajar kapan saja dan dimana saja bisa bersama Teman Juara</h4>
</div>



<h1 class="sr-fade">Program Pilihan Teman Juara</h1>


  <script>
    // Initialize ScrollReveal
    ScrollReveal().reveal('.sr-fade', { delay: 300, duration: 800, distance: '50px', opacity: 0 });
  </script>
</body>
</html>