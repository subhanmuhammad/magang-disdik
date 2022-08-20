<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Website Sekolah SMKN 1 Palu</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <script src="https://kit.fontawesome.com/67f4ffce5e.js" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <link href="<?=url('/')?>/public/assets/img/logo/logo1.png" rel="icon" />
    <link href="<?=url('/')?>/public/assets/img/logo/favicon.png" rel="apple-touch-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/css/style.css" rel="stylesheet" />

    
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="/" class="logo d-flex align-items-center">
            <img src="<?=url('/')?>/public/assets/img/logo/logosekolah.png" alt="" />
          </a>
  
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="<?=url('/')?>/beranda">Beranda</a></li>
              <li class="dropdown">
                <a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?=url('/')?>/sejarah">Sejarah Singkat</a></li>
                  <li><a href="<?=url('/')?>/visimisi">Visi Misi</a></li>
                  <li><a href="<?=url('/')?>/ekskul">Ekskul</a></li>
                  <li><a href="<?=url('/')?>/profilpimpinan">Profil Pimpinan</a></li>
                  <li><a href="<?=url('/')?>/sarpras">Sarpras</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="/#testimonials">Jurusan</a></li>
              <li class="dropdown">
                <a href="#"><span>GTK dan Siswa</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?=url('/')?>/gurustaff">Pendik dan TU</a></li>
                  <li><a href="<?=url('/')?>/siswa">Siswa</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#recent-blog-posts">Berita</a></li>
                  <li><a href="#values1">Event</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="https://pusdapendik.disdikbud.sultengprov.go.id">Pusdapendik</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
        </div>
      </header>

      @yield('header')

      @yield('content')

      @yield('footer')

      @yield('js')

     
    