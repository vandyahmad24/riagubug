<section class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center mt-5">
        	
            <form action="<?= BASE_URL ?>/home/post_registrasi" method="post" autocomplete="off" >
            	<h3>Selamat Datang Silahan Registrasi Dahulu untuk order layanan kami</h3>
            	<p>Apabila anda <b>sudah</b> memiliki akun silahkan klik <a href="<?= BASE_URL ?>/home/login">login</a></p>
              <?php Notifikasi::flash() ?>  
              <div class="form-group">
                <input type="text" name="username" class="form-control" id="name" placeholder="Username Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="name" placeholder="Password Anda" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="no_hp" class="form-control" id="name" placeholder="No Handphone Anda" data-rule="minlen:11" data-msg="Please enter at least 11 chars" />
                <div class="validate"></div>
              </div>

              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
             
              
            </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?= BASE_URL ?>/frontend/img/login.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
