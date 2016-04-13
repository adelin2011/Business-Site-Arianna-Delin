<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('Austin Sarmiento');?> </title>
	<link rel= "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

<?php wp_head(); ?>
</head>
<body>
<div class="header-wrapper">
	<div class="container">
		<header class="row">
			<div class="three columns"> 
				<figure class="site-logo">
					<a href="http://aridelin.com/WIE/"><img src="<?php echo get_template_directory_uri() . '/Img/Logo2.png'; ?>" width="100%" height="auto"> </a>	
				</figure>
			</div> 
				<div class="nine columns">
					<nav class="navigation">
						<ul>
							<li class="current_page"> <a href="index.html"> HOME </a> </li>
							<li> <a href="about.html"> ABOUT </a> </li>
							<li> <a href="services.html"> SERVICES </a> </li>
							<li> <a href="blog.html"> BLOG </a> </li>
							<li> <a href="contact.html"> CONTACT </a> </li>
						</ul>
					</nav>
				</div>	
		</header>
		
		<!--Wordpress menu
		<div class="row">
	    	<div class="five columns">
	        	<?php wp_nav_menu(array(
	            	'sort_column' => 'menu_order', 
	            	'container_class' => 'navigation'
	            	));?>
	    	</div>
		</div>
		-->
		
	</div>
</div>	

<div class="container">
<!--END HEADER-->


















