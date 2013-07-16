<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Pegawai</h1>

<span class="pagedesc">Deskripsinya Informasi Pegawai</span> 
</div>
<!--pageheader-->
<div id="contentwrapper" class="contentwrapper"><br />
<div class="tombol_tambah" align="right">   
<button onclick="location.href='<?php echo base_url(); ?>index.php/pegawai/viewRiwayat/'" class="stdbtn btn_orange"><< Kembali ke Daftar Pegawai</button>
</div>
<div class="contenttitle2">
<h3>Riwayat Pegawai</h3>
</div>
<!--contenttitle-->

                    <!--<div class="notibar msgsuccess">
                        <a class="close"></a>
                        <p>This is a success message.</p>
                    </div><!-- notification msgsuccess -->
<?php if($pegawai->num_rows() > 0){?>
<table cellpadding="0" cellspacing="0" border="0" class="stdtable">
<colgroup><col class="con0" /><col class="con1" /><col class="con0" /><col class="con1" /><col class="con0" /></colgroup> 
<thead> 
	<tr>
	<th class="head0">Tahun Masuk</th>
	<th class="head0">Tahun Keluar</th>
	<th class="head0">Unit</th>
	<th class="head1">Keterangan</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</thead>
<tbody>
	<?php 
						foreach($pegawai->result() as $row){			
			 		?>
	<tr class="gradeA">
	<td><?php echo $row->TahunMasuk; ?></td>
	<td><?php echo $row->TahunKeluar; ?></td>
	<td><?php echo $row->NamaUnit; ?></td>
	<td><?php echo $row->Keterangan; ?></td>
  <td align="center">
	<a href="<?php echo base_url().'index.php/pegawai/edit_riwayat_pegawai/'.$row->NIB; ?>" title='Edit' class="btn btn4 btn_yellow btn_flag" alt="Edit"></a>
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