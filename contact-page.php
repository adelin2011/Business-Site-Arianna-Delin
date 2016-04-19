<?php
/*Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div class="container" id="background">
	<div class="row">
		<div class="six columns">
			<?php if (have_posts()) :
					while (have_posts()) : the_post();?>
						<h2> <?php the_title (); ?></h2>
						<?php the_content();
					endwhile;
				endif; ?>
		</div>	
		<div class="six columns">
			<?php dynamic_sidebar('contact-widget'); ?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>