    
    <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Kategori <b><?= $data['nama'];?> </b></h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/putKategori" method="post">
                <div class="form-group">
                  <label for="nama">Nama Kategori</label>
                  <input type="hidden" name="id" class="form-control" value="<?= $data['id'];?>" >
                  <input type="text" name="nama" class="form-control" value="<?= $data['nama'];?>" id="nama" placeholder="Nama Kategori">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Kategori</label>
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?= $data['deskripsi'];?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Kategori</button>
              </form>
            </div>
          </div>

        </div>