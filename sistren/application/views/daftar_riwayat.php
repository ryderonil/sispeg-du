<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Pegawai</h1>

<span class="pagedesc">Deskripsinya Informasi Pegawai</span> 
</div>
<!--pageheader-->
<div id="contentwrapper" class="contentwrapper"><br />
<div class="contenttitle2">
<h3>Tempat Pegawai Aktif Saat Ini</h3>
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
	<th class="head0">Unit</th>
	<th class="head1">Instansi Pengangkat</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</thead> 
<tfoot> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head0">Unit</th>
	<th class="head1">Instansi Pengangkat</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</tfoot> 
<tbody>
	<?php 
						foreach($pegawai->result() as $row){			
			 		?>
	<tr class="gradeA">
	<td><?php echo $row->NIB; ?></td>
	<td><?php echo $row->Nama; ?></td>
	<td><?php echo $row->NamaUnit; ?></td>
	<td><?php echo $row->InstansiPengangkat; ?></td>
  <td align="center">
	<a href="<?php echo base_url().'index.php/pegawai/daftar_riwayat/'.$row->NIB; ?>" title='Detail' class="btn btn4 btn_yellow btn_search radius50" alt="Detail"></a>
	<a href="<?php echo base_url().'index.php/pegawai/tambah_riwayat/'.$row->NIB; ?>" title='Tambah' class="btn btn4 btn_yellow btn_flag" alt="Edit"></a>
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