   <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Portfolio Ria Gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
             <?php Notifikasi::flash() ?> 
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/putPortfolio" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">Kategori Portfolio</label>
                  <select class="form-control" name="kategori_id" id="exampleFormControlSelect1">
                    <?php foreach ($data['kategori'] as $kategori) : ?>
                    

                      <option value="<?= $kategori['id']?> " <?= ($data['portfolio']['kategori_id'] == $kategori['id']) ? 'selected' : ''   ?> ><?= $kategori['nama']?></option>

                    <?php endforeach; ?>
                    </select>
                </div>
                 <div class="form-group">
                   <input type="hidden" name="foto_lama" class="form-control" value="<?= $data['portfolio']['foto']; ?>">
                  <img src="<?= BASE_URL ?>/upload/testimoni/<?= $data['portfolio']['foto']; ?>" width="20%">
                </div>
                <div class="form-group">
                  <label for="foto">Upload Portfolio </label>
                  <input type="hidden" name="id" class="form-control" value="<?= $data['portfolio']['id']; ?>">
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Perkerjaan Customer">
                </div>
                 
                <button type="submit" class="btn btn-primary">Edit Portfolio</button>
              </form>
            </div>
          </div>

        </div>