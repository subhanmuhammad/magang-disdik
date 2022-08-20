<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://127.0.0.1:8080/api/sarpras');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  

  $result = json_decode($result, true);
?>


@extends('layouts.lay')


@section('content')

  <!--Ekskul-->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <header class="section-header mt-5">
          <h2>Sarana dan Prasarana</h2>
          <p>SMK NEGERI 1 PALU</p>
      </header>
      <p class="justify">Salah satu aspek yang seharusnya mendapat perhatian utama oleh setiap pengelola pendidikan adalah mengenai fasilitas pendidikan. Sarana pendidikan umumnya mencakup semua fasilitas yang secara langsung dipergunakan dan menunjang proses pendidikan, seperti: Gedung, ruangan belajar atau kelas, alat-alat atau media pendidikan, meja, kursi, dan sebagainya. Sedangkan yang dimaksud dengan fasilitas/prasarana adalah yang secara tidak langsung menunjang jalannya proses pendidikan, seperti: halaman, kebun atau taman sekolah, maupun jalan menuju ke sekolah.</p>
      <p class="justify">Fasilitas pendidikan pada dasarnya dapat dikelompokkan dalam empat kelompok yaitu tanah, bangunan, perlengkapan, dan perabot sekolah (site, building, equipment, and furniture). Agar semua fasilitas tersebut memberikan kontribusi yang berarti pada jalannya proses pendidikan, hendaknya dikelola dengan baik. Manajemen yang dimaksud meliputi: (1) Perencanaan, (2) Pengadaan, (3) Inventarisasi, (4) Penyimpanan, (5) Penataan, (6) Penggunaan, (7) Pemeliharaan, dan (8) Penghapusan.</p>
      <p class="justify">Jadi, secara umum sarana dan prasarana adalah alat penunjang keberhasilan suatu proses upaya yang dilakukan di dalam pelayanan publik, karena apabila kedua hal ini tidak tersedia maka semua kegiatan yang dilakukan tidak akan dapat mencapai hasil yang diharapkan sesuai dengan rencana.</p>
      
      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($result as $row)
        <div class="col-lg-3 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="<?= $row["link"]; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="<?= $row["link"]; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  </section>
  <!--Ekskul-->
@endsection


@section('footer')
    
    
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo/logo1.png" alt="" />
              </a>
              <p class="justify">"Kamu harus tetap bersekolah. Kamu harus. Kamu harus kuliah. Kamu harus mendapatkan gelarmu. Karena itu satu hal yang tidak bisa diambil orang darimu adalah pendidikanmu. Dan itu sepadan dengan investasi."</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Profil</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Jurusan</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">GTK dan Siswa</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Informasi</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Pusdapendik</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Jurusan</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Bisnis Daring dan Pemasaran</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Otomatisasi dan Tata Kelola Perkantoran</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Rekayasa Perangkat Lunak</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Teknik Komputer dan Jaringan</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Akuntansi dan Keuangan Lembaga</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Hubungi Kami</h4>
              <p>
                Alamat: Jl. R.A. Kartini No.14, Lolu Sel.<br />
                Kec. Palu Tim<br />
                Kota Palu <br />
                Sulawesi Tengah 94112<br />
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Dinas Pendidikan dan Kebudayaan Sulawesi Tengah</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
          Designed by <a href="https://bootstrapmade.com/">KailiNusantara</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=url('/')?>/public/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/aos/aos.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?=url('/')?>/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=url('/')?>/public/assets/js/main.js"></script>

@endsection





  <body>
    
  </body>

</html>
