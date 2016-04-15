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
						<li> <img src="<?php echo get_template_directory_uri() .'img/drone2.jpg'; ?>" alt="drone"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/drone.jpg'; ?>" alt="drone image"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/nyc.jpg'; ?>" alt="NYC"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/website.jpg'; ?>" alt="drone"> </li>
					</ul>
				</div>		
		</div>	
		<div class="four columns">
			<?php dynamic_sidebar('photo-widget'); ?>
				<div class="unslider">
					<ul>
						<li> <img src="<?php echo get_template_directory_uri() .'img/beach.jpg'; ?>" alt="beach"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/exposure2.jpg'; ?>" alt="long exposure"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/tracks.jpg'; ?>" alt="tracks"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/overpass.jpg'; ?>" alt="overpass"> </li>
					</ul>
				</div>
		</div>
		<div class="four columns">
			<?php dynamic_sidebar('promo-widget'); ?>
				<div class="unslider">
					<ul>
						<li> <img src="<?php echo get_template_directory_uri() .'img/haulover2.jpg'; ?>" alt="haulover"></li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/greenwich.jpg'; ?>" alt="greenwich"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/aspen.jpg'; ?>" alt="aspen"> </li>
						<li> <img src="<?php echo get_template_directory_uri() .'img/audi2.jpg'; ?>" alt="audi"> </li>
					</ul>
				</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>