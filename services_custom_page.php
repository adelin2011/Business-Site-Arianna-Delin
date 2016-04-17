<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
<div class="container" id="background">
	<div class="row"> <!--Widget Area-->		
		<div class="four columns">
			<!--<p>	
			<a rel="example_group" href="img/drone2.jpg"><img alt="" src="img/drone2.jpg" /></a>

				<a rel="example_group" href="img/nyc.jpg" title=""><img alt="" src="img/nyc.jpg" /></a>

				<a rel="example_group" href="img/website.jpg" title=""><img alt="" src="img/website.jpg" /></a>
				
				<a rel="example_group" href="img/drone.jpg" title=""><img class="last" alt="" src="img/drone.jpg" /></a>
			</p>	-->
			<?php dynamic_sidebar('aerial-widget'); ?>
		</div>	
		<div class="four columns">
			<?php dynamic_sidebar('photo-widget'); ?>
		</div>
		<div class="four columns">
			<?php dynamic_sidebar('promo-widget'); ?>
		</div>
	</div>	
</div>
<?php get_footer(); ?>