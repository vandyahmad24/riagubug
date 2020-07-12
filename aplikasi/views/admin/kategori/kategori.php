<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Kategori Produk Ria gubug</h1>
          <p class="mb-4">Daftar Kategori ini berfungsi untuk membuat, mengedit menghapus kategori.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <a href="<?= BASE_URL ?>/admin/tambahKategori" class="btn btn-success"> Buat Kategori Baru </a></h6>
            </div>
            <?php Notifikasi::flash() ?> 
            <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                   foreach ($data['kategori'] as $kategori) : ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $kategori['nama']; ?></td>
                    <td><?= $kategori['deskripsi']; ?></td>
                    <td>
                      <a href="<?= BASE_URL ?>/admin/editKategori/<?= $kategori['id'];?>" class="btn btn-warning">Edit</a>
                      <a href="<?= BASE_URL ?>/admin/deleteKategori/<?= $kategori['id'];?>"  onclick="return confirm(`Anda Yakin ingin hapus?`);" class="btn btn-danger">Hapus</a>

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