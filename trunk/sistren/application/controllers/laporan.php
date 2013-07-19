<?php
/**
 * Kelas user
 */
class laporan extends CI_Controller {
	
	 //Konstruktor
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');	
		$this->load->model('unit_pendidikan_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form','url'));
	  	$this->cek_session();
	}
	
	function cek_session()
	 {	
		$kode_role = $this->session->userdata('id_jabatan');
		if($kode_role == NULL)
		{
			//redirect('login/login_ulang');
			redirect('login');
		}//else if($kode_role != 1){
			//redirect('login/alert');
		//}
	 }
	
	
	/**
	 * Menampilkan tabel daftar user
	 */
	 function index()
	 {
			$id_up = $this->input->post("id_up");
			if(!isset($id_up))
				$id_up=0;

			$data_konten['pegawai']					= $this->unit_pendidikan_model->get_all_pegawai_byUP($id_up);
			$data_konten['daftar_unit_pendidikan'] 	= $this->unit_pendidikan_model->get_all_unit_pendidikan();
			$data_konten['persen_pegawai_byUP']		= $this->unit_pendidikan_model->get_persen_pegawai_byUP();

			$data["menu"] 			= 'laporan';
			$data["sub_menu"] 		= 'daftar_pegawai';
			$data["konten"] 		= $this->load->view("laporan_pegawai", $data_konten, TRUE);

			$this->load->view("main", $data);
	 }
	 
	 function laporan_cetak(){
	 		$id_up = $this->input->post("id_up");
			if(!isset($id_up))
				$id_up=0;

			$data_konten['pegawai']					= $this->unit_pendidikan_model->get_all_pegawai_byUP($id_up);
			$data_konten['daftar_unit_pendidikan'] 	= $this->unit_pendidikan_model->get_all_unit_pendidikan();
			$data_konten['persen_pegawai_byUP']		= $this->unit_pendidikan_model->get_persen_pegawai_byUP();

			$data["menu"] 			= 'laporan';
			$data["sub_menu"] 		= 'daftar_pegawai';
			$data["konten"] 		= $this->load->view("laporan_cetak", $data_konten, TRUE);

			$this->load->view("main", $data);
	 }
	 
} // END user class

/* End of file user.php */
/* Location: ./system/application/controllers/manajemen_user.php */
