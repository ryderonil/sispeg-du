<?php
/**
 * Kelas user
 */
class pegawai extends CI_Controller {
	
	 //Konstruktor
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');	
		$this->load->library('form_validation');
		$this->load->helper(array('form','url'));
	  $this->cek_session();
	
		//$this->cek_session();
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
			$data_konten['pegawai']=$this->pegawai_model->get_all_pegawai();
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_pegawai_sert';
		$data["konten"] = $this->load->view("daftar_pegawai", $data_konten, TRUE);
			$this->load->view("main", $data);
	 }
	 
	 function index2()
	 {
			$data_konten['agenda']=$this->agenda_model->get_all_agenda($this->session->userdata('id_organisasi'));
			$data["menu"] = 'agenda';
			$data["sub_menu"] = 'daftar_agenda';
		$data["konten"] = $this->load->view("daftar_agenda2", $data_konten, TRUE);
			$this->load->view("main", $data);
	 }
	 
	 function all()
	 {
			$data_konten['pegawai']=$this->pegawai_model->get_all_pegawai2();
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_pegawai';
		$data["konten"] = $this->load->view("daftar_pegawai_saja", $data_konten, TRUE);
			$this->load->view("main", $data);}
	 
	 
	 function detail_pegawai($nib)
	 {
			
      $data_konten['pegawai']=$this->pegawai_model->get_detail_pegawai($nib);
      $data["konten"] = $this->load->view("detail_pegawai", $data_konten, TRUE);
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_pegawai';
      $this->load->view("main", $data);
	 }
	 
	 function edit_pegawai($nib)
	 {
		  $data_konten['pegawai']=$this->pegawai_model->get_detail_pegawai($nib);
      $data["konten"] = $this->load->view("edit_pegawai", $data_konten, TRUE);
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_pegawai';
      $this->load->view("main", $data);
	 }
	 
	 function viewRiwayat()
	 {
			
      $data_konten['pegawai']=$this->pegawai_model->get_riwayat();
      $data["konten"] = $this->load->view("daftar_riwayat", $data_konten, TRUE);
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_riwayat';
      $this->load->view("main", $data);
	 }
	 function daftar_riwayat($nib)
	 {
			
      $data_konten['pegawai']=$this->pegawai_model->get_daftar_riwayat($nib);
      $data["konten"] = $this->load->view("daftar_riwayat_pegawai", $data_konten, TRUE);
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_riwayat';
      $this->load->view("main", $data);
	 }
	 
   function viewEdit($nib)
	 {
			
      $data_konten['pegawai']=$this->pegawai_model->get_detail_pegawai($nib);
      $data["konten"] = $this->load->view("form_edit_pegawai", $data_konten, TRUE);
			$data["menu"] = 'pegawai';
			$data["sub_menu"] = 'daftar_pegawai';
      $this->load->view("main", $data);
	 }
	 
	 function delete_agenda($id_agenda)
	 {
			
      $data_konten['agenda']=$this->agenda_model->hapus_agenda($id_agenda);
			redirect('agenda');
			
			//$data["konten"] = $this->load->view("daftar_agenda",'', TRUE);
			//$data["menu"] = 'agenda';
			//$data["sub_menu"] = 'daftar_agenda';
      //$this->load->view("main", $data);
	 }
   function updateAgenda($id_agenda)	{
		
		  $tanggal_mulai = explode('/', $this->input->post('tanggal_mulai'));
			$tanggal_mulai2 = $tanggal_mulai[2].'-'.$tanggal_mulai[0].'-'.$tanggal_mulai[1];
			$tanggal_selesai = explode('/',$this->input->post('tanggal_selesai'));
			$tanggal_selesai2 = $tanggal_selesai[2].'-'.$tanggal_selesai[0].'-'.$tanggal_selesai[1];
			$jam_mulai = $this->input->post('jam_mulai').':'.$this->input->post('menit_mulai').':00';
			$jam_selesai = $this->input->post('jam_selesai').':'.$this->input->post('menit_selesai').':00';
  	$today = $this->input->post('tanggalUpload');;
    
    $data["menu"] = 'agenda';
			$data["sub_menu"] = 'tambah_agenda';
    $agenda_baru = array('id_agenda' 		=> $this->input->post('id_agenda'),
            'nama_agenda' 		=> $this->input->post('namaAgenda'),
						'lokasi_agenda' 		=> $this->input->post('lokasi'),
						'tanggal_mulai'  		=> $tanggal_mulai2,
						'tanggal_selesai'	=> $tanggal_selesai2,
						'jam_mulai'  		=> $jam_mulai,
						'jam_selesai'	=> $jam_selesai,'tanggal_upload' 		=> $today,
						'jenis_agenda'  		=> $this->input->post('jenisAgenda'),
						'status_agenda'	=> $this->input->post('statusAgenda'),
						'link_hasil_liputan' 		=> $this->input->post('link'),
						'catatan_tambahan'  		=> $this->input->post('catatan'),
						'id_organisasi'		=> $this->session->userdata('id_organisasi')
						);

			$id_agenda_lama = $this->input->post('id_agenda');
			$this->agenda_model->update_agenda($agenda_baru, $id_agenda_lama);
			redirect('agenda');
		
	 }
	 function viewTambahPegawai()
	 {
			
			$data_konten['pegawai']=$this->pegawai_model->get_unit();
      $data["konten"] = $this->load->view("form_tambah_pegawai",$data_konten, TRUE);
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $this->load->view('main',$data);
	 }
	 function viewTambahPegawai2($nib)
	 {
		  
			$data_konten['pegawai']=$this->pegawai_model->get_pegawai_detail($nib);
      $data["konten"] = $this->load->view("form_tambah_pegawai2",$data_konten, TRUE);
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $this->load->view('main',$data);
	 }
	 function viewTambahPegawai3($nib)
	 {
		  
			$data_konten['pegawai']=$this->pegawai_model->get_pegawai_detail($nib);
      $data["konten"] = $this->load->view("form_tambah_pegawai3",$data_konten, TRUE);
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $this->load->view('main',$data);
	 }
	 function viewTambahPegawai4($nib)
	 {
		  
			$data_konten['pegawai']=$this->pegawai_model->get_pegawai_detail($nib);
      $data["konten"] = $this->load->view("form_tambah_pegawai4",$data_konten, TRUE);
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $this->load->view('main',$data);
	 }
	 function tambahPegawai()
	{	
      $tanggal_mulai = explode('/', $this->input->post('tanggal_lahir'));
			$tanggal_mulai2 = $tanggal_mulai[2].'-'.$tanggal_mulai[0].'-'.$tanggal_mulai[1];
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $pegawai = array('NIB' 		=> $this->input->post('nib'),
						'JenisPegawai' 		=> $this->input->post('jenis_pegawai'),
						'NoKtp'  		=> $this->input->post('nomor_ktp'),
						'Nama'	=> $this->input->post('nama'),
						'Gelar'  		=> $this->input->post('gelar'),
						'TempatLahir'	=> $this->input->post('tempat_lahir'),
            'TanggalLahir' 		=> $tanggal_mulai2,
						'JenisKelamin'  		=> $this->input->post('jenis_kelamin'),
						'StatusPerkawinan'	=> $this->input->post('status_kawin'),
						'NamaPasangan' 		=> $this->input->post('nama_pasangan'),
						'JumlahAnak'  		=> $this->input->post('jml_anak'),
						'AlamatRumah'		=> $this->session->userdata('alamat'),
						'GolonganDarah'  		=> $this->input->post('gol_darah'),
						'Telepon'	=> $this->input->post('telepon'),
						'Email' 		=> $this->input->post('email'),
						'NoKarpeg'  		=> $this->input->post('no_karpeg'),
						'NoTaspen'  		=> $this->input->post('no_taspen'),
						'Npwp'		=> $this->session->userdata('npwp'),
						'Foto'  		=> 5,
						'Unit'	=> $this->input->post('unit'),
						'Nuptk' 		=> $this->input->post('nuptk'),
						'Nip'  		=> $this->input->post('nip'),
						'KodePos'	=> $this->input->post('kodepos'),
						'NamaAyah' 		=> $this->input->post('ayah'),
						'NamaIbu'  		=> $this->input->post('ibu')	
						);
		
		//if($this->cek_validasi() == true)
		//{
			$this->pegawai_model->tambahPegawai($pegawai);
			redirect('pegawai/all');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}
	/*  `NIB_Pegawai`,
             `PendidikanTerakhir`,
             `TanggalIjasah`,
             `TanggalLulus`,
             `AktaMengajar`,
             `NoIjasah`,
             `Fakultas`,
             `Jurusan`,
             `JenisLembaga`,
             `KategoriLembaga`,
             `StatusPerguruanTinggi`,
             `NamaLembagaPendidikan`,
             `AlamatLembagaPendidikan`,
             `NamaPimpinan`,
             `Ipk`)*/
	
  function tambahPendFormal()
	{	
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $pegawai = array('NIB_Pegawai' 		=> $this->input->post('nib_pegawai'),
						'PendidikanTerakhir' 		=> $this->input->post('pend_terakhir'),
						'TanggalIjasah'  		=> $this->input->post('tanggal_ijazah'),
						'TanggalLulus'	=> $this->input->post('tanggal_ijazah'),
						'AktaMengajar'  		=> $this->input->post('akta_mengajar'),
						'NoIjasah'  		=> $this->input->post('no_ijazah'),
            'Fakultas'	=> $this->input->post('fakultas'),
            'Jurusan' 		=> $this->input->post('jurusan'),
						'JenisLembaga'  		=> $this->input->post('jenis_lembaga'),
						'KategoriLembaga'	=> $this->input->post('kat_lembaga'),
						'StatusPerguruanTinggi' 		=> $this->input->post('stat_per'),
						'NamaLembagaPendidikan'  		=> $this->input->post('nama_lem'),
						'AlamatLembagaPendidikan'		=> $this->session->userdata('alamat_lem'),
						'NamaPimpinan'  		=> $this->input->post('nama_pim'),
						'Ipk'	=> $this->input->post('ipk')
						);
		
		//if($this->cek_validasi() == true)
		//{
			$this->pegawai_model->tambahPendFormal($pegawai);
			redirect('pegawai/all');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}
	 /*`NIB_Pegawai`,
             `NamaPesantren`,
             `AlamatPesantren`,
             `LamaPendidikan`,
             `TahunMulai`,
             `TahunSelesai
   */
   function tambahPendPes()
	{	
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $pegawai = array('NIB_Pegawai' 		=> $this->input->post('nib_pegawai'),
						'NamaPesantren' 		=> $this->input->post('nama_pesantren'),
						'AlamatPesantren'  		=> $this->input->post('alamat_pes'),
						'LamaPendidikan'	=> $this->input->post('lama_pendidikan'),
						'TahunMulai'  		=> $this->input->post('mulai'),
						'TahunSelesai'  		=> $this->input->post('selesai')
            );
		
		//if($this->cek_validasi() == true)
		//{
			$this->pegawai_model->tambahPendPes($pegawai);
			redirect('pegawai/all');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}
	
	/*
  NIB_Pegawai`,
             `BidangStudi`,
             `TanggalSertifikasi`,
             `NoSertifikasi`,
             `NoRegistrasiGuru`,
             `UnitTempatSertifikasi`*/
   
   function tambahSertifikasi()
	{	
      $data["menu"] = 'pegawai';
			$data["sub_menu"] = 'tambah_pegawai';
      $pegawai = array('NIB_Pegawai' 		=> $this->input->post('nib_pegawai'),
						'BidangStudi' 		=> $this->input->post('bidang_studi'),
						'TanggalSertifikasi'  		=> $this->input->post('tgl_sert'),
						'NoSertifikasi'	=> $this->input->post('nomor_sert'),
						'NoRegistrasiGuru'  		=> $this->input->post('nomor_reg'),
						'UnitTempatSertifikasi'  		=> $this->input->post('unit_sert')
            );
		
		//if($this->cek_validasi() == true)
		//{
			$this->pegawai_model->tambahSert($pegawai);
			redirect('pegawai/all');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}
   
   
   function tambahAgenda()
	{	
      $tanggal_mulai = explode('/', $this->input->post('tanggal_mulai'));
			$tanggal_mulai2 = $tanggal_mulai[2].'-'.$tanggal_mulai[0].'-'.$tanggal_mulai[1];
			$tanggal_selesai = explode('/',$this->input->post('tanggal_selesai'));
			$tanggal_selesai2 = $tanggal_selesai[2].'-'.$tanggal_selesai[0].'-'.$tanggal_selesai[1];
			$jam_mulai = $this->input->post('jam_mulai').':'.$this->input->post('menit_mulai').':00';
			$jam_selesai = $this->input->post('jam_selesai').':'.$this->input->post('menit_selesai').':00';
		  $today = date('Y-m-d');

    $data["menu"] = 'agenda';
			$data["sub_menu"] = 'tambah_agenda';
    $agenda = array('nama_agenda' 		=> $this->input->post('namaAgenda'),
						'lokasi_agenda' 		=> $this->input->post('lokasi'),
						'tanggal_mulai'  		=> $tanggal_mulai2,
						'tanggal_selesai'	=> $tanggal_selesai2,
						'jam_mulai'  		=> $jam_mulai,
						'jam_selesai'	=> $jam_selesai,
            'tanggal_upload' 		=> $today,
						'jenis_agenda'  		=> $this->input->post('jenisAgenda'),
						'status_agenda'	=> $this->input->post('statusAgenda'),
						'link_hasil_liputan' 		=> $this->input->post('link'),
						'catatan_tambahan'  		=> $this->input->post('catatan'),
						'id_organisasi'		=> $this->session->userdata('id_organisasi')
						);
		
		//if($this->cek_validasi() == true)
		//{
			$this->agenda_model->tambahAgenda($agenda);
			redirect('agenda/index2');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}
	
	function tambahAgendaku($id_agenda)
	{	
    
    $data_konten=$this->agenda_model->get_all_in_agendaku($id_agenda,$this->session->userdata('id_organisasi'));
    $today = date('Y-m-d');
    $data["menu"] = 'agenda';
	  $data["sub_menu"] = 'tambah_agenda';
    
    $agenda = array('nama_agenda' 		=> $data_konten->row()->nama_agenda,
						'lokasi_agenda' 		=> $data_konten->row()->lokasi_agenda,
						'tanggal_mulai'  		=> $data_konten->row()->tanggal_mulai,
						'tanggal_selesai'	=> $data_konten->row()->tanggal_selesai,
						'jam_mulai'  		=> $data_konten->row()->jam_mulai,
						'jam_selesai'	=> $data_konten->row()->jam_selesai,
            'tanggal_upload' 		=> $today,
						'jenis_agenda'  		=> $data_konten->row()->jenis_agenda,
						'status_agenda'	=> $data_konten->row()->status_agenda,
						'link_hasil_liputan' 		=> $data_konten->row()->link_hasil_liputan,
						'catatan_tambahan'  		=> $data_konten->row()->catatan_tambahan,
						'id_referensi'  		=> $data_konten->row()->id_agenda,
            'id_organisasi'		=> $this->session->userdata('id_organisasi')
						);
		//if($this->cek_validasi() == true)
		//{
			$id_agenda_lama = $data_konten->row()->id_agenda;
	
      $this->agenda_model->update_agendaku($agenda,$id_agenda_lama);
      $this->agenda_model->tambahAgenda($agenda);
			
      redirect('agenda/index2');
		//}
		//else{
			//$this->load->view('tambah_agenda');
	//	}
	}

	 
	 //melhat daftar user yang telah dibuat
	 function grid_daftar()
	 {
		$this->cek_session();
		$colModel['no'] = array('No',50,TRUE,'center',1);
		$colModel['USERNAME'] = array('Username',100,TRUE,'center',1);
		$colModel['NAMA_PEGAWAI'] = array('Nama Pegawai',200,TRUE,'center',1);
		$colModel['NIP'] = array('NIP',70,TRUE,'center',1);
		$colModel['NAMA_ROLE'] = array('Role Akses',100,TRUE,'center',1);
		$colModel['NAMA_PTI'] = array('Nama Perguruan Tinggi',150,TRUE,'center',1);
		$colModel['UBAH'] = array('Ubah',50,TRUE,'center',1);
			
		//setting konfigurasi pada bottom tool bar flexigrid
		$gridParams = array(
							'width' => 'auto',
							'height' => 330,
							'rp' => 15,
							'rpOptions' => '[15,30,50,100]',
							'pagestat' => 'Menampilkan : {from} ke {to} dari {total} data.',
							'blockOpacity' => 0,
							'title' => 'MANAJEMEN USER',
							'showTableToggleBtn' => false
							);
		
		//menambah tombol pada flexigrid top toolbar
		$buttons[] = array('Tambah','add','spt_js');
		
		
		// mengambil data dari file controler ajax pada method grid_user		
		$url = site_url()."/manajemen_user/grid_user";
		$grid_js = build_grid_js('user',$url,$colModel,'ID','asc',$gridParams,$buttons);
		$data['js_grid'] = $grid_js;
		$data['added_js'] = 
		"<script type='text/javascript'>
		function spt_js(com,grid){	
			if (com=='Tambah'){
				location.href= '".site_url()."/manajemen_user/add_process';    
			}			
		} </script>";
			
		//$data['added_js'] variabel untuk membungkus javascript yang dipakai pada tombol yang ada di toolbar atas
		$data['content'] = $this->load->view('grid',$data,true);
		$this->load->view('main',$data);
	 }
	 
	 //mengambil data user di tabel login
	 function grid_user() 
	 {
		$valid_fields = array('KODE_USER','USERNAME','PASSWORD','NAMA_PEGAWAI','NIP','NAMA_ROLE');
		$this->flexigrid->validate_post('KODE_USER','asc',$valid_fields);
		$records = $this->user_model->get_data_flexigrid();

		$this->output->set_header($this->config->item('json_header'));
			
		
		$no = 0;
		foreach ($records['records']->result() as $row){	
				$no = $no+1;
				$tes = $this->user_model->get_nama_perguruan_tinggi($row->PTI);
				//if($tes->row()->)
				$record_items[] = array(
										$row->KODE_USER,
										$no,
										$row->USERNAME,
										$row->NAMA_PEGAWAI,
										$row->NIP,
										$row->NAMA_ROLE,
										//$row->NAMA_PTI,
										$tes->row()->NAMA_PTI,
								'<a href='.site_url().'/manajemen_user/edit_proses/'.$row->KODE_USER.'><img border=\'0\' src=\''.base_url().'images/flexigrid/iconedit.png\'></a>'
								);
		}
		
		if(isset($record_items))
			$this->output->set_output($this->flexigrid->json_build($records['record_count'],$record_items));
		else
			$this->output->set_output('{"page":"1","total":"0","rows":[]}');
	}
	
	function cek_dropdown($value){
		if($value == 0){
			$this->form_validation->set_message('cek_dropdown', 'Kolom %s harus dipilih!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function cek_password_ulang($value){
		if($value != $this->input->post('password')){
			$this->form_validation->set_message('cek_password_ulang', 'Kolom %s harus sama!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function cek_username($value){
		if($this->user_model->cek_username($value)){
			$this->form_validation->set_message('cek_username', 'Username telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function cek_username_baru($value, $kode_user){
		if($this->user_model->cek_username_baru($value, $kode_user)){
			$this->form_validation->set_message('cek_username_baru', 'Username '.$value.' telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	function cek_nip($value){
		if($this->user_model->cek_nip($value)){
			$this->form_validation->set_message('cek_nip', 'NIP telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function cek_nip_baru($value, $kode_user){
		if($this->user_model->cek_nip_baru($value, $kode_user)){
			$this->form_validation->set_message('cek_nip_baru', 'NIP '.$value.' telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function cek_pti($value){
		if($this->user_model->cek_pti($value)){
			$this->form_validation->set_message('cek_pti', 'Nama Perguruan Tinggi telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	function cek_pti_baru($value, $kode_user){
		$tes = $this->user_model->get_nama_perguruan_tinggi($value);
		if($this->user_model->cek_pti_baru($value, $kode_user)){
			$this->form_validation->set_message('cek_pti_baru', 'Nama Perguruan Tinggi '.$tes->row()->NAMA_PTI.' telah terpakai!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	// Set validation rules
	function cek_validasi($edit,$kode_user)
	{	
		if($edit == false){
			$this->form_validation->set_rules('password', 'Password', 'required');
			$password_ulang = '|required';
			$username = '|callback_cek_username';
			$nip = '|callback_cek_nip';
			$pti = '|callback_cek_pti';
		}
		else{
			$password_ulang = '';
			$username = '|callback_cek_username_baru['.$kode_user.']';
			$nip = '|callback_cek_nip_baru['.$kode_user.']';
			$pti = '|callback_cek_pti_baru['.$kode_user.']';
		}
		$this->form_validation->set_rules('username', 'Username', 'required'.$username);
		$this->form_validation->set_rules('nama_pegawai', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'NIP', 'required|max_length[20]'.$nip);
		$this->form_validation->set_rules('role', 'Role', 'callback_cek_dropdown');
		if($this->input->post('role')==3) $this->form_validation->set_rules('nama_pt', 'Nama Perguruan Tinggi', 'callback_cek_dropdown'.$pti);
		$this->form_validation->set_rules('password2', 'Password', 'callback_cek_password_ulang'.$password_ulang);		
		$this->form_validation->set_message('required', 'Kolom %s harus diisi !!');
		return $this->form_validation->run();
	}
	
	//proses penambahan user
	function add_process()
	{	
	//$kode_subdit = $this->input->post('subdit');
	$user = array(	'USERNAME' 		=> $this->input->post('username'),
					'PASSWORD' 		=> md5($this->input->post('password')),
					'NAMA_PEGAWAI'  => $this->input->post('nama_pegawai'),
					'NIP'			=> $this->input->post('nip'),
					'KODE_ROLE'		=> $this->input->post('role'),
					'PTI'			=> $this->input->post('nama_pt'),
					'STATUS'		=> 1
					);
	$kopertis = array('KODE_ROLE'=> $this->input->post('role'));
	
		if($this->cek_validasi(false,'') == true)
		{
			$this->user_model->add($user);
			redirect('manajemen_user');
		}
		else{
			$this->load->model('user_model','sm');
		
			//mengambil data role dari database
			$data_role = $this->sm->get_role_login();
			$role[0] = "-- Pilih Role --";
			foreach($data_role->result() as $rl){
				$role[$rl->KODE_ROLE] = $rl->NAMA_ROLE;
			}
			$data['role'] 		= $role;
			
			//mengambil data perguruan tinggi dari database
			$data_pti = $this->sm->get_pti();
			$nama_pti[0] = "-- Pilih Perguruan Tinggi --";
			foreach($data_pti->result() as $pti){
				$nama_pti[$pti->PTI] = $pti->NAMA_PTI;
			}
			$data['nama_pt'] 		= $nama_pti;
			$data['content'] = $this->load->view('form_tambahuser',$data,true);
			$this->load->view('main',$data);
		}
	}
	
	//mengubah isi user & validasi
	function edit_proses($kode_user)
	{
		$password = $this->user_model->get_data_user($kode_user)->row('PASSWORD');
		if($this->input->post('password')!='') $password = $this->input->post('password');
		
		$user = array(	'USERNAME' 		=> $this->input->post('username'),
						'PASSWORD' 		=> md5($password),
						'NAMA_PEGAWAI'  => $this->input->post('nama_pegawai'),
						'NIP'			=> $this->input->post('nip'),
						'KODE_ROLE'		=> $this->input->post('role'),
						'PTI'			=> $this->input->post('nama_pt'),
					);

		if($this->cek_validasi(true,$kode_user) == true)
		{
			$this->user_model->update($kode_user, $user);
			redirect('manajemen_user');
		}
		else{
			$this->load->model('user_model','sm');
			$hasil = $this->sm->get_data_user($kode_user);
			foreach($hasil->result() as $data_user){
				//$tes = $this->user_model->get_nama_perguruan_tinggi($data_user->PTI);
				$data['username'] 			= $data_user->USERNAME;
				$data['nama_pegawai']  		= $data_user->NAMA_PEGAWAI;
				$data['nip']				= $data_user->NIP;
				$data['role_dipilih']		= $data_user->KODE_ROLE;
				$data['nama_pt_dipilih']	= $data_user->PTI;			
			}
			
		
			//mengambil data role dari database
			$data_role			= $this->sm->get_role_login();	
			$role[0] = "-- Pilih Role --";
			foreach($data_role->result() as $rl){
				$role[$rl->KODE_ROLE] = $rl->NAMA_ROLE;
			}
			$data['role'] 		= $role; 
			
			//mengambil data perguruan tinggi dari database
			$data_pti = $this->sm->get_pti();
			$nama_pti[0] = "-- Pilih Perguruan Tinggi --";
			foreach($data_pti->result() as $pti){
				$nama_pti[$pti->PTI] = $pti->NAMA_PTI;
			}
			$data['nama_pt'] 		= $nama_pti;
			$data['content'] = $this->load->view('form_edituser',$data,true);
			$this->load->view('main',$data);
		}
	}
} // END user class

/* End of file user.php */
/* Location: ./system/application/controllers/manajemen_user.php */
