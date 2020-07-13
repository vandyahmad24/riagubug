<?php


class Home_model{
	private $table = "users";
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}
	public function registrasi($data)
	{

		$cekusername = "SELECT username FROM ".$this->table." WHERE username ='".$data['username']."'";
		$this->db->query($cekusername);

		$cek = $this->db->single();
		if($cek != false){
			Notifikasi::setFlash('Username sudah ada','Gagal Login', 'danger');
			header('Location:'.BASE_URL.'/home/registrasi');
		}


		$cekemail = "SELECT email FROM ".$this->table." WHERE email ='".$data['email']."'";
		$this->db->query($cekemail);
		$cekmaiil = $this->db->single();
		//cek email
		if($cekmaiil != false){
			Notifikasi::setFlash('Email sudah ada','Gagal Login', 'danger');
			header('Location:'.BASE_URL.'/home/registrasi');
		}
	
		$query = "INSERT INTO users
				  VALUES (null,:username,:email,:nama,:password,:no_hp,:level)";
		$password = password_hash($data['password'], PASSWORD_DEFAULT);

		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('password', $password);
		$this->db->bind('no_hp', $data['no_hp']);
		$this->db->bind('level', 'member');
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$username'";
		$this->db->query($query);
		$username = $this->db->single();
		if($username != false){

			if(password_verify($password,$username['password'])){
				if($username['level'] == 'admin'){
					$_SESSION['login'] = true;
					$_SESSION['admin'] = true;
					$_SESSION['data_user'] = $username;
					header('Location:'.BASE_URL.'/admin/');
				}else{
					$_SESSION['login'] = true;
					$_SESSION['data_user'] = $username;
					header('Location:'.BASE_URL.'/home/');
				}
			}else{
				Notifikasi::setFlash('Salah','Password', 'danger');
				header('Location:'.BASE_URL.'/home/login');
			}
		}else{
			Notifikasi::setFlash('Username','Tidak ditemukan', 'danger');
			header('Location:'.BASE_URL.'/home/login');
		}

	}
	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM users WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->single();
	}
	public function add_order($data)
	{

		
		$query = "INSERT INTO tbl_order
				  VALUES (null,:user_id,:produk_id,:alamat,:tanggal_foto,:no_wa,:tanggal_order,:status,:bukti_pembayaran)";

		$this->db->query($query);
		$this->db->bind('user_id', $data['id_pemesan']);
		$this->db->bind('produk_id', $data['produk_id']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('tanggal_foto', $data['tanggal_foto']);
		$this->db->bind('no_wa', $data['no_wa']);
		$this->db->bind('tanggal_order', $data['tanggal_pemesan']);
		$this->db->bind('status', 'pending');
		$this->db->bind('bukti_pembayaran', null);
		$this->db->execute();
		
		return $this->db->rowCount();
	}
	public function getOrderByUserId($id)
	{
		$this->db->query('SELECT produk.id AS id_produk, produk.nama_produk, produk.fitur, produk.deskripsi_produk,produk.harga, tbl_order.* FROM produk JOIN tbl_order ON tbl_order.produk_id=produk.id WHERE tbl_order.user_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();
		return $this->db->resultSet();

	
	}
	public function putBuktiTransfer($data)
	{
		$id = $data["POST"]['id_order'];
		$gambar = $data["gambar"];
		
		$query = "UPDATE tbl_order
					SET bukti_pembayaran = '$gambar'
					WHERE id = '$id'";
		

		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount();
	}
	

}