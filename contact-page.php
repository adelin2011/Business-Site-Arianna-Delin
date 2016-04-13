<?php
/*Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="eight columns">
			<?php if (have_posts()) :
					while (have_posts()) : the_post();?>
						<h2> <?php the_title (); ?></h2>
						<h3> Contact me for more information </h3>
						<?php the_content();
					endwhile;
				endif; ?>
		</div>	
		<div class="four columns">
			<img src="<?php echo get_template_directory_uri() .'Img/insta.png'; ?>" alt="instagram">
			<?php dynamic_sidebar('contact-widget'); ?>
		</div>	
	</div>	

</div>
<?php get_footer(); ?>