<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<!-- BLOG PAGE -->
	<section class="blog-page">
		<div class="container wrap">

			<div class="main-content">
<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

				<article class="post-entry individual-post">
					<div class="entry-wrap">
						<header class="entry-header">
							<div class="entry-meta">
								<time class="entry-time" datetime="2014-09-20T04:33:51+00:00" itemprop="datePublished" title="Monday, September 20, 2014, 4:33 am"><?php the_date();?></time>
							</div>
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header>
						<div class="entry-summary">
							<figure class="wp-caption">
								
							</figure>
							<?php the_content(); ?>
						</div>
						<footer class="entry-footer">
							<div class="entry-meta">
								<span class="entry-terms author"><?php _e("[:en]Written by [:ru]Автор: [:]"); ?> <?php the_author(); ?></span>
							</div>
						</footer>
					</div>
				</article>


			</div>

<?php get_sidebar(); ?>

		</div>
	</section>
	<!-- END blog page -->

	<footer class="navigation container">
		<div class="left">&larr;<a href="<?php echo home_url(); ?>/blog"><?php _e("[:en]Back to posts [:ru]Обратно в блог[:]"); ?></a></div>
	</footer>
	
				<?php endwhile; ?>

<?php
get_footer();
