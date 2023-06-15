    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="styles.css">
      <title>Selamat Datang</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <style>
        h1,
        h2 {
          font-family: 'Inter-Bold', sans-serif;
        }

        h3,
        h4,
        nav {
          font-family: 'Inter', sans-serif;
        }
      </style>


      <nav>
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <input type="checkbox" id="menu-toggle">
        <img src="images/navman.png" alt="Logo" class="logo">
        <ul class="menu">
          <li><a href="#program-teman-juara">Program Kami</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#benefit">Benefit</a></li>
          <li><a href="login.php">Sign In</a></li>
        </ul>
      </nav>


<!--    
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <input type="checkbox" id="menu-toggle">
    <img src="images/navman.png" alt="Logo" class="logo">
    <ul class="menu">
      <li><a href="#">Program Kami</a></li>
      <li><a href="#">Testimoni</a></li>
      <li><a href="#">Benefit</a></li>
      <li><a href="#">Sign In</a></li>
    </ul>
  </nav>
      --> 

    


      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body>

      <div class="container sr-fade">
        <div class="image-container">
          <img src="images/human.svg" alt="Image Description">
        </div>

        <h1 class="sr-fade">Bimbel</h1>
        <h2 class="sr-fade">Teman Juara</h2>
        <h3 class="sr-fade">Bersama bisa menjadi sang juara
        </h3>

        <div class="button-container sr-fade">
          <button type="button" class="btn">Daftar Sekarang</button>
          <button type="button" class="btn">Tentang Kami</button>
        </div>
        <div id="tentang-kami" class="container sr-fade">
          <h1 class="sr-fade">Tentang Kami</h1>
          <div class="container">

            <h4 class="sr-fade">Layanan bimbingan belajar kami menawarkan berbagai program belajar dari jenjang TK
              hingga
              SMP
              yang disesuaikan dengan kebutuhan dan minat siswa, mulai dari pelajaran matematika, bahasa Inggris hingga
              IPA
              maupun IPS. Kami memiliki tutor yang berpengalaman dan berkualitas dalam membimbing siswa dalam belajar,
              sehingga siswa dapat lebih mudah memahami materi pelajaran dan meraih prestasi akademik yang lebih baik.
              Ingin
              belajar dimana saja dan kapan saja? Kami memiliki dua sistem pembelajaran, yakni pembelajaran secara
              online
              dan
              pembelajaran secara offline loh.. Menarik bukan? Belajar kapan saja dan dimana saja bisa bersama Teman
              Juara
            </h4>
          </div>



          <div class="sr-fade">
            <div class="card-container1">
              <div class="card1">
                <h3>Bimble Offline</h3>
                <p>Kamu akan belajar secara Offline bersama pengajar yang tentunya suasana belajarmu akan lebih seru dan
                  menyenangkan loh.. kamu akan mendapatkan akses langsung ke materi pembelajaran , diskusi interaktif
                </p>
              </div>

              <div class="card1">
                <h3>Bimble Online</h3>
                <p>Ini nih, cocok banget buat kamu yang suka belajar dimana saja dan kapan saja, bimbel online dapat
                  dilakukan secara asingkronus atau sinkronus, tergantung pada cara penyelenggara menyediakan konten dan
                  interaksi dengan siswa itu sendiri.</p>
              </div>
            </div>
          </div>
          <div class="sr-fade">
            <div class="image-container2">
              <img src="images/human2.png" alt="Image Description">
            </div>
          </div>
          <div id="program-teman-juara" class="container sr-fade">
            <h1 class="sr-fade">Program Pilihan Teman Juara</h1>
            <p class="sr-fade"> Pilih program bimbingan sesuai dengan kebutuhan kamu </p>
          </div>
          <div class="container sr-fade">
            <div class="card-container">
              <div class="card">
                <img src="images/benef1.png" alt="Image 1">
                <div class="card-content">


                  <a href="#" class="rounded-button">Program TK</a>
                </div>
              </div>

              <div class="card">
                <img src="images/benef2.png" alt="Image 1">
                <div class="card-content">


                  <a href="#" class="rounded-button">Program SD</a>
                </div>
              </div>

              <div class="card">
                <img src="images/benef3.png" alt="Image 1">
                <div class="card-content">


                  <a href="#" class="rounded-button">Program SMP</a>
                </div>
              </div>
            </div>
          </div>




          <h1 class="sr-fade">Apa saja benefit yang bisa di dapat bersama teman juara</h1>
          <p class="sr-fade"> Benefit fasilitas yang diperoleh setelah bergabung di Bimbingan Teman Juara akan
            mempermudah
            kamu untuk
            mencapai
            impianmu! </p>



          <div class="container sr-fade">
            <div class="card-container-benef">
              <div class="card-benef">
                <img src="images/benef1.png" alt="Image 1">
                <div class="card-content-benef">
                  <p>
                  Belajar lebih fokus dalam suasana bimbel. 
