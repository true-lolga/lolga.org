<?php
/**
 * The template for displaying projects archive
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			    $services = get_field('services');
                $image_1 = get_field('image_1');
                $size = "full"; ?>

            <article class="project">
                <aside class="project-arch-sidebar">
				    <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></h3>
                    <h5><?php echo $services; ?></h5>
                    <?php the_excerpt(); ?>

				    <p><strong><a href="<?php the_permalink(); ?>"><?php _e("[:en]View project[:ru]Посмотреть проект[:]"); ?></a></strong></p>

				</aside>


			    <div class="project-images">
			        <a href="<?php the_permalink(); ?>">
                    <?php if($image_1) { ?>
                        <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                    <?php } ?>
                    </a>
                </div>

            </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>