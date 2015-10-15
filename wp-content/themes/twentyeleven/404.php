<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
	<div id="content" class="block-inner">
		<?php if(get_locale() == 'ru_RU') { ?>
			<div class="title404">404</div>
			<div class="subtitle404">Извините, страница не найдена</div>
			<a class="tomain"href="/">На главную</a>
		<?php } elseif(get_locale() == 'en_US') { ?>
			<div class="title404">404</div>
			<div class="subtitle404">Sorry, page not found</div>
			<a class="tomain"href="/">Main page</a>
		<?php } else { ?>
			<div class="title404">404</div>
			<div class="subtitle404">Вибачте, сторінка не знайдена</div>
			<a class="tomain"href="/">На головну</a>
		<?php } ?>

	</div>
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
<?php get_footer(); ?>