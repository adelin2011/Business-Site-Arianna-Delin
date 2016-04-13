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