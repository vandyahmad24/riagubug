<?php


class Admin_model{
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getKategori()
	{
		$this->db->query('SELECT * FROM kategori');
		return $this->db->resultSet();
	}
	public function getUser()
	{
		$this->db->query('SELECT * FROM users');
		return $this->db->resultSet();
	}
	public function tambahKategori($data)
	{
		
		$query = "INSERT INTO kategori
				  VALUES (null,:nama,:deskripsi)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);

		$this->db->bind('deskripsi', $data['deskripsi']);

		$this->db->execute();

		return $this->db->rowCount();
	}
	public function deleteKategori($id)
	{
		$query = "DELETE FROM kategori WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function getKategoriId($id)
	{
		$this->db->query('SELECT * FROM kategori WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();
	}
	public function putKategori($data)
	{
		$query = "UPDATE kategori SET
                    nama = :nama,
                    deskripsi = :deskripsi
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['id']);

        
        $this->db->execute();

        return $this->db->rowCount();
		
	}
	public function getProduk()
	{
		$this->db->query('SELECT produk.id AS produk_id, produk.nama_produk, produk.fitur, produk.deskripsi_produk,produk.harga, kategori.* FROM produk JOIN kategori ON produk.kategori_id=kategori.id ORDER BY produk_id DESC');

	


		return $this->db->resultSet();
	}
	public function tambahProduk($data)
	{

		$nama_produk = $data['nama_produk'];
		$fitur = $data['fitur'];
		$deskripsi = $data['deskripsi'];
		$kategori_id = $data['kategori_id'];
		$harga = $data['harga'];
		$query = "INSERT INTO produk
				  VALUES (null,'$nama_produk','$fitur','$deskripsi','$kategori_id','$harga')";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getProdukId($id)
	{
		$this->db->query('SELECT * FROM produk WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();
	}
	public function putProduk($data)
	{
		$query = "UPDATE produk SET
                    nama_produk = :nama_produk,
                    fitur = :fitur,
                    deskripsi_produk = :deskripsi_produk,
                    kategori_id = :kategori_id,
                    harga = :harga
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama_produk', $data['nama_produk']);
        $this->db->bind('fitur', $data['fitur']);
        $this->db->bind('deskripsi_produk', $data['deskripsi_produk']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('id', $data['id']);

        
        $this->db->execute();

        return $this->db->rowCount();
	}
	public function deleteProduk($id)
	{
		$query = "DELETE FROM produk WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getTestimoni()
	{
		$this->db->query('SELECT testimoni.id AS testimoni_id, testimoni.user_id, testimoni.perkerjaan, testimoni.testimoni, testimoni.file, users.* FROM testimoni JOIN users ON testimoni.user_id=users.id');
		return $this->db->resultSet();
	}
	public function postTestimoni($data)
	{
		
		$user_id = $data["POST"]['nama'];
		$perkerjaan = $data["POST"]['perkerjaan'];
		$testimoni = $data["POST"]['testimoni'];
		$file = $data["gambar"];
		
		$query = "INSERT INTO testimoni
				  VALUES (null,'$user_id','$perkerjaan','$testimoni','$file')";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getTestimoniById($id)
	{

		$this->db->query('SELECT * FROM testimoni WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();
	}
	public function putTestimoni($data)
	{
		$id = $data["POST"]['id'];
		$user_id = $data["POST"]['nama'];
		$perkerjaan = $data["POST"]['perkerjaan'];
		$testimoni = $data["POST"]['testimoni'];
		$file = $data["gambar"];
		
		$query = "UPDATE testimoni
					SET user_id = '$user_id',
					    perkerjaan = '$perkerjaan',
					    testimoni = '$testimoni',
					    file = '$file'
					WHERE id = '$id'";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function deleteTestimoni($id)
	{
		$query = "DELETE FROM testimoni WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function getPortfolio()
	{
		$this->db->query('SELECT portfolio.id AS portfolio_id, portfolio.kategori_id, portfolio.foto, kategori.* FROM portfolio JOIN kategori ON portfolio.kategori_id=kategori.id');

		return $this->db->resultSet();
	}
	public function postPortfolio($data)
	{
		$kategori_id = $data["POST"]['kategori_id'];
		$foto = $data["gambar"];
		
		$query = "INSERT INTO portfolio
				  VALUES (null,'$kategori_id','$foto')";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getPortfolioById($id)
	{
		$this->db->query('SELECT * FROM portfolio WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();
	}
	public function putPortfolio($data)
	{
		$id = $data["POST"]['id'];
		$kategori_id = $data["POST"]['kategori_id'];
		$file = $data["gambar"];
		
		$query = "UPDATE portfolio
					SET kategori_id = '$kategori_id',
					    foto = '$file'
					WHERE id = '$id'";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getPortfolioByKategoriId($id)
	{
		$this->db->query('SELECT * FROM portfolio WHERE kategori_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function getOrder()
	{
		$this->db->query('SELECT tbl_order.id AS order_id, 
							tbl_order.user_id, 
							tbl_order.produk_id, 
							tbl_order.alamat,
							tbl_order.tanggal_foto,
							tbl_order.no_wa,
							tbl_order.tanggal_order,
							tbl_order.`status`,
							produk.nama_produk,
							produk.harga,
							users.username,
							users.nama,
							users.username,
							users.no_hp
							FROM tbl_order 
							JOIN produk ON tbl_order.produk_id=produk.id
							JOIN users ON tbl_order.user_id = users.id
							ORDER BY order_id DESC
							');
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function deleteOrder($id)
	{
		$query = "DELETE FROM tbl_order WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function editOrder($id)
	{
		$this->db->query('SELECT tbl_order.id AS order_id, 
							tbl_order.user_id, 
							tbl_order.produk_id, 
							tbl_order.alamat,
							tbl_order.tanggal_foto,
							tbl_order.no_wa,
							tbl_order.tanggal_order,
							tbl_order.`status`,
							produk.nama_produk,
							produk.harga,
							users.username,
							users.nama,
							users.username,
							users.no_hp
							FROM tbl_order 
							JOIN produk ON tbl_order.produk_id=produk.id
							JOIN users ON tbl_order.user_id = users.id
							WHERE tbl_order.id=:id
							');

		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();

	}
	public function put_status($data)
	{

		$query = "UPDATE tbl_order SET
                    status = :status
                  WHERE id = :order_id";
        
        $this->db->query($query);
        $this->db->bind('status', $data['status']);
        $this->db->bind('order_id', $data['order_id']);
        $this->db->execute();
        return $this->db->rowCount();
	}
	public function pendapatan()
	{
		$this->db->query("SELECT tbl_order.id AS order_id, 
							tbl_order.user_id, 
							tbl_order.produk_id, 
							tbl_order.alamat,
							tbl_order.tanggal_foto,
							tbl_order.no_wa,
							tbl_order.tanggal_order,
							tbl_order.`status`,
							produk.nama_produk,
							produk.harga
							FROM tbl_order 
							JOIN produk ON tbl_order.produk_id=produk.id
							WHERE tbl_order.`status` = 'selesai'
							");

		$this->db->execute();
		$data = $this->db->resultSet();
		$pendapatan = 0;
		foreach ($data as $key) {
			$pendapatan += $key['harga'];
		}
		return $pendapatan;
		

	}
	public function pendingOrderan()
	{
		$this->db->query("SELECT COUNT(id)
						FROM tbl_order
						WHERE `status`='pending'
							");
		$this->db->execute();
		$data = $this->db->single();
		return $data;


	}
	public function totalTable($table)
	{
		$data = $this->db->query("SELECT COUNT(id)
						FROM ".$table);
		
		$this->db->execute();
		$data = $this->db->single();

		return $data;
	}
	public function cetakOrder($bulan)
	{
		$tahun = date("Y");
		
		$this->db->query("
			SELECT tbl_order.id AS order_id, 
							tbl_order.user_id, 
							tbl_order.produk_id, 
							tbl_order.alamat,
							tbl_order.tanggal_foto,
							tbl_order.no_wa,
							tbl_order.tanggal_order,
							tbl_order.`status`,
							produk.nama_produk,
							produk.harga,
							users.username,
							users.nama,
							users.username,
							users.no_hp
							FROM tbl_order 
							JOIN produk ON tbl_order.produk_id=produk.id
							JOIN users ON tbl_order.user_id = users.id
							WHERE YEAR(tbl_order.tanggal_order) ='$tahun' AND MONTH(tbl_order.tanggal_order)='$bulan'
			");
		$this->db->execute();
		$data = $this->db->resultSet();
		return $data;
	}

}