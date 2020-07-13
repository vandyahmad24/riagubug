   <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Portfolio Ria Gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
            
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
                  <label>Bukti Pembayaran :</label>
                   <h6> <img src="<?= BASE_URL ?>/upload/testimoni/<?= $data['order']['bukti_pembayaran']?>" width="25%"></h6>
                </div>
                <hr>
                <div class="form-group">
                  <label>Status :</label>
                   <h6><?= $data['order']['status']?></h6>
                </div>
                 <hr>
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Rubah Status</button>
             
            </div>
          </div>

        </div>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rubah Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASE_URL ?>/admin/put_status">
       <input type="hidden" value="<?= $data['order']['order_id'] ?>" name="order_id">
       <div class="form-group">
        <label for="exampleFormControlSelect1">Rubah Status</label>
        <select class="form-control" name="status" id="exampleFormControlSelect1">
          <option value="pending" <?= ($data['order']['status'] == 'pending') ? 'selected' : ''   ?> >Pending</option>
          <option value="konfirmasi" <?= ($data['order']['status'] == 'konfirmasi') ? 'selected' : ''   ?> >Konfirmasi</option>
          <option value="selesai" <?= ($data['order']['status'] == 'selesai') ? 'selected' : ''   ?>>Selesai</option>

         

        </select>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Status</button>
      </div>
      </form>
    </div>
  </div>
</div>