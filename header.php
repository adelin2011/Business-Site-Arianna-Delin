<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('Austin Sarmiento');?> </title>
	<link rel= "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<?php wp_head(); ?>
</head>
<body>
<div class="header-wrapper">
	<div class="container">
		<header class="row header">
			<div class="three columns"> 
				<figure class="site-logo">
					<a href="http://aridelin.com/business/"><img src="<?php echo get_template_directory_uri() . '/img/Logo2.png'; ?>" width="100%" height="auto"> </a>	
				</figure>
			</div> 
				<div class="nine columns">
					<?php wp_nav_menu(array(
	            		'sort_column' => 'menu_order', 
	            		'container_class' => 'austins-menu-header'
	            	));?>
				</div>	
		</header>
	</div>
</div>	

<div class="container">
<!--END HEADER-->


















