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
				<?php if(!is_front_page()){ ?>
				    <div class="bread">
				      <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				    </div>
				<?php } ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<header class="entry-header">
						<h1><? the_title(); ?></h1>
					</header>
					<div class="gallery">
						<?php
						    $slide1 = get_field('картинка1');
						    if($slide1 != ''){
						    	echo '<a href="'.$slide1['url'].'">';
						        echo '<img src="' . $slide1['sizes']['thumbnail'] . '" alt="" />';
						        echo '<img class="zoom" src="'.get_template_directory_uri().'/images/zoom.png" alt="">';
						        echo '</a>';
						    }
						?>
						<?php
						    $slide2 = get_field('картинка2');
						    if($slide2 != ''){
						        echo '<a href="'.$slide2['url'].'">';
						        echo '<img src="' . $slide2['sizes']['thumbnail'] . '" alt="" />';
						        echo '<img class="zoom" src="'.get_template_directory_uri().'/images/zoom.png" alt="">';
						        echo '</a>';
						    }
						?>
						<?php
						    $slide3 = get_field('картинка3');
						    if($slide3 != ''){
						       echo '<a href="'.$slide3['url'].'">';
						        echo '<img src="' . $slide3['sizes']['thumbnail'] . '" alt="" />';
						        echo '<img class="zoom" src="'.get_template_directory_uri().'/images/zoom.png" alt="">';
						        echo '</a>';
						    }
						?>
					</div>
					<br>
					<? the_content(); ?>
				<?php endwhile; // end of the loop. ?>

				<?php if(get_locale() == 'ru_RU') { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Заявка на проект</a>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Order solution</a>
			    <?php } else { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Заявка на проект</a>
			    <?php } ?>
			    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
		</div><!-- #primary -->

<?php get_footer(); ?>