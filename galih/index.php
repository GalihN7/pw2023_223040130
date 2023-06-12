<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teknologi</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg">
      <a href="#home" class="navbar-logo text-decoration-none">Teqno.</a>
      <div class="navbar-nav">
        <a class="nav-computer text-decoration-none" href="#Computer">Computer</a>
        <a class="nav-computer text-decoration-none" href="#Sejarah">Sejarah</a>
        <a class="nav-computer text-decoration-none" href="#About">About</a>
      </div>
      <div class="navbar-extra">
        <a class="btn" href="login.php"><i data-feather="log-in"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Main Sec -->
    <section class="main" id="home">
      <main class="content">
        <h1>Sejarah perkembangan komputer.</h1>
        <p>Perkembangan komputer dari generasi pertama sampai sekarang.</p>
      </main>
    </section>
    <!-- Main Sec  -->

    <!-- about section start -->
    <section class="about" id="Computer">
      <h2>
        <p>-</p>
        Komputer
      </h2>
      <div class="row">
        <div class="about-img">
          <img src="img/komputer2.jpg" alt="Tentang Kami" />
          <!--- <img src="img/android.png" alt="Tentang Kami" /> --->
        </div>
        <div class="content">
          <h3>.</h3>
          <p>Komputer adalah perangkat elektronik yang memproses dan menghasilkan informasi dengan kecepatan dan ketepatan yang tinggi.</p>
          <p>Dalam kehidupan modern, komputer menjadi perangkat yang tak tergantikan, memainkan peran penting dalam berbagai bidang seperti bisnis, pendidikan, ilmu pengetahuan, dan hiburan.</p>
          <p>Namun, penggunaannya terbatas dalam hal customisasi dan hanya tersedia pada ponsel buatan Apple yang cenderung memiliki harga yang lebih mahal.</p>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- menu section start -->
    <section class="menu" id="Sejarah">
      <h2>
        <p>-</p>
        <p>-</p>
        Sejarah Komputer
      </h2>
      <div class="row">
        <div class="menu-card">
          <img src="img/komputer.jpg" alt="gen1" class="menu-card-image" id="gen1" />
          <h3 class="menu-card-tittle"><a href="gen1.html">Komputer Generasi Pertama</a></h3>
          <p class="menu-card-price">(1940-1956)</p>
        </div>
        <div class="menu-card">
          <img src="img/komputergen2.jpg" alt="gen2" class="menu-card-image" id="gen2" />
          <h3 class="menu-card-tittle"><a href="gen2.html">Komputer Generasi Kedua</a></h3>
          <p class="menu-card-price">(1956-1963)</p>
        </div>
        <div class="menu-card">
          <img src="img/gen3.png" alt="gen3" class="menu-card-image" id="gen3" />
          <h3 class="menu-card-tittle"><a href="gen3.html">Komputer Generasi Ketiga</a></h3>
          <p class="menu-card-price">(1964-1971)</p>
        </div>
        <div class="menu-card">
          <img src="img/gen4.png" alt="gen4" class="menu-card-image" id="gen4" />
          <h3 class="menu-card-tittle"><a href="gen4.html">Komputer Generasi Keempat</a></h3>
          <p class="menu-card-price">(1971-sekarang)</p>
        </div>
        <div class="menu-card">
          <img src="img/laptop.png" alt="gen5" class="menu-card-image" id="gen5" />
          <h3 class="menu-card-tittle"><a href="gen5.html">Komputer Generasi Kelima</a></h3>
          <p class="menu-card-price">(sekarang-masa depan)</p>
        </div>
      </div>
    </section>
    <!-- menu setion end -->
    <footer class="footer" id="About">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>About</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta autem commodi quam maiores provident! Sit qui porro reprehenderit quaerat. Sapiente porro accusantium iusto quo necessitatibus ullam aut soluta, sit commodi.</p>
          </div>
          <div class="footer-col">
            <h4>Links</h4>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#Computer">Computer</a></li>
              <li><a href="#Sejarah">Sejarah</a></li>
              <li><a href="#About">About</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Material</h4>
            <ul>
              <li><a href="#gen1">Komputer Gen-1</a></li>
              <li><a href="#gen2">Komputer Gen-2</a></li>
              <li><a href="#gen3">Komputer Gen-3</a></li>
              <li><a href="#gen4">Komputer Gen-4</a></li>
              <li><a href="#gen5">Komputer Gen-5</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow Me</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a>
              <a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram"></i></a>
              <a href="https://www.ruangguru.com/blog/yuk-ingat-kembali-sejarah-perkembangan-komputer" target="_blank"><i data-feather="credit-card"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
      feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
