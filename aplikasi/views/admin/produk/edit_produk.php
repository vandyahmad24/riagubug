    
    <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Produk Ria Gubug</h1>
          <p class="mb-4">Buat Produk Baru untuk Ria Gubug.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/putProduk" method="post">
                <div class="form-group">
                  <label for="nama">Nama Produk</label>
                  <input type="hidden" name="id" value="<?= $data['produk']['id'];?>"  class="form-control" id="nama" >
                  <input type="text" name="nama_produk" value="<?= $data['produk']['nama_produk'];?>"  class="form-control" id="nama">
                </div>
                 <div class="form-group">
                  <label for="nama">Kategori</label>
                  <select class="form-control" name="kategori_id" id="exampleFormControlSelect1">
                    <?php foreach ($data['kategori'] as $kategori) : ?>
                      <?php 
                       if ($data['produk']['kategori_id'] == $kategori['id']) {
                          
                       }

                       ?>
                      <option value="<?= $kategori['id']?> " <?= ($data['produk']['kategori_id'] == $kategori['id']) ? 'selected' : ''   ?> ><?= $kategori['nama']?></option>
                      

                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama">Daftar Fitur</label>
                  <input type="text" name="fitur" class="form-control" id="nama" value="<?= $data['produk']['fitur'];?>">
                  <small>Untuk Menambahkan jenis jenis fitur pisahkan dengan <b> koma (,) </b></small>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Produk</label>
                  <textarea class="form-control" name="deskripsi_produk" id="deskripsi" rows="3"><?= $data['produk']['deskripsi_produk'];?></textarea>
                </div>
                 <div class="form-group">
                  <label for="number">Harga Produk</label>
                  <input type="number" class="form-control" name="harga" id="harga" value="<?= $data['produk']['harga'];?>" >
                </div>
                <button type="submit" class="btn btn-primary">Edit Kategori</button>
              </form>
            </div>
          </div>

        </div>