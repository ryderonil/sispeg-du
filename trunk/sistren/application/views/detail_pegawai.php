<div class="centercontent">    
        <div class="pageheader">
            <h1 class="pagetitle">Detail Pegawai</h1>
            <span class="pagedesc">The content below are loaded using inline data</span>
            
            <ul class="hornav">
                <li class="current"><a href="#default">Pegawai</a></li>
                <li><a href="#formal">Pendidikan Formal</a></li>
                <li><a href="#pesantren">Pesantren</a></li>
                <li><a href="#sertifikasi">Sertifikasi</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
         <?php 
						foreach($pegawai->result() as $row){			
					//	print_r($row);exit();
			 		?>
        	<div id="default" class="subcontent">
           
                    <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>NIB</label>
                            <span class="field"><input type="text" name="nib" disabled class="smallinput" value="<?php echo $row->NIB; ?>"/></span>
                        </p>
                        
                        <p>
                        	<label>Nama Lengkap</label>
                            <span class="field"><input type="text" name="nama" disabled  class="longinput" value="<?php echo $row->Nama; ?>"/></span>
                        </p>
                        <p>
                        	<label>Telepon</label>
                            <span class="field"><input type="text" name="telepon" disabled  class="longinput" value="<?php echo $row->Telepon; ?>"/></span>
                        </p>
                        <p>
                        	<label>NPWP</label>
                            <span class="field"><input type="text" name="npwp" disabled  class="longinput" value="<?php echo $row->Npwp; ?>"/></span>
                        </p>
                        <p>
                        	<label>Nomor KTP</label>
                            <span class="field"><input type="text" name="no_ktp" disabled  class="longinput" value="<?php echo $row->NoKtp; ?>"/></span>
                        </p>  
                        <p>
                        	<label>Alamat</label>
                            <span class="field"><input type="text" name="alamat" disabled  class="longinput" value="<?php echo $row->AlamatRumah; ?>"/></span>
                        </p>                        
                        <p>
                        	<label>Unit Pendidikan</label>
                            <span class="field"><select name="unit">
                            	<option value="<?php echo $row->NamaUnit; ?>"><?php echo $row->NamaUnit; ?></option>
                                </select></span>
                        </p>
                        <p>
                        	<label>Tempat,Tanggal Lahir</label>
                            <span class="field"><input type="text" name="ttl" disabled  class="smallinput" value="<?php echo $row->TempatLahir?>, <?php echo $row->TanggalLahir?>"/></span>
                       </p>
                       
                        </form>
                    
          </div><!-- #default -->
            
            
          <div id="formal" class="subcontent" style="display: none">
           <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Nama Universitas</label>
                            <span class="field"><input type="text" name="nama_universitas" disabled class="smallinput" value="<?php echo $row->NamaLembagaPendidikan; ?>"/></span>
                        </p>
                      <p>
                        	<label>Jurusan</label>
                            <span class="field"><input type="text" name="jurusan" disabled class="smallinput" value="<?php echo $row->Jurusan; ?>"/></span>
                        </p> 
                     <p>
                        	<label>Fakultas</label>
                            <span class="field"><input type="text" name="fakultas" disabled class="smallinput" value="<?php echo $row->Fakultas; ?>"/></span>
                        </p>
                     <p>
                        	<label>Tahun Lulus</label>
                            <span class="field"><input type="text" name="tahun_lulus" disabled class="smallinput" value="<?php echo $row->TanggalLulus; ?>"/></span>
                        </p>    
                    <p>
                        	<label>Akta Mengajar</label>
                            <span class="field"><input type="text" name="akta_mengajar" disabled class="smallinput" value="<?php echo $row->AktaMengajar; ?>"/></span>
                        </p>    
                        <p>
                        	<label>Nomor Ijazah</label>
                            <span class="field"><input type="text" name="no_ijazah" disabled class="smallinput" value="<?php echo $row->NoIjasah;?>"/></span>
                        </p>
                        <p>
                        	<label>Pendidikan Terakhir</label>
                            <span class="field"><input type="text" name="pend_terakhir" disabled class="smallinput" value="<?php echo $row->PendidikanTerakhir;?>"/></span>
                        </p>    
                    
            </form>                       
          </div><!-- #formal -->
            
          <div id="pesantren" class="subcontent" style="display: none">
             <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Nama Pesantren</label>
                            <span class="field"><input type="text" name="nama_pesantren" disabled class="longinput" value="<?php echo $row->NamaPesantren; ?>"/></span>
                        </p>
                      <p>
                        	<label>Alamat Pesantren</label>
                            <span class="field"><input type="text" name="alamat_pesantren" disabled class="longinput" value="<?php echo $row->AlamatPesantren; ?>"/></span>
                        </p> 
                     <p>
                        	<label>Lama Pendidikan</label>
                            <span class="field"><input type="text" name="lama_pendidikan" disabled class="smallinput" value="<?php echo $row->LamaPendidikan; ?>  tahun"/></span>
                        </p>
                      
                    
            </form>
                   
                    
          </div><!--#pesantren-->
         <div id="sertifikasi" class="subcontent" style="display: none">
             <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Bidang Studi</label>
                            <span class="field"><input type="text" name="bidang_studi" disabled class="smallinput" value="<?php echo $row->BidangStudi; ?>"/></span>
                        </p>
                      <p>
                        	<label>Tanggal Sertifikasi</label>
                            <span class="field"><input type="text" name="tgl_sert" disabled class="smallinput" value="<?php echo $row->TanggalSertifikasi; ?>"/></span>
                        </p> 
                     <p>
                        	<label>Nomor Sertifikasi</label>
                            <span class="field"><input type="text" name="nomor_sert" disabled class="smallinput" value="<?php echo $row->NoSertifikasi; ?>"/></span>
                        </p>
                     <p>
                        	<label>Nomor Registrasi Guru</label>
                            <span class="field"><input type="text" name="nomor_reg" disabled class="smallinput" value="<?php echo $row->NoRegistrasiGuru; ?> "/></span>
                        </p>
                    <p>
                        	<label>Unit Sertifikasi</label>
                            <span class="field"><input type="text" name="unit_sert" disabled class="smallinput" value="<?php echo $row->UnitTempatSertifikasi; ?>"/></span>
                        </p>
                      
                    
            </form>
                                                   
          </div>   
        <?php }?>
        </div><!--contentwrapper-->

	</div><!-- centercontent -->