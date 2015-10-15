<?php
/*
Template Name: Проектирование
*/

get_header(); ?>

		<div class="block-inner shadow marginb0">
			<?php if(!is_front_page()){ ?>
			    <div class="bread">
			      <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
			    </div>
			<?php } ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<header class="entry-header">
						<h1><? the_title(); ?></h1>
					</header>
					<? the_content(); ?>
				<?php endwhile; // end of the loop. ?>

		</div><!-- #primary -->
		<div class="block-inner yellow margint0 marginb0">
			<?php
                  // Запрос. $args - параметры запроса
                  $args = array(  
                      'tax_query' => array(  
                          array(  
                              'taxonomy' => 'all-proj',  
                              'terms' => array(6)  
                          )  
                      ),
                      'posts_per_page' => 5,
                      'order' => 'ASC'
                  );  
                  query_posts( $args );
                  if( have_posts() ){ 
                    while( have_posts() ){ 
                          the_post();?>
                          
                            <div class="proj-inner">
                              <a href="<? the_permalink(); ?>"><?php the_post_thumbnail('proj2'); ?></a>
                              <div class="proj-name"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                              
                            </div>
                        
                          
                  <?php } wp_reset_query(); } ?>
		</div><!-- #primary -->
		<div class="block-inner margint0 white">
				<?php if(get_locale() == 'ru_RU') { ?>
			      	<div class="proj-title">
			      		<?php
						    $zag = get_field('заголовок_(рус)');
						    if($zag != ''){
						        echo $zag;
						    }
						?>
			      	</div>
			      		<?php
						    $text = get_field('текст_рус');
						    if($text != ''){
						        echo $text;
						    }
						?>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<div class="proj-title">
			      		<?php
						    $zag = get_field('заголовок_(англ)');
						    if($zag != ''){
						        echo $zag;
						    }
						?>
			      	</div>
			      		<?php
						    $text = get_field('текст_англ');
						    if($text != ''){
						        echo $text;
						    }
						?>
			    <?php } else { ?>
				    <div class="proj-title">
			      		<?php
						    $zag = get_field('заголовок_(укр)');
						    if($zag != ''){
						        echo $zag;
						    }
						?>
			      	</div>
			      		<?php
						    $text = get_field('текст_укр');
						    if($text != ''){
						        echo $text;
						    }
						?>
			    <?php } ?>
		</div><!-- #primary -->
<?php get_footer(); ?>