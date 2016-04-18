<?php get_header(); ?>
<div class="container" id="background">
	<div class="row">
		<div class="ten columns">
			<?php 
			if (have_posts()){
				while (have_posts()){
					the_post();?>
					<h3> <?php the_title (); ?></h3>
					<?php the_date('Y-m-d', '<h2>', '</h2>'); ?>
					<?php if (has_post_thumbnail ()) {
						?> 					
						<?php the_post_thumbnail('large'); 
					} ?>
					<?php the_content();
				}//end while
			}//end if
			?>
		</div>	
		<div class="two columns">
			&nbsp;
		</div>
	</div>	
</div>
<?php get_footer(); ?>