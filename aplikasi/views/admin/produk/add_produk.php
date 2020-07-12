    
    <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Produk Ria Gubug</h1>
          <p class="mb-4">Buat Produk Baru untuk Ria Gubug.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/postProduk" method="post">
                <div class="form-group">
                  <label for="nama">Nama Produk</label>
                  <input type="text" name="nama_produk" class="form-control" id="nama" placeholder="Nama Produk">
                </div>
                 <div class="form-group">
                  <label for="nama">Kategori</label>
                  <select class="form-control" name="kategori_id" id="exampleFormControlSelect1">
                    <?php foreach ($data['kategori'] as $kategori) : ?>
                      <option value="<?= $kategori['id']?>"><?= $kategori['nama']?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama">Daftar Fitur</label>
                  <input type="text" name="fitur" class="form-control" id="nama" placeholder="Fitur Produk">
                  <small>Untuk Menambahkan jenis jenis fitur pisahkan dengan <b> koma (,) </b></small>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Produk</label>
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                </div>
                 <div class="form-group">
                  <label for="number">Harga Produk</label>
                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Rp. 1000.000">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Kategori</button>
              </form>
            </div>
          </div>

        </div>