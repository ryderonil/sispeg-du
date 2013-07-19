<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Sistem Informasi Kepegawaian PPDU</title>
<link rel="stylesheet" href="<?php echo base_url() ?>css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/charCount.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/ui.spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/forms.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/elements.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/tables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.smartWizard-2.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>js/highcharts.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		// Smart Wizard 	
  		jQuery('#wizard').smartWizard({onFinish: onFinishCallback});
      	jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});
		jQuery('#wizard3').smartWizard({onFinish: onFinishCallback});
		jQuery('#wizard4').smartWizard({onFinish: onFinishCallback});
		
		function onFinishCallback(){
			alert('Finish Clicked');
		} 
		
		jQuery(".inline").colorbox({inline:true, width: '60%', height: '500px'});
		
		jQuery('select, input:checkbox').uniform();
	});
</script>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>css/style.ie9.css"/>
<![endif]--><!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>css/style.ie8.css"/>
<![endif]--><!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>


<body class="withvernav">

<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">SISTEM INFORMASI<span> KEPEGAWAIAN
			<?php if($this->session->userdata('id_organisasi') == '2'){ ?> - Darul 'Ulum <?php } else {?> - Darul 'Ulum <?php } ?></span></h1>
            <!--<span class="slogan"><strong>News</strong></span>-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	
            <div class="userinfo">
            	<img src="<?php echo base_url() ?>images/thumbs/avatar.png" alt="" />
                <span><?php $session = $this->session->userdata('nama'); 
							echo $session;?></span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href="#"><img src="<?php echo base_url() ?>images/thumbs/avatarbig.png" alt="" /></a>                    
                </div><!--avatar-->
				<div class="userdata">
                	<h4></h4>
                    <span class="email"><?php echo $this->session->userdata('nama'); ?> - <?php echo $this->session->userdata('nama_jabatan'); ?></span>
                    <ul>
                    	<li><a href="<?php echo base_url()?>index.php/anggota/ubah_profil/"?>Ubah Profil</a></li>
						<li><a href="<?php echo base_url()?>index.php/anggota/ubah_pass">Ubah Password</a></li>
                        <li><a href="<?php echo base_url() ?>/index.php/login/logout">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    </div><!--header-->
	<?php $this->load->view('menu'); ?>
    <!--leftmenu-->
    <?php 
    echo $konten;
	?>   
    
</div><!--bodywrapper-->

</body></html>