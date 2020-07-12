

        <div class="container-fluid">
          <!-- Page Heading -->
            <center>
            <div class="card-body">
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
                    <td><?= $order['status'] ?></td>
                    <td> <a href="<?= BASE_URL ?>/admin/edit_order/<?= $order['order_id']; ?>" class="btn btn-warning"> Edit </a> <a href="<?= BASE_URL ?>/admin/delete_order/<?= $order['order_id']; ?>" class="btn btn-danger" onclick="return confirm(`Pastikan hanya menghapus ke order yang tidak perlu?`);" > delete</a> </td>
                                     
                  </tr>
                  <?php 
                  $i++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
            </center>
