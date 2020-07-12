  <section id="about" class="about  mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Daftar Order <?= $_SESSION['data_user']['nama']; ?></h2>
          <p>Setelah Anda Order maka admin akan menghubungi anda dalam 1x24 jam melalui nomer yang tertera dalam pengisian form</p>
        </div>
          <?php Notifikasi::flash() ?>  
        <div class="row content">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tanggal Pemesanan</th>
                  <th scope="col">Tanggal Pemprotetan</th>
                  <th scope="col">Order Produk</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($data['order'] as $key) : ?>

                <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $key['tanggal_order']; ?></td>
                  <td><?= $key['tanggal_foto']; ?></td>
                  <td><?= $key['produk_id']; ?></td>
                  <td><?= $key['alamat']; ?></td>
                  <td><?= $key['harga']; ?></td>
                  <td><?= $key['status']; ?></td>

                </tr>
                <?php  $no++; endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->