<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login Page |  Sistem Informasi Kepegawaian</title>
<link rel="stylesheet" href="<?php echo base_url() ?>css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/custom/index.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url() ?>css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loginpage">

	<div class="loginbox">
	
    	<div class="loginboxinner">
        	
            <div class="logo">
            	<h1><span>Sispeg </span>Darul 'Ulum</h1>
            </div><!--logo-->
            
            <br clear="all" /><br />            
<!--?
    echo form_open('login/auth');
?-->
            <form class="stdform "id="login" action="<?php echo base_url().'index.php/login/auth/';?>" method="post">
            	
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" />
                    </div>
					<div class="logo">
					
					</div>
                </div>
                
                <button>Masuk</button>
				    
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>


</html>
