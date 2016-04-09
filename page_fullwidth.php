<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

	<div class="row">	
		<div class="twelve columns">
			<img src="Img/haulover pic.JPG" id="cover_image" alt="cover_image">
			<?php if (have_posts()) :
					while (have_posts()) : the_post();?>
						<h2> <?php the_title (); ?></h2>
						<?php the_content();
					endwhile;
				endif; ?>
		</div>	
	</div>	

<?php get_footer(); ?>