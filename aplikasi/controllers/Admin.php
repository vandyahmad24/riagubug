<?php


/**
 * 
 */
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends Controller
{
	public function index()
	{

		$data['pendapatan'] = $this->model('Admin_model')->pendapatan();
		$data['pending'] 	= $this->model('Admin_model')->pendingOrderan();
		$data['portfolio'] 	= $this->model('Admin_model')->totalTable('portfolio');
		$data['produk'] 	= $this->model('Admin_model')->totalTable('produk');
		
		
		$this->view('backend/header');
		$this->view('admin/index',$data);
		$this->view('backend/footer');
	}
	public function daftarKategori()
	{
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		
		$this->view('backend/header');
		$this->view('admin/kategori/kategori',$data);
		$this->view('backend/footer');
	}
	public function tambahKategori()
	{
		$this->view('backend/header');
		$this->view('admin/kategori/add_kategori');
		$this->view('backend/footer');
	}
	public function postKategori()
	{

		if($this->model('Admin_model')->tambahKategori($_POST)>0){
			Notifikasi::setFlash('Berhasil di Tambahkan','Kategori', 'success');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Tambahkan','Kategori', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
		}
	}
	public function deleteKategori($id)
	{
		if($this->model('Admin_model')->deleteKategori($id)>0){
			Notifikasi::setFlash('Berhasil di Hapus','Kategori', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Hapus','Kategori', 'warning');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
		}
	}
	public function editKategori($id)
	{
		$data['kategori'] = $this->model('Admin_model')->getKategoriId($id);
		
		$this->view('backend/header');
		$this->view('admin/kategori/edit_kategori',$data['kategori']);
		$this->view('backend/footer');
	}
	public function putKategori()
	{
		if($this->model('Admin_model')->putKategori($_POST)>0){
			Notifikasi::setFlash('Berhasil di Edit','Kategori', 'success');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Edit','Kategori', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarKategori');
		}
	}
	public function daftarProduk()
	{

		$data['produk'] = $this->model('Admin_model')->getProduk();
		$this->view('backend/header');
		$this->view('admin/produk/produk',$data);
		$this->view('backend/footer');
	}
	public function tambahProduk()
	{
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		$this->view('backend/header');
		$this->view('admin/produk/add_produk',$data);
		$this->view('backend/footer');
	}
	public function postProduk()
	{
		if($this->model('Admin_model')->tambahProduk($_POST)>0){
			Notifikasi::setFlash('Berhasil di Tambahkan','Kategori', 'success');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Tambahkan','Kategori', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
		}
	}
	public function editProduk($id)
	{
		$data['produk'] = $this->model('Admin_model')->getProdukId($id);
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		
		
		$this->view('backend/header');
		$this->view('admin/produk/edit_produk',$data);
		$this->view('backend/footer');
	}
	public function putProduk()
	{
		if($this->model('Admin_model')->putProduk($_POST)>0){
			Notifikasi::setFlash('Berhasil di Edit','Produk', 'success');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Edit','Produk', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
		}
	}
	public function deleteProduk($id)
	{
		if($this->model('Admin_model')->deleteProduk($id)>0){
			Notifikasi::setFlash('Berhasil di Hapus','Produk', 'danger');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Hapus','Produk', 'warning');
			header('Location:'.BASE_URL.'/admin/daftarProduk');
		}
	}
	public function testimoni()
	{
		$data['testimoni'] = $this->model('Admin_model')->getTestimoni();
		$this->view('backend/header');
		$this->view('admin/testimoni/testimoni',$data);
		$this->view('backend/footer');
	}
	public function addTestimoni()
	{
		$data['user'] = $this->model('Admin_model')->getUser();
		$this->view('backend/header');
		$this->view('admin/testimoni/add_testimoni',$data);
		$this->view('backend/footer');
	}
	public function postTestimoni()
	{
		$data["POST"] = $_POST;
		$data['gambar'] = $this->uploadImage($_FILES);
		
		if($this->model('Admin_model')->postTestimoni($data)>0){
			Notifikasi::setFlash('Berhasil di tambah','Testimoni', 'success');
			header('Location:'.BASE_URL.'/admin/testimoni');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di tambah','Testimoni', 'danger');
			header('Location:'.BASE_URL.'/admin/testimoni');
		}

	}
	public function uploadImage($data)
	{

		$namaFile = $data['foto']['name'];
		$ukuranFile = $data['foto']['size'];
		$error = $data['foto']['error'];
		$tmpName = $data['foto']['tmp_name'];

		if($error === 4){
			Notifikasi::setFlash('Gagal di tambah','Foto', 'danger');
			header('Location:'.BASE_URL.'/admin/addTestimoni');
		}

		$ekstensiGambarValid = ['jpg','jpeg','png'];
		$ekstensiGambar 	 = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		//mencari nilai dalam array , hasilnya adalah true jika ada
		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			Notifikasi::setFlash('Harus Bertipe Jpg, Jpeg, Png','Foto', 'danger');
			header('Location:'. $_SERVER['HTTP_REFERER']);
		}
		if($ukuranFile > 1500000){
			Notifikasi::setFlash('Melebihi Batas','Ukuran Foto', 'danger');
			header('Location:'. $_SERVER['HTTP_REFERER']);
		}

		$namaFileBaru = uniqid();
		$namaFileBaru .= ".".$ekstensiGambar;
		// var_dump($namaFileBaru.".".$ekstensiGambar); die();
		move_uploaded_file($tmpName, '../public/upload/testimoni/'.$namaFileBaru);

		return $namaFileBaru;
	}
	public function edittestimoni($id)
	{

		$data['testimoni'] = $this->model('Admin_model')->getTestimoniById($id);
		$data['user'] = $this->model('Admin_model')->getUser();

		$this->view('backend/header');
		$this->view('admin/testimoni/edit_testimoni',$data);
		$this->view('backend/footer');
	}
	public function putTestimoni()
	{

		$gambarlama = $_POST['file'];
	

		if($_FILES['foto']['error'] === 4){
		$gambar = $gambarlama;
		}else{
			$gambar = $this->uploadImage($_FILES);
		}

		$data["POST"] = $_POST;
		$data['gambar'] = $gambar;


		if($this->model('Admin_model')->putTestimoni($data)>0){
			Notifikasi::setFlash('Berhasil di edit','Testimoni', 'success');
			header('Location:'.BASE_URL.'/admin/testimoni');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di edit','Testimoni', 'danger');
			header('Location:'.BASE_URL.'/admin/testimoni');
		}

	}
	public function deletetestimoni($id)
	{
		if($this->model('Admin_model')->deleteTestimoni($id)>0){
			Notifikasi::setFlash('Berhasil di Hapus','Testimoni', 'danger');
			header('Location:'.BASE_URL.'/admin/testimoni');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Hapus','Testimoni', 'warning');
			header('Location:'.BASE_URL.'/admin/testimoni');
		}	
	}
	public function portfolio()
	{
		$data['portfolio'] = $this->model('Admin_model')->getPortfolio();
		
		$this->view('backend/header');
		$this->view('admin/portfolio/portfolio',$data);
		$this->view('backend/footer');
	}
	public function tambahportfolio()
	{
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		
		$this->view('backend/header');
		$this->view('admin/portfolio/add_portfolio',$data);
		$this->view('backend/footer');
	}
	public function postPortfolio()
	{

		$data["POST"] = $_POST;
		$data['gambar'] = $this->uploadImage($_FILES);
		
		if($this->model('Admin_model')->postPortfolio($data)>0){
			Notifikasi::setFlash('Berhasil di tambah','Portfolio', 'success');
			header('Location:'.BASE_URL.'/admin/portfolio');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di tambah','Portfolio', 'danger');
			header('Location:'.BASE_URL.'/admin/testimoni');
		}
	}
	public function editportfolio($id)
	{
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		$data['portfolio'] = $this->model('Admin_model')->getPortfolioById($id);
		
		$this->view('backend/header');
		$this->view('admin/portfolio/edit_portfolio',$data);
		$this->view('backend/footer');
	}
	public function putPortfolio()
	{
		$gambarlama = $_POST['foto_lama'];

	
		if($_FILES['foto']['error'] === 4){
		$gambar = $gambarlama;
		}else{
			$gambar = $this->uploadImage($_FILES);
		}

		$data["POST"] = $_POST;
		$data['gambar'] = $gambar;


		if($this->model('Admin_model')->putPortfolio($data)>0){
			Notifikasi::setFlash('Berhasil di edit','Portfolio', 'success');
			header('Location:'.BASE_URL.'/admin/portfolio');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di edit','Portfolio', 'danger');
			header('Location:'.BASE_URL.'/admin/portfolio');
		}
	}
	public function daftar_order()
	{
		$data['order'] = $this->model('Admin_model')->getOrder();

		$this->view('backend/header');
		$this->view('admin/order/daftar_order',$data);
		$this->view('backend/footer');
	}
	public function edit_order($id)
	{
		$data['order'] = $this->model('Admin_model')->editOrder($id);

		$this->view('backend/header');
		$this->view('admin/order/edit_order',$data);
		$this->view('backend/footer');
	}
	public function delete_order($id)
	{
		if($this->model('Admin_model')->deleteOrder($id)>0){
			Notifikasi::setFlash('Berhasil di Hapus','Order', 'danger');
			header('Location:'.BASE_URL.'/admin/daftar_order');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Hapus','Order', 'warning');
			header('Location:'.BASE_URL.'/admin/daftar_order');
		}
	}
	public function put_status()
	{
		if($this->model('Admin_model')->put_status($_POST)>0){
			Notifikasi::setFlash('Berhasil di Rubah','Order', 'success');
			header('Location:'.BASE_URL.'/admin/daftar_order');
			exit;
		}else{
			Notifikasi::setFlash('Gagal di Hapus','Order', 'warning');
			header('Location:'.BASE_URL.'/admin/daftar_order');
		}
	}
	public function cetak($id)
	{
		$data['order']	= $this->model('Admin_model')->cetakOrder($id);
		$dateObj   = DateTime::createFromFormat('!m', $id);
		$monthName = $dateObj->format('F'); // March
		$dateYear = date('Y');
	
		
		$html = "<center><h3>Daftar Order $monthName </h3></center><hr/><br/>";
		$html .= "<table border='1' width='100%'> 
		<thead class='thead-dark'>
                  <tr>
                    <th scope='col'>No</th>
                    <th scope='col'>Nama Pemesan</th>
                    <th scope='col'>Alamat</th>
                    <th scope='col'>Nama Produk</th>
                    <th scope='col'>Tanggal Pemesanan</th>
                    <th scope='col'>Tanggal Pemfotoan</th>
                    <th scope='col'>No Handphone Pemesan</th>
                    <th scope='col'>Harga</th>
                  </tr>
                </thead>
                 <tbody>
                 
                 ";
          $no = 1;
          foreach ($data['order'] as $key) {
          	$html .= "<tr>
          			<th scope='row'>$no</th>
                    <td>".$key['nama']." </td>
                    <td>".$key['alamat']."</td>
                    <td>".$key['nama_produk']."</td>
                    <td>".$key['tanggal_order']."</td>
                    <td>".$key['tanggal_foto']."</td>
                    <td>".$key['no_wa']."</td>
                    <td>".$key['harga']."</td>
                    </tr>
                    ";
              $no++;
          }
          $html.= "</table>";



		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream('Laporan Order Bulan '.$monthName."-".$dateYear);
		die();

	}
	public function cetakExcel($id)
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
		// $sheet->setCellValue('A1', 'No');
		// $sheet->setCellValue('B1', 'Nama');
		// $sheet->setCellValue('C1', 'Alamat');
		// $sheet->setCellValue('D1', 'Nama Produk');
		// $sheet->setCellValue('E1', 'Tangal Order');
		// $sheet->setCellValue('F1', 'Tanggal Foto');
		// $sheet->setCellValue('G1', 'No Handphone');
		// $sheet->setCellValue('H1', 'Harga');

		// $i = 2;
		// $no =1;
		// $data['order']	= $this->model('Admin_model')->cetakOrder($id);
		// foreach ($data['order'] as $row ) {
		// 	$sheet->setCellValue('A'.$i, $no++);
		// 	$sheet->setCellValue('B'.$i, $row['nama']);
		// 	$sheet->setCellValue('C'.$i, $row['alamat']);
		// 	$sheet->setCellValue('D'.$i, $row['nama_produk']);
		// 	$sheet->setCellValue('E'.$i, $row['tanggal_order']);
		// 	$sheet->setCellValue('F'.$i, $row['tanggal_foto']);
		// 	$sheet->setCellValue('G'.$i, $row['no_wa']);
		// 	$sheet->setCellValue('H'.$i, $row['harga']);

		// }
		// $styleArray = [
		// 	'borders' => [
		// 		'allBorders' => [
		// 			'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		// 		],
		// 	],
		// ];
		// $i = $i - 1;
		// $sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);
		 
		// var_dump($spreadsheet);
		// die();
		// $writer = new Xlsx($spreadsheet);
		// $writer->save('Laporan Order .xlsx');

	
		
	}

}