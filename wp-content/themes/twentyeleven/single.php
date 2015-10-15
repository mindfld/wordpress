<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="block-inner">

			<div id="content" role="main">
				<div class="bread">
				    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>

				
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>

						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->


				<?php endwhile; // end of the loop. ?>
<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			</div><!-- #content -->

</div>

<?php get_footer(); ?>