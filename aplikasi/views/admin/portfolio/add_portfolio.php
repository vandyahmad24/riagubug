   <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Portfolio Baru Ria Gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/postPortfolio" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">Kategori Portfolio</label>
                  <select class="form-control" name="kategori_id" id="exampleFormControlSelect1">
                    <?php foreach ($data['kategori'] as $kategori) : ?>
                      <option value="<?= $kategori['id']?>"><?= $kategori['nama']?>  </option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="foto">Upload Portfolio </label>
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Perkerjaan Customer">
                </div>
                 
                <button type="submit" class="btn btn-primary">Tambah Portfolio</button>
              </form>
            </div>
          </div>

        </div>