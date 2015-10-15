<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


			<div id="content" class="block-inner" role="main">
				<div class="bread">
				    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				</div>
				<?php if(get_locale() == 'ru_RU') { ?>
			    	<header class="entry-header">
						<h1>Реализованные проекты</h1>
					</header>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<header class="entry-header">
						<h1>Completed projects</h1>
					</header>
			    <?php } else { ?>
			    	<header class="entry-header">
						<h1>Реалізовані проекти</h1>
					</header>
			    <?php } ?>
				<div class="category-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'category' ) ); ?>
				</div>
				<div class="cat-descr">
					<?php echo category_description( $category_id ); ?>
				</div>
			<?php if ( have_posts() ) : ?>

				

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a class="fancybox" rel="gallery-<?php the_ID();?>" href="<? echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );  ?>">
									<?php the_post_thumbnail(); ?>
									<?php if ( has_post_thumbnail()) {
										echo '<img class="zoom2" src="'.get_template_directory_uri().'/images/zoom.png" alt="">';
						            } 
						            ?>
								</a>
								<div class="proj-info">
									<a href="<?php the_permalink(); ?>" class="proj-name"><?php the_title(); ?></a>
									<div class="proj-date">
										<?php if(get_locale() == 'ru_RU') { ?>
									      	Дата реализации: <span><? rus_date(); ?></span>
									    <?php } elseif(get_locale() == 'en_US') { ?>
									    	Date of implementation: <span><? the_time('d F Y'); ?></span>
									    <?php } else { ?>
										    Дата реалізації: <span><? ukr_date(); ?></span>
									    <?php } ?>
									    
										
									</div>
									<div class="proj-text"><?php the_excerpt(); ?></div>
								</div>

							</article><!-- #post-<?php the_ID(); ?> -->


						<?php endwhile; ?>
<?php wp_pagenavi(); ?>



			<?php else : ?>

				

			<?php endif; ?>
<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>
