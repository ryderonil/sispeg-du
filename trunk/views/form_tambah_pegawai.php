<div class="centercontent">    
        <div class="pageheader">
            <h1 class="pagetitle">Tambah Pegawai</h1>
            <span class="pagedesc">The content below are loaded using inline data</span>
            
            <ul class="hornav">
                <li class="current"><a href="#default">Pegawai</a></li>
                <li><a href="#tabbed">Pendidikan Formal</a></li>
                <li><a href="#vertical">Pesantren</a></li>
                <li><a href="#sertifikasi">Sertifikasi</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
        	<div id="default" class="subcontent">
            
                    <form class="stdform stdform2" method="post" action="#">
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
                            <span class="field"><select name="selection" id="selection2">
                            	<option value="">Choose One</option>
                                <option value="1">Selection One</option>
                                <option value="2">Selection Two</option>
                                <option value="3">Selection Three</option>
                                <option value="4">Selection Four</option>
                            </select></span>
                        </p>
                        
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Tambah</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                    </form>
          </div><!-- #default -->
            
            
          <div id="tabbed" class="subcontent" style="display: none">
            
                                                   
          </div><!-- #tabbed -->
            
          <div id="vertical" class="subcontent" style="display: none">
            
                    <!-- START OF VERTICAL WIZARD -->
                    
                    <!-- END OF VERTICAL WIZARD -->
                    
          </div><!--#vertical-->
         <div id="sertifikasi" class="subcontent" style="display: none">
            
                                                   
          </div>   
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->