<section class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center mt-5">
        	
            <form action="<?= BASE_URL ?>/home/post_login" method="post" >
            	<h2>Selamat Datang Silahan Isikan username dan password</h2>
            	<p>Apabila anda  <b>belum</b> memiliki akun silahkan klik <a href="<?= BASE_URL ?>/home/registrasi">registrasi</a></p>
            	<?php Notifikasi::flash() ?>	
              <div class="form-group">
                <input type="text" name="username" class="form-control" id="name" placeholder="Username Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password Anda"  />
                
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
             
              
            </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?= BASE_URL ?>/frontend/img/login.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
