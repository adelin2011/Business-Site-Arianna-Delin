<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row"> <!--Widget Area-->		
		<div class="four columns">
			<?php dynamic_sidebar('aerial-widget'); ?>
				<div class="unslider">
					<ul>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/drone2.jpg'; ?>" alt="drone"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/drone.jpg'; ?>" alt="drone image"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/nyc.jpg'; ?>" alt="NYC"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/website.jpg'; ?>" alt="drone"> </li>
					</ul>
				</div>		
		</div>	
		<div class="four columns">
			<?php dynamic_sidebar('photo-widget'); ?>
				<div class="unslider">
					<ul>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/beach.jpg'; ?>" alt="beach"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/exposure2.jpg'; ?>" alt="long exposure"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/tracks.jpg'; ?>" alt="tracks"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/overpass.jpg'; ?>" alt="overpass"> </li>
					</ul>
				</div>
		</div>
		<div class="four columns">
			<?php dynamic_sidebar('promo-widget'); ?>
				<div class="unslider">
					<ul>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/haulover2.jpg'; ?>" alt="haulover"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/greenwich.jpg'; ?>" alt="greenwich"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/aspen.jpg'; ?>" alt="aspen"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'Img/audi2.jpg'; ?>" alt="audi"> </li>
					</ul>
				</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>