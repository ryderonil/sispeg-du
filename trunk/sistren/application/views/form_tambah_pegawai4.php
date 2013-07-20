<div class="centercontent">    
        <div class="pageheader">
            <h1 class="pagetitle">Tambah Pegawai</h1>
            <span class="pagedesc">The content below are loaded using inline data</span>
            
            <ul class="hornav">
                <li><a href="#default">Pegawai</a></li>
                <li><a href="#formal">Pendidikan Formal</a></li>
                <li><a href="#pesantren">Pesantren</a></li>
                <li class="current"><a href="#sertifikasi">Sertifikasi</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
        	<div id="default" class="subcontent"  style="display: none">
            
                    <form class="stdform stdform2" method="post" action="<?php echo base_url() ?>index.php/pegawai/tambahPegawai">
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
                            <span class="field"><input type="text" name="nomor_ktp" class="longinput" /></span>
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
                            <p>
                        	<label>Jenis Pegawai</label>
                            <span class="field">
                            <select name="jenis_pegawai" id="selection">
                            	<option value="">Pilih Jenis Pegawai</option>
                                <option value="3">Pimpinan Pondok</option>
                                <option value="4">Karyawan</option>
                                <option value="5">Guru</option>
                            </select>
                            </span>
                        </p>
                       <p>
                        	<label>Gelar</label>
                            <span class="field"><input type="text" name="gelar" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Tempat Lahir</label>
                            <span class="field"><input type="text" name="tempat_lahir" class="smallinput" /></span>
                        </p>
                        <p>
                        <label for="date">Tanggal Lahir</label>
                        <span class="field"><input type="text" id="datepickfrom" name="tanggal_lahir"/></span>
                        </p>
                        
                        <p>
                        	<label>Jenis Kelamin</label>
                            <span class="field">
                            	<input type="radio" name="jenis_kelamin" value="Perempuan"/> Perempuan &nbsp; &nbsp;
                            	<input type="radio" name="jenis_kelamin"  value="Laki-laki"/> Laki-laki &nbsp; &nbsp;
                                </span>
                        </p>
                        <p>
                        	<label>Status Perkawinan</label>
                            <span class="field">
                            	<input type="radio" name="status_kawin" value="Kawin"/> Kawin &nbsp; &nbsp;
                            	<input type="radio" name="status_kawin"  value="Belum Kawin"/> Belum Kawin &nbsp; &nbsp;
                              <input type="radio" name="status_kawin" value="Janda"/> Janda &nbsp; &nbsp;
                            	<input type="radio" name="status_kawin"  value="Duda"/> Duda &nbsp; &nbsp;
                                </span>
                        </p>
                        <p>
                        	<label>Nama Pasangan</label>
                            <span class="field"><input type="text" name="nama_pasangan" class="longinput" /></span>
                        </p>
                        <p>
                        	<label>Jumlah Anak</label>
                            <span class="field"><input type="text" name="jml_anak" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Golongan Darah</label>
                            <span class="field">
                            	<input type="radio" name="gol_darah" value="A"/> A &nbsp; &nbsp;
                            	<input type="radio" name="gol_darah"  value="B"/> B &nbsp; &nbsp;
                              <input type="radio" name="gol_darah" value="O"/> O &nbsp; &nbsp;
                            	<input type="radio" name="gol_darah"  value="AB"/> AB &nbsp; &nbsp;
                                </span>
                        </p>
                        <p>
                        	<label>Nomor Telepon</label>
                            <span class="field"><input type="text" name="telepon" class="longinput" /></span>
                        </p>
                        <p>
                        	<label>Email</label>
                            <span class="field"><input type="text" name="email" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Nomor Karpeg</label>
                            <span class="field"><input type="text" name="no_karpeg" class="longinput" /></span>
                        </p>
                        <p>
                        	<label>Nomor Taspen</label>
                            <span class="field"><input type="text" name="no_taspen" class="longinput" /></span>
                        </p>
                        <p>
                        	<label>NPWP</label>
                            <span class="field"><input type="text" name="npwp" class="longinput" /></span>
                        </p>
                        <p>
                        	<label>NUPTK</label>
                            <span class="field"><input type="text" name="nuptk" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>NIP</label>
                            <span class="field"><input type="text" name="nip" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Kode Pos</label>
                            <span class="field"><input type="text" name="kodepos" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Nama Ayah</label>
                            <span class="field"><input type="text" name="ayah" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Nama Ibu</label>
                            <span class="field"><input type="text" name="ibu" class="smallinput" /></span>
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
                        	<label>Pendidikan Terakhir</label>
                            <span class="field"><input type="text" name="pend_terakhir"  class="smallinput" />
                     </span>
                        </p>   
                      <p>
                        	<label>Tanggal Ijazah</label>
                            <span class="field"><input type="text" name="tanggal_ijazah"  class="smallinput" /></span>
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
                        	<label>Akta Mengajar</label>
                            <span class="field"><input type="text" name="akta_mengajar"  class="smallinput" /></span>
                        </p>    
                         <p>
                        	<label>Jenis Lembaga</label>
                            <span class="field">
                            <select name="jenis_lembaga" id="selection">
                            	<option value="">Pilih Jenis Lembaga</option>
                                <option value="PTAI">PTAI</option>
                                <option value="PTU">PTU</option>
                                <option value="Sekolah">Sekolah</option>
                               <option value="Madrasah">Madrasah</option>
                            </select>
                            </span>
                        </p>
                        <p>
                        	<label>Kategori Lembaga</label>
                            <span class="field">
                            <select name="kat_lembaga" id="selection">
                            	<option value="">Pilih Kategori Lembaga</option>
                                <option value="Institut">Institut</option>
                                <option value="Universitas">Universitas</option>
                                <option value="Sekolah Tinggi">Sekolah Tinggi</option>
                               </select>
                            </span>
                        </p>
                        <p>
                        	<label>Status Perguruan Tinggi</label>
                            <span class="field">
                            	<input type="radio" name="stat_per" value="Negeri"/> Negeri &nbsp; &nbsp;
                            	<input type="radio" name="stat_per"  value="Swasta"/> Swasta &nbsp; &nbsp;
                                </span>
                        </p>
                        <p>
                        	<label>Nomor Ijazah</label>
                            <span class="field"><input type="text" name="no_ijazah"  class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>Nama Lembaga Pendidikan</label>
                            <span class="field"><input type="text" name="nama_lem" class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Alamat Lembaga Pendidikan <small>Alamat saat ini.</small></label>
                            <span class="field"><textarea cols="80" rows="5" name="alamat_lem" id="location2" class="longinput"></textarea></span>
                        </p>
                        <p>
                        	<label>Nama Pimpinan</label>
                            <span class="field"><input type="text" name="nama_pim" class="smallinput" /></span>
                        </p>
                        <p>
                        	<label>IPK</label>
                            <span class="field"><input type="text" name="ipk" class="smallinput" /></span>
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
         <div id="sertifikasi" class="subcontent">
            <?php foreach($pegawai->result() as $row){			
			 		?>   
             <form class="stdform stdform2" method="post" action="<?php echo base_url() ?>index.php/pegawai/tambahSertifikasi">
                    	<p>
                        	<label>Bidang Studi</label>
                            <span class="field"><input type="text" name="bidang_studi"  class="longinput"/>
                            <input type="hidden" name="nib_pegawai"  value="<?php echo $row->NIB?>"/></span>
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
                    
            </form><?php }?>
                                                   
          </div>   
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->