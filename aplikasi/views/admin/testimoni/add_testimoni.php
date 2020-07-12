   <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Testimoni Ria Gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/postTestimoni" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">Nama Customer</label>
                  <select class="form-control" name="nama" id="exampleFormControlSelect1">
                    <?php foreach ($data['user'] as $user) : ?>
                      <option value="<?= $user['id']?>"><?= $user['nama']?> || <?= $user['level']?> </option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama">Perkerjaan Customer </label>
                  <input type="text" name="perkerjaan" class="form-control" id="nama" placeholder="Perkerjaan Customer">
                  
                </div>
                <div class="form-group">
                  <label for="foto">Foto Profil Customer </label>
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Perkerjaan Customer">
                  <small>Foto Wajib Berukuran <b>400x400 pixel</b></small>
                </div>
                <div class="form-group">
                  <label for="testimoni">Testimoni </label>
                  <textarea class="form-control" name="testimoni" id="testimoni" rows="3"></textarea>
                </div>
                 
                <button type="submit" class="btn btn-primary">Tambah Testimoni</button>
              </form>
            </div>
          </div>

        </div>