Tenang dan terkontrol, siswa dapat belajar dengan fokus dan efektif. Hal ini akan membantu siswa dalam memahami materi pelajaran dengan baik.

                  </p>
                </div>
              </div>

              <div class="card-benef">
                <img src="images/benef2.png" alt="Image 2">
                <div class="card-content-benef">
                  <p>
                  Pembelajaran yang terjadwal. Hal ini akan membantu siswa dalam mengatur waktu belajar dengan lebih efektif dan meningkatkan produktivitas.

                  </p>
                </div>
              </div>
            </div>

            <div class="card-container-benef">
              <div class="card-benef">
                <img src="images/benef3.png" alt="Image 3">
                <div class="card-content-benef">
                  <p>
                  Meningkatkan prestasi Akademik. Tutor-tutor yang perpengalaman akan membantu siswa dalam memahami pelajaran dan mengatasi kesulitan yang dihadapi dalam belajar.

                  </p>
                </div>
              </div>

              <div class="card-benef">
                <img src="images/benef4.png" alt="Image 4">
                <div class="card-content-benef">
                  <p>
                  bimbel dapat menyesuaikan metode. pembelajaran dengan gaya belajar siswa. Hal ini membantu siswa memahami materi pelajaran dengan lebih baik

                  </p>
                </div>
              </div>
            </div>
          </div>


          <h1 class="sr-fade">Testimoni Teman Juara</h1>

          <div class="container sr-fade">
            <div class="card-container-testi">
              <div class="card-testi">
                <img src="images/prof1.jpg" alt="Image 1">
                <div class="card-content-testi">

                  <h3>Putra</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>
              </div>

              <div class="card-testi">
                <img src="images/prof2.jpg" alt="Image 1">
                <div class="card-content-testi">

                  <h3>Adinda</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>
              </div>

            </div>

            <h1 class="sr-fade">Alumni</h1>
           



              <div class="section-slider">
  <div class="slider-container">
    <div class="slider-card active">
      <img src="images/prof2.jpg" alt="Image 1">
      <div class="card-content">
      </div>
    </div>
    <div class="slider-card">
      <img src="images/prof1.jpg" alt="Image 2">
      <div class="card-content">
        <h3>Image 2</h3>
        <p>Description of Image 2</p>
      </div>
    </div>
    <div class="slider-card">
      <img src="image3.jpg" alt="Image 3">
      <div class="card-content">
        <h3>Image 3</h3>
        <p>Description of Image 3</p>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

              <script src="app.js"></script>


<script>
  const menuToggle = document.getElementById('menu-toggle');
const menu = document.querySelector('.menu');

menuToggle.addEventListener('change', function () {
  if (menuToggle.checked) {
    menu.style.display = 'flex';
  } else {
    menu.style.display = 'none';
  }
});
</script>
              
    </body>
    <!--
    <div class="relative" style="width: 396px; height: 235px;">
    <p class="absolute text-2xl text-white" style="left: 34px; top: 0px;">Bersama menjadi sang juara !</p>
    <p class="w-80 h-12 absolute text-2xl font-bold" style="left: 39px; top: 65px;">Hubungi Kami Lebih Lanjut</p>
    <div class="inline-flex flex-col space-y-4 items-center justify-end w-32 h-32 absolute left-0 bottom-0">
        <img class="w-20 h-20" src="https://via.placeholder.com/87x75"/>
        <p class="w-full h-8 text-xl font-bold text-white">Whatsapp</p>
    </div>
    <div class="inline-flex flex-col space-y-6 items-center justify-end w-20 h-32 absolute inset-x-0 bottom-0 mx-auto">
        <img class="w-full h-16" src="https://via.placeholder.com/76x66"/>
        <p class="w-20 h-8 text-xl font-bold text-white">E-Mail</p>
    </div>
    <div class="inline-flex flex-col space-y-1.5 items-center justify-end w-32 h-32 absolute right-0 bottom-0">
        <img class="w-2/3 h-24" src="https://via.placeholder.com/81x94"/>
        <p class="w-full h-1/4 text-xl font-bold text-white">Instagram</p>
    </div>
</div>
      -->
    </html>