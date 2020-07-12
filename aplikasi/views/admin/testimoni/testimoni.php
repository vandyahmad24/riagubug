<div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Testimoni Ria Gubug</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <a href="<?= BASE_URL ?>/admin/addTestimoni" class="btn btn-success"> Buat Testimoni Baru </a></h6>
            </div>
            <?php Notifikasi::flash() ?> 
            <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Perkerjaan</th>
                    <th scope="col">Testimoni</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                   foreach ($data['testimoni'] as $testimoni) : ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $testimoni['nama']; ?></td>
                    <td><?= $testimoni['perkerjaan']; ?></td>
                    <td><?= $testimoni['testimoni']; ?></td>
                    <td><img src="<?= BASE_URL ?>/upload/testimoni/<?= $testimoni['file']; ?>" width="15%"></td>
                    <td>
                      <a href="<?= BASE_URL ?>/admin/edittestimoni/<?= $testimoni['testimoni_id'];?>" class="btn btn-warning">Edit</a>
                      <a href="<?= BASE_URL ?>/admin/deletetestimoni/<?= $testimoni['testimoni_id'];?>"  onclick="return confirm(`Anda Yakin ingin hapus?`);" class="btn btn-danger">Hapus</a>

                    </td>
                  </tr>
                  <?php 
                  $i++;
                  endforeach; ?>
                </tbody>
              </table>

            </div>
          </div>

        </div>