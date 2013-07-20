<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Pegawai </h1>

<span class="pagedesc">Deskripsinya Informasi Pegawai</span> 
</div>
<!--pageheader-->
<div id="contentwrapper" class="contentwrapper"><br />
<div class="contenttitle2">
<h3>Daftar Keseluruhan Pegawai</h3>
</div>
<!--contenttitle-->

                    <!--<div class="notibar msgsuccess">
                        <a class="close"></a>
                        <p>This is a success message.</p>
                    </div><!-- notification msgsuccess -->
<?php if($pegawai->num_rows() > 0){?>
<table class="stdtable" id="dyntable" border="0" cellpadding="0" cellspacing="0">
<colgroup><col class="con0" /><col class="con1" /><col class="con0" /><col class="con1" /><col class="con0" /></colgroup> 
<thead> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head0">Gelar</th>
  <th class="head1">Tanggal Lahir</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</thead> 
<tfoot> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head1">Gelar</th>
  <th class="head1">Tanggal Lahir</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</tfoot> 
<tbody>
	<?php 
						foreach($pegawai->result() as $row){
           //echo"<pre>"; print_r($row);echo"</pre>";			
			 		?>
	<tr class="gradeA">
	<td><?php echo $row->NIB; ?></td>
	<td><?php echo $row->Nama; ?></td>
	<td><?php echo $row->Gelar; ?></td>
	<td><?php echo $row->TanggalLahir; ?></td>
  <td align="center">
  <?php
  if ($row->nibformal!=''){
    $styleFormal = 'style="display:none"';
  }else{
    $styleFormal = '';
  }
  
  if ($row->nibpesan!=''){
    $stylePesan = 'style="display:none"';
  }else{
    $stylePesan = '';
  }
  
  if ($row->nibserti!=''){
    $styleSerti = 'style="display:none"';
  }else{
    $styleSerti = '';
  }
  
  if ($row->nibformal!='' && $row->nibserti!='' && $row->nibpesan!=''){
    $styleEdit = '';
  }else{
    $styleEdit = 'style="display:none"';
  }
   
  //if($row->nibserti=='' and $row->nibpesan==''and $row->nibformal==''){?>
  <a <?php echo $styleSerti; ?> href="<?php echo base_url().'index.php/pegawai/viewTambahPegawai4/'.$row->NIB; ?>" title='Isi Sertifikasi' class="btn btn4 btn_yellow btn_link" alt="Edit"></a>
  <a <?php echo $styleFormal; ?> href="<?php echo base_url().'index.php/pegawai/viewTambahPegawai2/'.$row->NIB; ?>" title='Isi Pendidikan Formal' class="btn btn4 btn_yellow btn_search radius50" alt="Detail"></a>
  <a <?php echo $stylePesan; ?> href="<?php echo base_url().'index.php/pegawai/viewTambahPegawai3/'.$row->NIB; ?>" title='Isi Pendidikan Pesantren' class="btn btn4 btn_yellow btn_flag" alt="Edit"></a>
  <a <?php echo $styleEdit; ?> href="<?php echo base_url().'index.php/pegawai/viewEdit/'.$row->NIB; ?>" title='Edit Pegawai' class="btn btn4 btn_yellow btn_home" alt="Edit"></a>
  
  </td>
	</tr>
	 <?php
					  } 
					  ?> 
					  
	</tbody>
</table><?php } else { echo 
						 '<div class="notibar msginfo">
							<p>Data Belum Ada.</p>
						  </div>';
					}
			  		?> 
<!--contenttitle--></div>
<!--contentwrapper--> </div>
<!-- centercontent -->