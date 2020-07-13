   <section id="portfolio" class="portfolio mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Order Sekarang</h2>
        </div>        
        <div class="card shadow mb-4">
            <div class="card-body">
                 
             <?php Notifikasi::flash() ?> 
                <div class="form-group">
                  <label>Nama Pemesan :</label>
                   <h6><?= $data['order']['nama']?></h6>
                </div>
                <hr>
                <div class="form-group">
                  <label>Alamat Pemesan :</label>
                   <h6><?= $data['order']['alamat']?></h6>
                </div>
                 <hr>
                <div class="form-group">
                  <label>Tanggal Pemfotoan :</label>
                   <h6><?= $data['order']['tanggal_foto']?></h6>
                </div>
                 <hr>
                <div class="form-group">
                  <label>Nama Produk Pesanan :</label>
                   <h6><?= $data['order']['nama_produk']?></h6>
                </div>
                 <hr>
                 <div class="form-group">
                  <label>Harga Pesanan :</label>
                   <h6><?= $data['order']['harga']?></h6>
                </div>
                 <hr>
                <div class="form-group">
                  <label>Status :</label>
                   <h6><?= $data['order']['status']?></h6>
                </div>
                 <hr>
                  <div class="form-group">
                     <form action="<?= BASE_URL ?>/home/upload_bukti_tf" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id_order" value="<?=$data['order']['order_id']?>">
                  <label>Bukti Pembayaran :</label>
                   <h6><input type="file" name="foto" required></h6>
                </div>
                 <hr>
                
                <button type="submit" class="btn btn-primary" >Upload Bukti Pembayaran </button>
                </form>
             
            </div>
          </div>
      </div>
    </section><!-- End Portfolio Section -->