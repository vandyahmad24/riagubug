<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Portfolio Foto Foto Ria gubug</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <a href="<?= BASE_URL ?>/admin/tambahportfolio" class="btn btn-success"> Tambah Portfolio Baru </a></h6>
            </div>
            <?php Notifikasi::flash() ?> 
            <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori Portfolio</th>
                    <th scope="col">Foto</th>
                     <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                   foreach ($data['portfolio'] as $portfolio) : ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $portfolio['nama'] ?></td>
                    <td> <img src="<?= BASE_URL ?>/upload/testimoni/<?= $portfolio['foto']; ?>" width="15%"> </td>
                     <td>
                      <a href="<?= BASE_URL ?>/admin/editportfolio/<?= $portfolio['portfolio_id'];?>" class="btn btn-warning">Edit</a>
                      <a href="<?= BASE_URL ?>/admin/deleteportfolio/<?= $portfolio['portfolio_id'];?>"  onclick="return confirm(`Anda Yakin ingin hapus?`);" class="btn btn-danger">Hapus</a>

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