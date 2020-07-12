  <section id="about" class="about  mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profil <?= $_SESSION['data_user']['nama']; ?></h2>
        </div>

        <div class="row content">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
           <ul class="list-group">
              <li class="list-group-item">Username : <b> <?= $_SESSION['data_user']['username']; ?> </b></li>
              <li class="list-group-item">Email : <b> <?= $_SESSION['data_user']['email']; ?> </b></li>
              <li class="list-group-item">Nama Lengkap : <b> <?= $_SESSION['data_user']['nama']; ?> </b></li>
              <li class="list-group-item">No Hp : <b> <?= $_SESSION['data_user']['no_hp']; ?> </b></li>
              <li class="list-group-item">  <a href="<?= BASE_URL ?>/home/detail_order/<?= $_SESSION['data_user']['id'] ?>"> Daftar Belanja</a></li>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->