<?php
class pegawai_model extends CI_Model {

		public function __construct()
    {
        parent::__construct();
		
    }
	
	//mengembalikan semua data agenda yang tersimpan di database
	function get_all_pegawai2()
	{
		  $query = $this->db->query(" SELECT * FROM pegawai JOIN pendidikanformalterakhir ON pegawai.NIB=pendidikanformalterakhir.NIB_Pegawai ");
		  return $query; 
	}
	
	function get_all_pegawai()
	{
		  $query = $this->db->query(" SELECT * FROM pegawai 
      JOIN sertifikasi ON pegawai.NIB=sertifikasi.NIB_Pegawai 
      JOIN pendidikanformalterakhir ON pegawai.NIB=pendidikanformalterakhir.NIB_Pegawai 
      JOIN riwayatpendidikanpesantren ON pegawai.NIB=riwayatpendidikanpesantren.NIB_Pegawai 
      JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID 
      GROUP BY pegawai.NIB");
		  return $query; 
	}
	
	function get_unit()
	{
		 	$query = $this->db->query(" SELECT * FROM unitpendidikan ");
		  return $query;
  	}
  	
  function get_detail_pegawai2($nib)
	{
		  $query = $this->db->query(" SELECT * FROM pegawai 
      WHERE NIB = '".$nib."'");
		  return $query; 
	}
  function get_detail_pegawai($nib)
	{
		  $query = $this->db->query(" SELECT * FROM pegawai 
      JOIN sertifikasi ON pegawai.NIB=sertifikasi.NIB_Pegawai 
      JOIN pendidikanformalterakhir ON pegawai.NIB=pendidikanformalterakhir.NIB_Pegawai 
      JOIN riwayatpendidikanpesantren ON pegawai.NIB=riwayatpendidikanpesantren.NIB_Pegawai 
      JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID 
      WHERE NIB = '".$nib."'
      GROUP BY pegawai.NIB");
		  return $query; 
	}  	
	
	function get_riwayat()
	{
		  $query = $this->db->query(" SELECT * FROM pegawai JOIN riwayatkepegawaian ON pegawai.NIB=riwayatkepegawaian.NIB_Pegawai 
      JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID
      WHERE Aktif=1");
		  return $query; 
	}  	

  function get_daftar_riwayat($nib)
	{
		  $query = $this->db->query(" SELECT * FROM pegawai JOIN riwayatkepegawaian ON pegawai.NIB=riwayatkepegawaian.NIB_Pegawai 
      JOIN unitpendidikan ON pegawai.Unit=unitpendidikan.ID
      WHERE NIB='".$nib."'");
		  return $query; 
	}  	


  function get_all_in_agendaku($id_agenda,$id_organisasi)
	{
		 	$query = $this->db->query(" SELECT * FROM agenda WHERE id_organisasi!='".$id_organisasi."' and id_agenda ='".$id_agenda."' ");
		  return $query;
  	}
	
  function ambil_detail_agenda($id_agenda){
			$this->db->select('*');
			$this->db->from('agenda');
			$this->db->where('agenda.id_agenda', $id_agenda);
			$query = $this->db->get();
		
			return $query;		
		}
		
		function update_agenda($agenda, $id_agenda_lama){
			$this->db->where('id_agenda', $id_agenda_lama);
			$this->db->update('agenda', $agenda); 	
		}
		
		function hapus_agenda($id_agenda){
			$this->db->where('id_agenda', $id_agenda);
			$this->db->delete('agenda'); 
		}
	//mengembalikan n baris data kriteria mulai dari posisi ke-start 
	function get_kriteria($start,$n)
	{
		$query = $this->db->query("SELECT * FROM kriteria ORDER BY idkriteria LIMIT ".$start.",".$n);
		return $query->result();
	}
	
	//mengembalikan jumlah baris data kriteria yang ada di database
	function count_kriteria()
	{
		$query = $this->db->query("SELECT * FROM kriteria");
		return $query->num_rows();
	}
	
	//mengembalikan 1 row data kriteria dengan nip tertentu
	function get_detail_kriteria($idkriteria){
		$query = $this->db->query(" SELECT * FROM kriteria WHERE idkriteria='".$idkriteria."' ");
		return $query->row();
	}
	
	function get_max_idkriteria()
	{
		$query = $this->db->query(" SELECT MAX(RIGHT(idkriteria,2)) as idkriteria_max FROM kriteria ");
		
		if ($query->num_rows() == 0){
			return 0;
		}else{
			$row = $query->row();
			return intval($row->idkriteria_max);
		}
	}
	
	//menambahkan 1 data kriteria baru ke database
	function tambahAgenda($agenda){
			$this->db->insert('agenda', $agenda);
		}
	
	function update_agendaku($agenda, $id_agenda_lama){
			$this->db->where('id_agenda', $id_agenda_lama);
			$this->db->update('agenda', $agenda); 	
		}
	//mengubah data kriteria tertentu
	function edit_kriteria($idkriteria,$nama,$deskripsi,$ket,$tipe,$batas_atas,$batas_bawah)
	{
		$data = array (
			'nama'			=> $nama,
			'deskripsi'		=> $deskripsi,
			'ket'			=> $ket,
			'tipe'			=> $tipe,
			'batas_atas' 	=> $batas_atas,
			'batas_bawah' 	=> $batas_bawah
		);
		$where = array('idkriteria' => $idkriteria);
		$this->db->update('kriteria',$data,$where);
	}
	
	//mengubah data kriteria tertentu
	function edit_bobot($bobot,$kriteria,$n)
	{
		$this->db->trans_start();
		for($i=0;$i<$n;$i++){
			$data = array (
				'bobot'			=> $bobot[$i]
			);
			$where = array('idkriteria' => $kriteria[$i]);
			$this->db->update('kriteria',$data,$where);
		}
		$this->db->trans_complete();
	}
	
	//menghapus data kriteria tertentu
	function delete_kriteria($idkriteria)
	{
		$where = array('idkriteria' => $idkriteria);
		$this->db->delete('kriteria',$where);
		$this->db->delete('nilai_alternatif',$where);
	}
	
	//mengembalikan true jika nama kriteria ada di database, false jika sebaliknya
	function cek_nama_kriteria($nama)
	{
		$query = $this->db->query("SELECT nama FROM kriteria WHERE nama='".$nama."'");
		return ($query->num_rows() > 0);
	}
	
	function cek_nama_kriteria_edit($nama,$idkriteria)
	{
		//mengembalikan true jika valid, false jika tidak valid
		$query = $this->db->query("SELECT nama FROM kriteria WHERE nama='".$nama."' AND idkriteria <> '".$idkriteria."'");
		return ($query->num_rows() > 0);
	}
}
?>