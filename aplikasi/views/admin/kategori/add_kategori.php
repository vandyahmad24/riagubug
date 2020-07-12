    
    <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Kategori Produk Ria Gubug</h1>
          <p class="mb-4">Buat Kategori Baru untuk Ria Gubug.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/postKategori" method="post">
                <div class="form-group">
                  <label for="nama">Nama Kategori</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Kategori">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Kategori</label>
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Kategori</button>
              </form>
            </div>
          </div>

        </div>