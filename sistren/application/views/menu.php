<div class="vernav2 iconmenu" style="top: 115px;">
		<?php 
			$menu_terpilih = $menu;
			$sub_menu_terpilih = $sub_menu;
			$role_jabatan = $this->session->userdata('id_jabatan');
		?>
    	<ul>					
			<li <?php if($menu_terpilih == 'home') { echo 'class="current"'; } ?>><a href="<?php echo base_url()?>index.php/home" >Home</a></li>
        	<li <?php if($menu_terpilih == 'pegawai') { echo 'class="current"'; } ?>><a href="#agenda" class="arrow">Pegawai</a>
            	<span class="arrow"></span>
            	<ul id="agenda">
               		<li <?php if($sub_menu_terpilih == 'daftar_pegawai') { echo 'class="current"'; } ?>><a href="<?php echo base_url() ?>index.php/pegawai">Daftar Pegawai</a></li>
                    <?php 		
						if($role_jabatan == '2' || $role_jabatan == '4'){
					?>
					<li <?php if($sub_menu_terpilih == 'tambah_pegawai') { echo 'class="current"'; } ?>><a href="<?php echo base_url() ?>index.php/pegawai/viewTambahPegawai">Tambah Pegawai</a></li>
                    <?php
						}
					?>
					<li <?php if($sub_menu_terpilih == 'daftar_riwayat') { echo 'class="current"'; } ?>><a href="<?php echo base_url() ?>index.php/pegawai/viewRiwayat">Riwayat Kepegawaian</a></li>
                </ul>
            </li>
            <li <?php if($menu_terpilih == 'user') { echo 'class="current"'; } ?>><a href="#idinventaris" class="inventaris">Data User</a>
            	<span class="arrow"></span>
            	<ul id="idinventaris">
               		<li <?php if($sub_menu_terpilih == 'daftar_user') { echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/pengelolaan_inventaris/">Daftar User</a></li>
                    <?php 		
						if($role_jabatan == '2' || $role_jabatan == '4'){
					?>
					<li <?php if($sub_menu_terpilih == 'tambah_user') { echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/pengelolaan_inventaris/add_process">Tambah User</a></li>
					<?php
						}
					?>
                </ul>
            </li>
			<li <?php if($menu_terpilih == 'laporan') { echo 'class="current"'; } ?>><a href="#idlaporan" class="arrow">Laporan</a>
            	<span class="arrow"></span>
            	<ul id="idlaporan">
               		<li <?php if($sub_menu_terpilih == 'laporan_guru') { echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/pengelolaan_inventaris/">Laporan Dok</a></li>
                    <li <?php if($sub_menu_terpilih == 'laporan_pegawai') { echo 'class="current"'; } ?>><a href="<?php echo base_url(); ?>index.php/laporan">Laporan Chart</a></li>
                </ul>
            </li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->