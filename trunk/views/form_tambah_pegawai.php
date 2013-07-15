<div class="centercontent">    
        <div class="pageheader">
            <h1 class="pagetitle">Tambah Pegawai</h1>
            <span class="pagedesc">The content below are loaded using inline data</span>
            
            <ul class="hornav">
                <li class="current"><a href="#default">Pegawai</a></li>
                <li><a href="#formal">Pendidikan Formal</a></li>
                <li><a href="#pesantren">Pesantren</a></li>
                <li><a href="#sertifikasi">Sertifikasi</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
        	<div id="default" class="subcontent">
            
                    <form class="stdform stdform2" method="post" action="">
                    	<p>
                        	<label>NIB</label>
                            <span class="field"><input type="text" name="nib" class="smallinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Nama Lengkap</label>
                            <span class="field"><input type="text" name="nama"  class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Nomor KTP</label>
                            <span class="field"><input type="text" disabled name="nomor_ktp" class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Alamat <small>Alamat saat ini.</small></label>
                            <span class="field"><textarea cols="80" rows="5" name="alamat" id="location2" class="longinput"></textarea></span>
                        </p>
                    
                        <p>
                        	<label>Unit Pendidikan</label>
                            <span class="field"><select name="unit">
                            	 <?php 
						foreach($pegawai->result() as $row){			
			 		?>   
                              <option value="<?php echo $row->ID?>"><?php echo $row->NamaUnit?></option>
                      <?php }?>
                                </select></span>
                        </p>
                       
                        
                        <p class="stdformbutton">
                        	  <button class="submit radius2">Tambah</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                    </form>
          </div><!-- #default -->
            
            
         <div id="formal" class="subcontent" style="display: none">
           <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Nama Universitas</label>
                            <span class="field"><input type="text" name="nama_universitas"  class="smallinput"/></span>
                        </p>
                      <p>
                        	<label>Jurusan</label>
                            <span class="field"><input type="text" name="jurusan"  class="smallinput" /></span>
                        </p> 
                     <p>
                        	<label>Fakultas</label>
                            <span class="field"><input type="text" name="fakultas"  class="smallinput" /></span>
                        </p>
                     <p>
                        	<label>Tahun Lulus</label>
                            <span class="field"><input type="text" name="tahun_lulus"  class="smallinput" /></span>
                        </p>    
                    <p>
                        	<label>Akta Mengajar</label>
                            <span class="field"><input type="text" name="akta_mengajar"  class="smallinput" /></span>
                        </p>    
                        <p>
                        	<label>Nomor Ijazah</label>
                            <span class="field"><input type="text" name="no_ijazah"  class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Pendidikan Terakhir</label>
                            <span class="field"><input type="text" name="pend_terakhir"  class="smallinput" /></span>
                        </p>    
                        <p class="stdformbutton">
                        	<button class="submit radius2">Tambah</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                    
            </form>                       
          </div><!-- #formal -->
            
          <div id="pesantren" class="subcontent" style="display: none">
             <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Nama Pesantren</label>
                            <span class="field"><input type="text" name="nama_pesantren"  class="longinput"/></span>
                        </p>
                      <p>
                        	<label>Alamat Pesantren</label>
                            <span class="field"><input type="text" name="alamat_pesantren"  class="longinput"/></span>
                        </p> 
                     <p>
                        	<label>Lama Pendidikan</label>
                            <span class="field"><input type="text" name="lama_pendidikan"  class="smallinput" /></span>
                        </p>
                      <p class="stdformbutton">
                        	<button class="submit radius2">Tambah</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                    
            </form>
                   
                    
          </div><!--#pesantren-->
         <div id="sertifikasi" class="subcontent" style="display: none">
             <form class="stdform stdform2" method="post" action="#">
                    	<p>
                        	<label>Bidang Studi</label>
                            <span class="field"><input type="text" name="bidang_studi"  class="smallinput"/></span>
                        </p>
                      <p>
                        	<label>Tanggal Sertifikasi</label>
                            <span class="field"><input type="text" name="tgl_sert"  class="smallinput"/></span>
                        </p> 
                     <p>
                        	<label>Nomor Sertifikasi</label>
                            <span class="field"><input type="text" name="nomor_sert"  class="smallinput"/></span>
                        </p>
                     <p>
                        	<label>Nomor Registrasi Guru</label>
                            <span class="field"><input type="text" name="nomor_reg"  class="smallinput"/></span>
                        </p>
                    <p>
                        	<label>Unit Sertifikasi</label>
                            <span class="field"><input type="text" name="unit_sert"  class="smallinput"/></span>
                        </p>
                      <p class="stdformbutton">
                        	<button class="submit radius2">Tambah</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                    
            </form>
                                                   
          </div>   
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->