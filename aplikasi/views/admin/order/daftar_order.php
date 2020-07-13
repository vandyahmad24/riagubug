<div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Order Ria gubug</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="d-flex">
                <div class="dropdown show">
               <button class="btn btn-primary dropdown-toggle" type="button" id="pdf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cetak PDF
              </button>
              <div class="dropdown-menu" aria-labelledby="pdf">
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/1">Januari</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/2">Februari</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/3">Maret</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/4">April</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/5">Mei</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/6">Juni</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/7">Juli</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/8">Agustus</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/9">September</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/10">Oktober</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/11">November</a>
                  <a class="dropdown-item"  target="_blank" href="<?= BASE_URL?>/admin/cetak/12">Desember</a>
                </div>
              </div>
               
            </div>
            <?php Notifikasi::flash() ?> 
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Tanggal Pemfotoan</th>
                    <th scope="col">No Handphone Pemesan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Status</th>
                     <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                   foreach ($data['order'] as $order) : ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $order['nama'] ?></td>
                    <td><?= $order['alamat'] ?></td>
                    <td><?= $order['nama_produk'] ?></td>
                    <td><?= $order['tanggal_order'] ?></td>
                    <td><?= $order['tanggal_foto'] ?></td>
                    <td><?= $order['no_wa'] ?></td>
                    <td>Rp. <?= number_format( $order['harga']); ?></td>
                  <?php if($order['bukti_pembayaran'] != null) : ?>
                  <td>  <img src="<?= BASE_URL ?>/upload/testimoni/<?= $order['bukti_pembayaran']?>" width="15"></td>
                  <?php else : ?>
                   <td> <span class="text-danger">Belum Membayar</span> </td>
                  <?php endif; ?>

                    <td><?= $order['status'] ?></td>
                    <td> <a href="<?= BASE_URL ?>/admin/edit_order/<?= $order['order_id']; ?>" class="btn btn-warning"> Edit </a> <a href="<?= BASE_URL ?>/admin/delete_order/<?= $order['order_id']; ?>" class="btn btn-danger" onclick="return confirm(`Pastikan hanya menghapus ke order yang tidak perlu?`);" > delete</a> </td>
                                     
                  </tr>
                  <?php 
                  $i++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>