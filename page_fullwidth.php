<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">	
		<div class="twelve columns">
			<img src="<?php echo get_template_directory_uri() .'img/beach2.jpg'; ?>" alt="beach2">
			<?php if (have_posts()) :
					while (have_posts()) : the_post();?>
						<h2> <?php the_title (); ?></h2>
						<?php the_content();
					endwhile;
				endif; ?>
		</div>	
	</div>	
</div> 
<?php get_footer(); ?>