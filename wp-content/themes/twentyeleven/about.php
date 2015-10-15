<?php
/*
Template Name: О компании
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
					<?php
						$banner2 = get_field('картинка');
						if($banner2 != ''){
						    echo '<img class="img" src="' . $banner2['url'] . '" alt="" />';
						}
					?>
					<? the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<?php if(get_locale() == 'ru_RU') { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Заявка на проект</a>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Project order</a>
			    <?php } else { ?>
			    	<a class="page-order order" href="#dialog" name="modal">Заявка на проект</a>
			    <?php } ?>
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
		</div><!-- #primary -->

<?php get_footer(); ?>