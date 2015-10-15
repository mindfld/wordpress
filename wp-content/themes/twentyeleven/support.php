<?php
/*
Template Name: Поддержка
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
				<?php endwhile; // end of the loop. ?>
				<div id="tabs">
				  	<ul>
				  		<?php if(get_locale() == 'ru_RU') { ?>
					      	<li><a href="#tabs-1">Информационная поддержка</a></li>
					    	<li><a href="#tabs-2">Поддержка монтажным организациям</a></li>
					    <?php } elseif(get_locale() == 'en_US') { ?>
					      	<li><a href="#tabs-1">Information support</a></li>
						    <li><a href="#tabs-2">Support for installers</a></li>
					    <?php } else { ?>
					      	<li><a href="#tabs-1">Інформаційна підтримка</a></li>
						    <li><a href="#tabs-2">Підтримка монтажним організаціям</a></li>
					    <?php } ?>
						    
				  	</ul>
				  	<div id="tabs-1">
				    	<?php
						    $banner1 = get_field('информационая_поддержка_картинка');
						    if($banner1 != ''){
						        echo '<img src="' . $banner1['url'] . '" alt="" />';
						    }
						?>
						<?php if(get_locale() == 'ru_RU') { ?>
							<?php
							    $text1 = get_field('информационая_поддержка_рус');
							    if($text1 != ''){
							        echo $text1;
							    }
							?>
						<?php } elseif(get_locale() == 'en_US') { ?>
							<?php
							    $text1 = get_field('информационая_поддержка_англ');
							    if($text1 != ''){
							        echo $text1;
							    }
							?>
						<?php } else { ?>
							<?php
							    $text1 = get_field('информационая_поддержка_укр');
							    if($text1 != ''){
							        echo $text1;
							    }
							?>
						<?php } ?>
				    </div>
				  	<div id="tabs-2">
				    	<?php
						    $banner2 = get_field('поддержка_монтажным_организациям_картинка');
						    if($banner2 != ''){
						        echo '<img src="' . $banner2['url'] . '" alt="" />';
						    }
						?>
						<?php if(get_locale() == 'ru_RU') { ?>
							<?php
							    $text2 = get_field('поддержка_монтажным_организациям_рус');
							    if($text2 != ''){
							        echo $text2;
							    }
							?>
						<?php } elseif(get_locale() == 'en_US') { ?>
							<?php
							    $text1 = get_field('поддержка_монтажным_организациям_англ');
							    if($text2 != ''){
							        echo $text2;
							    }
							?>
						<?php } else { ?>
							<?php
							    $text2 = get_field('поддержка_монтажным_организациям_укр');
							    if($text2 != ''){
							        echo $text2;
							    }
							?>
						<?php } ?>
				    </div>
				    
				</div>
					<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				
		</div><!-- #primary -->

<?php get_footer(); ?>