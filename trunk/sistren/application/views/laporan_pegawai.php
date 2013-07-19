<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Laporan </h1>

<span class="pagedesc">Laporan Pegawai</span> 
</div>

<div class="contentwrapper"><br />
	<div class="contenttitle2">
	<h3>Opsi</h3>
	</div>

<?php echo form_open('laporan');?>
	<label>Unit Pendidikan :</label>
	<span class="field"><select name="id_up" >
		<option value="0">Semua</option>
	<?php foreach($daftar_unit_pendidikan as $up){	?>   
		<option value="<?php echo $up->ID?>"><?php echo $up->NamaUnit?></option>
	<?php }?>
	</select></span>
   	<button class="submit radius2">Tampilkan</button>
</form>

	
</div>

<div id="contentwrapper" class="contentwrapper"><br />


<div class="contenttitle2">
<h3>Daftar Pegawai</h3>
</div>


<!--contenttitle-->

                    <!--<div class="notibar msgsuccess">
                        <a class="close"></a>
                        <p>This is a success message.</p>
                    </div><!-- notification msgsuccess -->


<div id="myChart" style="width:100%; height:400px;"></div>

<script type="text/javascript">
	jQuery(document).ready(function(){

    jQuery('#myChart').highcharts({
        chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Pegawai Pondok Pesantren Darul Ulum, 2013'
            },
            tooltip: {
            	
        	    formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage.toFixed(2) +' %';
                        }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage.toFixed(2) +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [

                <?php 
                	$persen_pegawai_byUP = $persen_pegawai_byUP->result();
                	$count = count($persen_pegawai_byUP);
                	$i=1;
                	foreach($persen_pegawai_byUP as $up){ 
                		echo '["'.$up->NamaUnit.'",'.$up->jumlah.']';
                		$i++;
                		if($i<$count)
                			echo ',';
                	} 
                ?>
                ],
                point:{
                	events:{
                  		click: function (event) {
                      		alert(this.name);
                  		}
              		}
                }

            }]
        });

	});
</script>



<?php if($pegawai->num_rows() > 0){?>
<table class="stdtable" id="dyntable" border="0" cellpadding="0" cellspacing="0">
<colgroup><col class="con0" /><col class="con1" /><col class="con0" /><col class="con1" /><col class="con0" /></colgroup> 
<thead> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head0">Jurusan</th>
	<th class="head1">Tanggal Lahir</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</thead> 
<tfoot> 
	<tr>
	<th class="head0">NIB</th>
	<th class="head0">Nama Pegawai</th>
	<th class="head0">Jurusan</th>
	<th class="head1">Tanggal Lahir</th>
  <th align="center" class="head1">Pilihan</th>
	</tr>
</tfoot> 
<tbody>
	<?php foreach($pegawai->result() as $row){	?>
	<tr class="gradeA">
	<td><?php echo $row->NIB; ?></td>
	<td><?php echo $row->Nama; ?></td>
	<td><?php echo $row->Jurusan; ?></td>
	<td><?php echo $row->TanggalLahir; ?></td>
  <td align="center">
	<a href="<?php echo base_url().'index.php/pegawai/detail_pegawai/'.$row->NIB; ?>" title='Detail' class="btn btn4 btn_yellow btn_search radius50" alt="Detail"></a>
	<a href="<?php echo base_url().'index.php/pegawai/edit_pegawai/'.$row->NIB; ?>" title='Edit' class="btn btn4 btn_yellow btn_flag" alt="Edit"></a>
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