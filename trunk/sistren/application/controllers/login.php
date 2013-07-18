<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
    }

    function index() {
        $this->load->view('form_login');
    }
	
	function fals() {
        $this->load->view('form_login2');
    }
	
	/*function home(){//home dibuat controller tersendiri
		$data["konten"]=$this->load->view('home_baru', "", True);
		$data['menu']='home';
		$data['sub_menu']="";
		//$data['session']=$sess;
		$this->load->view('main', $data);//templatenya disesuaikan dengan yang lain
		//di bagian profil diambil nama user yang login melalui session, atau ngambil dari database berdasarkan id user yang disimpan di session
	}*/	
	
	function form_reg(){//registrasi dibuat controller tersendiri
		$this->load->view('form_registrasi');
	}
	
	
    function auth() {
		//$this->load->view('home_admin');//halaman admin di load disini?		
        //$this->session->destroy();
		//session_start();
        
		$status = false;
            
		$NRP = $this->input->post('username');
        $password = $this->input->post('password');
		$user = $this->user_model->ambil_data_user($NRP);
		//redirect('home');

        //foreach ($user->result() as $row) {
			//otentifikasi sebagai admin di cek berdasarkan username, pass, status_anggota, dan jabatan
            if ($NRP == $user->row()->id_anggota && md5($password) == $user->row()->password && $user->row()->status_anggota==1 /*&& $row->id_jabatan==1*/) {
                
				//setting session terhadap data user 
                $newuser = array(//setting session ditambahkan
                    'id_user' => $NRP,
                    'nama'	  => $user->row()->nama_anggota,
					'id_organisasi' => $user->row()->id_organisasi,
					'id_jabatan' => $user->row()->id_jabatan,
					'nama_jabatan' => $user->row()->nama_jabatan
                     //'id_user' => $row->id_user
									//id_user itu harusnya id_anggota, pengambilan setelah $row-> itu berdasarkan nama kolom yang mau diatmbil di tabel database
                );
				$status = true;
				
                $this->session->set_userdata($newuser);
			    redirect('pegawai');
				
            }
			else{
				//var_dump($row);
				 redirect('login/fals');
			}
        //}
    }

//end if

    function logout() {//logout dipasang di main, karena logout yang ada di main yang digunakan di semua aplikasi
        $this->session->sess_destroy();
        redirect('login');
    }
	
	function reg(){//ditambahkan pake validation dan dipisah ke controller yang berbeda
		
		$NRP = $this->input->post('NRP');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
		$telp= $this->input->post('telepon');
		$jurusan = $this->input->post('jurusan');
		$alamat= $this->input->post('alamat');
		$biodata= $this->input->post('biodata');
		$status = 2;
		$organisasi = $this->input->post('organisasi');
		$jabatan = 3;
		$cekNRP=$this->user_model->ambil_data_user($NRP);
		
		if($cekNRP->num_rows() > 0){
			redirect('login/form_reg');
			
		}
		if($this->cek_validasi_registrasi()==true )	{
			//$session = $this->session->userdata('id_user');
			$foto_anggota = 'foto_anggota';
            $config['upload_path'] = "gallery/anggota";
            $config['allowed_types'] = 'gif|jpg|png';
			
			if(!is_dir($config['upload_path'])){
				mkdir($config['upload_path'], 0777);
				echo "file sudah ada";
				//mkdir($config['upload_path2'], 0777);
			} else {

					$this->load->library('upload', $config);
					$files = $this->upload->do_upload($foto_anggota);
					$data = $this->upload->data($foto_anggota);
					
					if (!$files) {
						$file_name = 'default.jpg';
						$foto='gallery/anggota/'.$file_name;
						$this->user_model->reg_anggota($NRP,$nama, $pass, $foto, $alamat, $telp, $jurusan, $status, $biodata, $organisasi, $jabatan );
						//echo "<script type='text/javascript'>
					//alert('Anda sudah terdaftar');
				//</script>";
				redirect('login');
					}
					else {				
						$file_name = $data['file_name'];
						$foto='gallery/anggota/'.$file_name;
						$this->user_model->reg_anggota($NRP,$nama, $pass, $foto, $alamat, $telp, $jurusan, $status, $biodata, $organisasi, $jabatan );
						
						//echo "<script type='text/javascript'>
					//alert('Anda sudah terdaftar');
				//</script>";
				redirect('login');
						
					}			
			
				}
			
						
		} else {
		/*<script type="text/javascript">
			alert('ada form yang masih belum diisi');
		</script>*/
		$this->cek_validasi_registrasi();
		redirect('login/form_reg');
		}
	}
	
	function cek_validasi_registrasi(){
		$this->form_validation->set_rules('NRP', 'NRP', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('pass', 'pass', 'required');
		$this->form_validation->set_rules('telepon', 'telepon', 'required');
		$this->form_validation->set_rules('jurusan', 'alamat', 'required');
		$this->form_validation->set_rules('biodata', 'biodata', 'required');
		$this->form_validation->set_rules('organisasi', 'organisasi', 'required');
		$this->form_validation->set_message('required', '<label for="error" generated="true" class="error" style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kolom %s harus diisi !!</label>');
		return $this->form_validation->run();
	}


}
