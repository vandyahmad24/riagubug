<?php


/**
 * 
 */
class Home extends Controller
{

	
	public function index()
	{
		$data['layanan'] =  $this->model('Admin_model')->getKategori();	
		$data['testimoni'] =  $this->model('Admin_model')->getTestimoni();	
		$data['portfolio'] =  $this->model('Admin_model')->getPortfolio();
		$data['produk'] =  $this->model('Admin_model')->getProduk();	


		$this->view('frontend/header');
		$this->view('home/index',$data);
		$this->view('frontend/footer');
	}
	public function login()
	{
		$this->view('frontend/header');
		$this->view('auth/login');
		$this->view('frontend/footer');
	}
	public function registrasi()
	{
		$this->view('frontend/header');
		$this->view('auth/register');
		$this->view('frontend/footer');
	}
	public function post_registrasi()
	{

		//cek email
		if($this->model('Home_model')->registrasi($_POST)>0){
			Notifikasi::setFlash('Berhasil Silahkan Login','Registrasi', 'success');
			header('Location:'.BASE_URL.'/home/login');
			exit;
		}else{
			Notifikasi::setFlash('Gagal','Registrasi', 'danger');
			header('Location:'.BASE_URL.'/home/registrasi');
		}
	}

	public function post_login()
	{
		//cek email
		$this->model('Home_model')->login($_POST);
	
	}
	public function logout()
	{
		session_start();
		$_SESSION=[];
		session_unset();
		session_destroy();

		header('Location:'.BASE_URL.'/home/login');
	}
	public function profil_user($id)
	{
		$data['user'] = $this->model('Home_model')->getUserById($id);
		$this->view('frontend/header');
		$this->view('home/profil',$data);
		$this->view('frontend/footer');
	}
	public function foto($id)
	{
		$data['portfolio'] = $this->model('Admin_model')->getPortfolioByKategoriId($id);
		$this->view('frontend/header');
		$this->view('home/foto',$data);
		$this->view('frontend/footer');
	}
	public function order($id)
	{
		$data['produk'] =  $this->model('Admin_model')->getProdukId($id);
		$this->view('frontend/header');
		$this->view('home/order',$data);
		$this->view('frontend/footer');
	}
	public function add_order()
	{
		
		if($this->model('Home_model')->add_order($_POST)>0){
			Notifikasi::setFlash('Berhasil di buat, Admin Akan Menghubungi Anda Melalui Nomer Yang telah di cantumkan','Order', 'success');
			header('Location:'.BASE_URL.'/home/detail_order/'.$_SESSION['data_user']['id']);
			exit;
		}else{
			Notifikasi::setFlash('Gagal','Order', 'danger');
			header('Location:'.BASE_URL.'/home/');
		}
	}
	public function detail_order($id)
	{
		$data['order'] = $this->model('Home_model')->getOrderByUserId($id);
		
		$this->view('frontend/header');
		$this->view('home/detail_order',$data);
		$this->view('frontend/footer');
	}

}