<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>
<div class="container" id="background">
	<div class="row">	
		<div class="twelve columns">
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