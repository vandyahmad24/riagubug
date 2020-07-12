   <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Testimoni Ria Gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                 
              <form action="<?= BASE_URL ?>/admin/putTestimoni" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $data['testimoni']['id'] ?>">
                  <input type="hidden" name="file" value="<?= $data['testimoni']['file'] ?>">
                  <label for="nama">Nama Customer</label>
                  <select class="form-control" name="nama">

                    <?php foreach ($data['user'] as $user) : ?>
                      <option value="<?= $data['testimoni']['user_id']?> " <?= ($data['testimoni']['user_id'] == $user['id']) ? 'selected' : ''   ?> > <?= $user['nama']." || ". $user['level'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama">Perkerjaan Customer </label>
                  <input type="text" name="perkerjaan" class="form-control" id="nama" value="<?= $data['testimoni']['perkerjaan'] ?>">
                  
                </div>
                <div class="form-group">
                  <img src="<?= BASE_URL ?>/upload/testimoni/<?= $data['testimoni']['file']; ?>" width="25%">
                </div>
                <div class="form-group">
                  <label for="foto">Ganti Profil Customer </label>
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Perkerjaan Customer">
                  <small>Foto Wajib Berukuran <b>400x400 pixel</b></small>
                </div>
                <div class="form-group">
                  <label for="testimoni">Testimoni </label>
                  <textarea class="form-control" name="testimoni" id="testimoni" rows="3"><?= $data['testimoni']['testimoni'] ?></textarea>
                </div>
                 
                <button type="submit" class="btn btn-primary">Edit Testimoni</button>
              </form>
            </div>
          </div>

        </div>