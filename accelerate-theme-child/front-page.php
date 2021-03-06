<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>



<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/projects"><?php _e("[:en]My projects[:ru]Мои проекты[:]"); ?></a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->



<section class="featured-work">
    <div class="site-content">
        <h4><?php _e("[:en]Featured work[:ru]Свежие проекты[:]"); ?></h4>

        <ul>
            <?php query_posts('posts_per_page=3&post_type=projects'); ?>
            <?php while ( have_posts() ) : the_post(); 
                $image_1 = get_field("image_1");
                $size = "featured-size"
             ?>
            <li class="individual-featured-work">
                <figure>
                    <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                </figure>

                <h5><a href="<?php the_permalink(); ?>" class="read-more-link"><?php the_title(); ?><span>&rsaquo;</span></a></h5>
			</li>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>

    </div>
</section>


<section class="recent-posts">
	<div class="site-content"> 
        <ul class="social-feeds">
            <li>
                <div class="blog-post">
                    <h4><?php _e("[:en]From the Blog[:ru]Блог[:]"); ?></h4>
                    <?php query_posts('posts_per_page=1'); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
				    <?php the_excerpt(); ?>
				    <a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e("[:en]Read more[:ru]Читать дальше[:]"); ?> <span>&rsaquo;</span></a>
			        <?php endwhile; // end of the loop. ?>
			        <?php wp_reset_query(); // resets the altered query back to the original ?>
		        </div>
            </li>

            <li>
                <div class="feed">
                    <?php echo wdi_feed(array('id'=>'1')); ?>
                </div>
            </li>
        </ul>
    </div>
</section>

</div>

<?php get_footer(); ?>