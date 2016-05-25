<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			   $image_bio = get_field('image_bio');
			    $size = "full";
			     ?>
			     
			     <article class="bio">
			        <aside class="bio-sidebar">
				        <?php the_content(); ?>
				    </aside>

				    <div class="bio-images">
                        <?php if($image_bio) { ?>
                            <?php echo wp_get_attachment_image( $image_bio, $size ); ?>
                        <?php } ?>
                    </div>

				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>