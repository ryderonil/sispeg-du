<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Laporan </h1>

<span class="pagedesc">Laporan Cetak</span> 
</div>

<div class="contentwrapper"><br />
	<div class="contenttitle2">
	<h3>Opsi</h3>
	</div>

<form>
    <label>Unit Pendidikan :</label>
	

    <select id="id_up" >
		<option value="0">Semua</option>
	<?php foreach($daftar_unit_pendidikan as $up){	?>   
		<option value="<?php echo $up->NamaUnit?>"><?php echo $up->NamaUnit?></option>
	<?php }?>
	</select>

</form>
	
</div>

<div id="contentwrapper" class="contentwrapper"><br />


<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#id_up").change(function(){
        	var tabelPegawai = jQuery('#dyntable').dataTable();
    	    tabelPegawai.fnFilter( jQuery(this).val(), 4 );
    	    jQuery("#title_tabel").text("Daftar Pegawai "+jQuery(this).val());
        });
    });
</script>

<div class="contenttitle2">
<h3 id="title_tabel">Daftar Pegawai</h3>
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
	<th class="head0">Jurusan</th>
	<th class="head1">Tanggal Lahir</th>
	<th class="head1">Unit Kerja</th>
  	</tr>
</thead> 
<tfoot> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head0">Jurusan</th>
	<th class="head1">Tanggal Lahir</th>
	<th class="head1">Unit Kerja</th>
  	</tr>
</tfoot> 
<tbody>
	<?php foreach($pegawai->result() as $row){
	//var_dump($row);echo '<br>';	?>
	<tr class="gradeA">
	<td><?php echo $row->NIB; ?></td>
	<td><?php echo $row->Nama; ?></td>
	<td><?php echo $row->Jurusan; ?></td>
	<td><?php echo $row->TanggalLahir; ?></td>
	<td><?php echo $row->NamaUnit; ?></td>
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