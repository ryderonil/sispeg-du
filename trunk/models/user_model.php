<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	//list flexy
	function ambil_data_user($NRP){
		
		//Build contents query
		$this->db->select("*")->from('anggota');
		$this->db->join('jabatan', 'anggota.id_jabatan = jabatan.id');
		$this->db->where('anggota.id_anggota',$NRP);
        $query=$this->db->get();
		return $query;		
	}
	
  function ambil_daftar_user($id_organisasi){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where('anggota.id_organisasi', $id_organisasi);
			$query = $this->db->get();		
			return $query;		
		}
		
		function ambil_daftar_tugas(){
			$this->db->select('*');
			$this->db->from('anggota');
			$query = $this->db->get();		
			return $query;		
		}
		
	function reg_anggota($NRP,$nama, $pass, $foto, $alamat, $telp, $jurusan, $status, $biodata, $organisasi, $jabatan ){
		$anggota=array('id_anggota'=>$NRP,'nama_anggota'=>$nama,'password'=>md5($pass), 'foto_anggota'=>$foto, 'alamat'=>$alamat, 'no_telepon'=>$telp,'jurusan'=>$jurusan,'status_anggota'=>$status,'biodata'=>$biodata,'id_organisasi'=>$organisasi,'id_jabatan'=>$jabatan);
		
		//$sql = "insert into anggota ('id_anggota','nama_anggota','password','no_telepon','jurusan','status_anggota','id_organisasi','id_jabatan')
			//		values (' ".$NRP ." ',' ". $nama. " ', md5( ' ". $pass ." ' ) ,' ". $telp . " ',' " .$jurusan. " ', ".$status." , ".$organisasi." , ".$jabatan." )";
		$this->db->insert ('anggota', $anggota);
					
		//return $this->db->query($sql);
	}
	
	 
	
}

?>