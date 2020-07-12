

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <?php Notifikasi::flash() ?>  
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Abadikan Moment Berharga Anda</h1>
          <h2 data-aos="fade-up" data-aos-delay="400"> <b> RIA Gubug </b> Siap Mengabadikan Setiap Moment berharga anda</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#pricing" class="btn-get-started scrollto">Daftar Harga </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?= BASE_URL ?>/frontend/img/homepage.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sejarah Ria Gubug</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p class="justify-content">
              Studio  photo  “RIA  Gubug”  Merupakan   sebuah  usaha  yang  melayani  jasa fotografi  yang berdiri  pada  tahun  1988 oleh Bapak Nur Kholis.  Studio  photo “RIA Gubug” salah  satu usaha  dari tiga jenis  usaha  yang didirikan  oleh  RIA  GROUP. Teknologi  photografi  pada  Saat itu masih  dalam bentuk  film. Nama  RIA diberikan oleh  alm.  Kakek   muhgiarto    ayah     dari  Nur  Kholis   untuk   nama usaha yang dijalankan  oleh anak keturunannya. Studio  photo  "RIA  Gubug"  sekarang  sudah  dipegang  oleh  generasi  ke  dua yaitu  oleh  Bapak  Nugraha   Apriliandika.   Dalam  generasi  kedua  ini  usaha  studio photo  "RIA   Gubug" tidak   hanya   melayani   jasa   pemotretan    saja,    melainkan terdapat  jasa  fotocopy  dan percetakan.
              <br>
              Sebelum  nama Ria ini nama  Toko Kaset yang pada  saat itu masih  kaset  pita hitam  yang  dimiliki   oleh  Muhgiarto  ayah  Nur  Kholis.  Semejak   itulah  usahanya mulai  berkembang   dengan  jenis  usaha  yang berbeda  dengan  satu nama  yaitu  Ria Studio  Photo.  
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="<?= BASE_URL ?>/frontend/img/landingpage2.png" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">65</span>
                    <p><strong>Project</strong> Sudah 65 Proyek yang kami layani.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">24</span>
                    <p><strong>Customer Service</strong> Siap siaga 24 Jam kapan pun anda butuhkan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan Kami</h2>
          <p>Daftar Harga Kami</p>
        </div>

        <div class="row">
          <!-- untuk daftar layanan klik di sini -->
          <?php foreach ($data['layanan'] as $key) :  ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-photobucket"></i></div>
              <h4 class="title"><a href=""><?= $key['nama']; ?></a></h4>
              <p class="description"><?= $key['deskripsi']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
  
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimoni</h2>
          <p>Berikut kata pelanggan yang sudah berlanggan jasa kami</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ($data['testimoni'] as $key ) : ?>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="<?= BASE_URL ?>/upload/testimoni/<?= $key['file']; ?>" class="testimonial-img" alt="">
              <h3><?= $key['nama']; ?></h3>
              <h4><?= $key['perkerjaan']; ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $key['testimoni']; ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Hasil Jepret Kami</h2>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
          <?php foreach ($data['portfolio'] as $key) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $key['nama'];?>">
            <div class="portfolio-wrap">
              <img src="<?= BASE_URL ?>/upload/testimoni/<?= $key['foto']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $key['nama'];?></h4>
                <div class="portfolio-links">
                  <a href="<?= BASE_URL ?>/upload/testimoni/<?= $key['foto']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-show"></i></a>
                
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Paket</h2>
          <p>Daftar Harga Paket kami</p>
        </div>

        <div class="row">
          <?php foreach ($data['produk'] as $key) : ?>
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
              <h3><?= $key['nama_produk']; ?></h3>
              <h4><sup>Rp</sup>  <?= number_format($key['harga'],2); ?></h4>
              <hr>
              <ul>
                <?php 
                  $daftar_fitur = explode(",", $key['fitur']);
                ?>
                <?php foreach ($daftar_fitur as $fitur) : ?>
                <li> &#10004; <?= $fitur ?></li>
                <hr>
                <?php endforeach; ?>
              </ul>
              <div class="btn-wrap">
                <a href="<?= BASE_URL ?>/home/foto/<?= $key['id'];  ?>" class="">Lihat Foto</a> <br>
                <a href="<?= BASE_URL ?>/home/order/<?= $key['produk_id'];  ?>" class="btn-buy mt-2">Order Sekarang</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
         
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Alamat Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Ria Gubug</h3>
              
              <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                
                <p>Jl. Pemuda  ruko  A3<br>Kec.Gubug, Kab.Grobogan, Jawa Tengah.</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>riagubug@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

