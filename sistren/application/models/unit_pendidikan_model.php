<?php
class unit_pendidikan_model extends CI_Model {

		public function __construct()
    {
        parent::__construct();
		
    }
	
	//mengembalikan semua data agenda yang tersimpan di database
	function get_all_unit_pendidikan()
	{
		  $query = $this->db->get('unitpendidikan');
		  return $query->result(); 
	}
	
	function get_all_pegawai_byUP($id_up)
	{
		if($id_up==0)//semua
			$query = $this->db->query(" SELECT * FROM pegawai 
      		JOIN sertifikasi ON pegawai.NIB=sertifikasi.NIB_Pegawai 
      		JOIN pendidikanformalterakhir ON pegawai.NIB=pendidikanformalterakhir.NIB_Pegawai 
      		JOIN riwayatpendidikanpesantren ON pegawai.NIB=riwayatpendidikanpesantren.NIB_Pegawai 
      		JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID 
      		GROUP BY pegawai.NIB");
      	else
      		$query = $this->db->query(" SELECT * FROM pegawai 
      		JOIN sertifikasi ON pegawai.NIB=sertifikasi.NIB_Pegawai 
      		JOIN pendidikanformalterakhir ON pegawai.NIB=pendidikanformalterakhir.NIB_Pegawai 
      		JOIN riwayatpendidikanpesantren ON pegawai.NIB=riwayatpendidikanpesantren.NIB_Pegawai 
      		JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID 
      		WHERE unitpendidikan.ID = ".$id_up." GROUP BY pegawai.NIB ");
      	
		  return $query; 
	}
	
}
?>