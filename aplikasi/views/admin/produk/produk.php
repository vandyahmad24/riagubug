<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Produk Ria gubug</h1>
          <p class="mb-4">Daftar Produk ini berfungsi untuk membuat, mengedit menghapus produk.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <a href="<?= BASE_URL ?>/admin/tambahProduk" class="btn btn-success"> Buat Produk Baru </a></h6>
            </div>
            <?php Notifikasi::flash() ?> 
            <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Fitur</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                   foreach ($data['produk'] as $produk) : ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $produk['nama_produk']; ?></td>
                    <td><?= $produk['nama']; ?></td>
                    <td><?= $produk['fitur']; ?></td>
                    <td><?= $produk['deskripsi_produk']; ?></td>
                     <td>Rp. <?= number_format($produk['harga'],2); ?></td>
                    <td>
                      <a href="<?= BASE_URL ?>/admin/editProduk/<?= $produk['produk_id'];?>" class="btn btn-warning">Edit</a>
                      <a href="<?= BASE_URL ?>/admin/deleteProduk/<?= $produk['produk_id'];?>"  onclick="return confirm(`Anda Yakin ingin hapus?`);" class="btn btn-danger">Hapus</a>

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