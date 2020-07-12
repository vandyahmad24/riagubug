   <section id="portfolio" class="portfolio mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Order Sekarang</h2>
        </div>        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-12 col-md-12 portfolio-item">
            <form method="post" action="<?= BASE_URL ?>/home/add_order">
              <div class="form-group">
                <label for="nama">Nama Pemesan</label>
                 <input type="hidden" class="form-control" name="id_pemesan" readonly value="<?= $_SESSION['data_user']['id'] ?>">
                <input type="text" class="form-control" name="nama_pemesan" readonly value="<?= $_SESSION['data_user']['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="nama">Nama Produk</label>
                 <input type="hidden" class="form-control" name="produk_id" readonly value="<?= $data['produk']['id'] ?>">
                <input type="text" class="form-control" name="nama_pemesan" readonly value="<?= $data['produk']['nama_produk'] ?>">
              </div>
              <div class="form-group">
                <label for="nama">No Handphone</label>
                <input type="number" class="form-control" name="no_wa">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
              </div>
               <div class="form-group">
                <label for="nama">Tanggal Pemprotetan</label>
                 <input type="date" class="form-control" name="tanggal_foto">
                 <input type="hidden" name="tanggal_pemesan" value="<?php echo date('yy-m-d');?>"/>
              </div>
              <button type="submit" class="btn btn-danger">Pesan Sekarang</button>
            </form>
            
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->