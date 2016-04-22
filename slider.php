<?php
/*
Template Name: Slider
*/
?>
<?php get_header(); ?>
	<div class="container" id="background">
		<div class="row">	
			<div class="twelve columns">
				<div class="my-slider">
				    <ul>
				<?php
				    $args = array( 'post_type' => 'Slider' );
				    $slides = new WP_Query( $args );
				    if( $slides->have_posts() ) {
				      while( $slides->have_posts() ) {
				        $slides->the_post();
				        /*--- Build Thumbnail URL ---*/
				        $thumb_id = get_post_thumbnail_id();
				        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				        $thumb_url = $thumb_url_array[0];
				        ?>
				            <li style="background-image: url('<?php echo $thumb_url ?>');" class="slide-container">
				                <div class="slides-message">
				                    <h1><?php the_title() ?></h1>
				                    <p><?php the_excerpt() ?></p>
				                </div>
				            </li>
				        <?php
				      }
				    }
				    else {
				      echo 'No Slides';
				    }
				?>
				    </ul>
				</div>
 			</div> 	
 		</div> 	
	</div>
			
<?php get_footer(); ?>


