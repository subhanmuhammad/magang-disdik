@extends('layouts.lay')


@section('content')
      
    <!--Visi dan Misi-->
    <section id="team" class="team">
      <div class="container">
        <header class="section-header mt-5">
          <h2>Profil Pimpinan</h2>
          <p>SMK NEGERI 1 PALU</p>
        </header>
        <div class="row">
            <div class="col-md-4">
                <div class="member">
                <div class="member-img">
                  <img src="<?=url('/')?>/public/assets/img/guru-staff/1.jpg" class="img-fluid" alt="" />
                </div>
                <div class="member-info">
                  <h4>Aan Hayati, S.Pd., MM.</h4>
                  <span>Kepala Sekolah SMK NEGERI 1 PALU</span>
                </div>
                </div>
            </div>
            <div class="col-md-8">
            <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                <p class="mb-0 mt-2 font-italic justify">"Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, dan bila tidak ada upaya sungguh-sungguh untuk mengantisipasinya maka hal tersebut akan menjadi maslah yang sangat serius. Dalam hal ini dunia pendidikan mempunyai tanggung jawab yang besar, terutama dalam menyiapkan sumber daya manusia yang tangguh sehingga mampu hidup selaras didalam perubahan itu sendiri. Pendidikan merupakan investasi jangka panjang yang hasilnya tidak dapat dilihat dan dirasakan secara instan, sehingga sekolah sebagai ujung tombak dilapangan harus memiliki arah pengembangan jangka panjang dengan tahapan pencapaiannya yang jelas dan tetap mengakomodir tuntutan permasalahan faktual kekinian yang ada di masyarakat"</p>
            </blockquote>
            </div>
            <div class="row mt-5">
                <header class="section-header mt-5">
                    <h2>Kepala Sekolah dari masa ke masa</h2>
                </header>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. Soenardi</h6>
                          <span>(1968-1975)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/2.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. Harsuhadi</h6>
                          <span>(1975-1979)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/3.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. Atik Kosasih</h6>
                          <span>(1980-1983)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/4.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. WB. Pardosi</h6>
                          <span>(1984-1987)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/5.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. Julimarnis</h6>
                          <span>(1987-1990)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="member">
                        <div class="member-img">
                          <img src="<?=url('/')?>/public/assets/assets/img/guru-staff/pimpinan/6.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="member-info">
                          <h6>Drs. Eman Kisman</h6>
                          <span>(1991-1993)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!--Akhir Visi Misi-->
@endsection

@section('footer')
    
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?=url('/')?>/public/assets/assets/img/logo/logo1.png" alt="" />
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
    <script src="<?=url('/')?>/public/assets/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/aos/aos.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?=url('/')?>/public/assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=url('/')?>/public/assets/assets/js/main.js"></script>
@endsection




  <body>
   


  </body>
</html>
