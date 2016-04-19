<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<link rel= "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<?php wp_head(); ?>
</head>
<body>
<div class="header-wrapper">
	<div class="container">
		<header class="row header">
			<div class="three columns"> 
				<figure class="site-logo">
					<a href="http://aridelin.com/business/"><img src="<?php echo get_template_directory_uri() . '/img/logo2.png'; ?>" width="100%" height="auto"> </a>	
				</figure>
			</div> 
				<div class="nine columns">
					<?php wp_nav_menu(array(
	            		'sort_column' => 'menu_order', 
	            		'container_class' => 'menu'
	            	));?>
				</div>	
		</header>
	</div>
</div>	

<div class="container">
<!--END HEADER-->


















