<div class="centercontent tables">
<div class="pageheader notab">
<h1 class="pagetitle">Modul Laporan </h1>

<span class="pagedesc">Laporan Grafik</span> 
</div>

<div id="contentwrapper" class="contentwrapper"><br />


<div class="pageheader">
            <h1 class="pagetitle">Daftar Pegawai</h1>
            <span class="pagedesc">The content below are loaded using inline data</span>
            
            <ul class="hornav">
                <li class="current"><a href="#default">Per Unit</a></li>
                <li><a href="#formal">Per Jenis Dinas</a></li>
            </ul>
</div><!--pageheader-->


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
                      		//alert(this.name);

                      		var tabelPegawai = jQuery('#dyntable').dataTable();


                      		tabelPegawai.fnFilter( this.name, 4 );

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