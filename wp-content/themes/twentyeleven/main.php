<?php
/*
Template Name: Главная
*/
get_header(); ?>
	<div class="phone-block">
		<?php if (!dynamic_sidebar("телефон на главную") ) : ?> 
		<?php endif; ?>
	</div>
	<?php if(get_locale() == 'ru_RU') { ?>
		<div class="clearfix"></div>
		<div class="text-top-main">
	      	<?php
			    $text1 = get_field('1_строка_на_зеленом_фоне_рус');
			    if($text1 != ''){
			        echo '<span class="text-top text1">'.$text1.'</span><br>';
			    }
			?>
			<?php
			    $text2 = get_field('2_строка_на_зеленом_фоне_рус');
			    if($text2 != ''){
			        echo '<span class="text-top text2">'.$text2.'</span><br>';
			    }
			?>
			<?php
			    $text3 = get_field('3_строка_на_зеленом_фоне_рус');
			    if($text3 != ''){
			        echo '<span class="text-top text3">'.$text3.'</span><br>';
			    }
			?>
			<?php
			    $text4 = get_field('текст_на_желтом_фоне_рус');
			    if($text4 != ''){
			        echo '<div class="text4">'.$text4.'</div>';
			    }
			?>
		</div>
		<div class="right-main">
			<a class="order" href="#dialog" name="modal">Заявка на проект</a>
			<div class="top-list">
				<img class="list-img" src="<?php echo get_template_directory_uri(); ?>/images/list-img.png" alt="chart">
				<?php
				    $text5 = get_field('проектирование_систем_вверху_страницы');
				    if($text5 != ''){
				        echo $text5;
				    }
				?>
			</div>
		</div>
    <?php } elseif(get_locale() == 'en_US') { ?>
   		<div class="clearfix"></div>
	    <div class="text-top-main">
	      	<?php
			    $text1 = get_field('1_строка_на_зеленом_фоне_англ');
			    if($text1 != ''){
			        echo '<span class="text-top text1">'.$text1.'</span><br>';
			    }
			?>
			<?php
			    $text2 = get_field('2_строка_на_зеленом_фоне_англ');
			    if($text2 != ''){
			        echo '<span class="text-top text2">'.$text2.'</span><br>';
			    }
			?>
			<?php
			    $text3 = get_field('3_строка_на_зеленом_фоне_англ');
			    if($text3 != ''){
			        echo '<span class="text-top text3">'.$text3.'</span><br>';
			    }
			?>
			<?php
			    $text4 = get_field('текст_на_желтом_фоне_англ');
			    if($text4 != ''){
			        echo '<div class="text4">'.$text4.'</div>';
			    }
			?>
		</div>
		<div class="right-main">
			<a class="order" href="#dialog" name="modal">Order Solution</a>
			<div class="top-list">
				<img class="list-img" src="<?php echo get_template_directory_uri(); ?>/images/list-img.png" alt="">
				<?php
				    $text5 = get_field('проектирование_систем_вверху_страницы_англ');
				    if($text5 != ''){
				        echo $text5;
				    }
				?>
			</div>
		</div>
    <?php } else { ?>
    	<div class="clearfix"></div>
     	<div class="text-top-main">
	      	<?php
			    $text1 = get_field('1_строка_на_зеленом_фоне_укр');
			    if($text1 != ''){
			        echo '<span class="text-top text1">'.$text1.'</span><br>';
			    }
			?>
			<?php
			    $text2 = get_field('2_строка_на_зеленом_фоне_укр');
			    if($text2 != ''){
			        echo '<span class="text-top text2">'.$text2.'</span><br>';
			    }
			?>
			<?php
			    $text3 = get_field('3_строка_на_зеленом_фоне_укр');
			    if($text3 != ''){
			        echo '<span class="text-top text3">'.$text3.'</span><br>';
			    }
			?>
			<?php
			    $text4 = get_field('текст_на_желтом_фоне_укр');
			    if($text4 != ''){
			        echo '<div class="text4">'.$text4.'</div>';
			    }
			?>
		</div>
		<div class="right-main">
			<a class="order" href="#dialog" name="modal">Заявка на проект</a>
			<div class="top-list">
				<img class="list-img" src="<?php echo get_template_directory_uri(); ?>/images/list-img.png" alt="">
				<?php
				    $text5 = get_field('проектирование_систем_вверху_страницы_укр');
				    if($text5 != ''){
				        echo $text5;
				    }
				?>
			</div>
		</div>
    <?php } ?>
		<div class="section section1">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="section section1-text">
					<?php if(get_locale() == 'ru_RU') { ?>
				    	<h1>
				    		<?php
							    $text6 = get_field('заголовок_рус');
							    if($text6 != ''){
							        echo $text6;
							    }
							?>
				    	</h1>
				    <?php } elseif(get_locale() == 'en_US') { ?>
				    	<h1>
				    		<?php
							    $text6 = get_field('заголовок_англ');
							    if($text6 != ''){
							        echo $text6;
							    }
							?>
				    	</h1>
				    <?php } else { ?>
				    	<h1>
				    		<?php
							    $text6 = get_field('заголовок_укр');
							    if($text6 != ''){
							        echo $text6;
							    }
							?>
				    	</h1>
				    <?php } ?>
					<? the_content(); ?>
					<?php if(get_locale() == 'ru_RU') { ?>
				    	<a class="more" href="/o-kompanii/">Подробнее...</a>
				    <?php } elseif(get_locale() == 'en_US') { ?>
				    	<a class="more" href="/en/o-kompanii/">Read more...</a>
				    <?php } else { ?>
				    	<a class="more" href="/ua/o-kompanii/">Детальніше...</a>
				    <?php } ?>
					</div>
					<div class="news-block">
						<?php if(get_locale() == 'ru_RU') { ?>
					    	<div class="news-title">Новости</div>
					    <?php } elseif(get_locale() == 'en_US') { ?>
					    	<div class="news-title">News</div>
					    <?php } else { ?>
					    	<div class="news-title">Новини</div>
					    <?php } ?>
						<div class="jcarousel-wrapper">
			                <div class="jcarousel">
			                    <ul>
			                    <?php
				                  $args = array(  
				                      'tax_query' => array(  
				                          array(  
				                              'taxonomy' => 'all-news',  
				                              'terms' => array(3)  
				                          )  
				                      ),
				                      'posts_per_page' => -1
				                  );  
				                  query_posts( $args );
				                  if( have_posts() ){ 
				                    while( have_posts() ){ 
				                          the_post();?>
				                          	<li>
				                          		
				                          		<?php if(get_locale() == 'ru_RU') { ?>
											    	<div class="news-date"><? rus_date(); ?></div>
											    <?php } elseif(get_locale() == 'en_US') { ?>
											    	<div class="news-date"><? the_time('d F Y'); ?></div>
											    <?php } else { ?>
											    	<div class="news-date"><? ukr_date(); ?></div>
											    <?php } ?>
				                          		<div class="name-img">
				                          			<div class="news-name"><? the_title(); ?></div>
				                          			<div class="news-img">
				                          				<? the_post_thumbnail('news'); ?>
				                          			</div>
				                          		</div>
				                          		<div class="news-text"><? the_content(); ?></div>
				                          	</li>				                          
				                  <?php
				                    }
				                      wp_reset_query();
				                    }
				                ?>
			                    </ul>
			                </div>
			                <a href="#" class="jcarousel-control-prev"></a>
			                <a href="#" class="jcarousel-control-next"></a>
			                <p class="jcarousel-pagination"></p>
			            </div>
					</div>
				<?php endwhile; // end of the loop. ?>
		</div>
		<div class="section section2">
			<?php if(get_locale() == 'ru_RU') { ?>
				<div class="section section2-title">
			    	<?php
					    $text7 = get_field('заголовок_блока_рус');
					    if($text7 != ''){
					        echo $text7;
					    }
					?>
				</div>
				<div class="section section2-text">
					<?php
					    $text8 = get_field('описание_рус');
					    if($text8 != ''){
					        echo $text8;
					    }
					?>
				</div>
			<?php } elseif(get_locale() == 'en_US') { ?>
				<div class="section section2-title">
			    	<?php
					    $text7 = get_field('заголовок_блока_англ');
					    if($text7 != ''){
					        echo $text7;
					    }
					?>
				</div>
				<div class="section section2-text">
					<?php
					    $text8 = get_field('описание_англ');
					    if($text8 != ''){
					        echo $text8;
					    }
					?>
				</div>
			<?php } else { ?>
				<div class="section section2-title">
			    	<?php
					    $text7 = get_field('заголовок_блока_укр');
					    if($text7 != ''){
					        echo $text7;
					    }
					?>
				</div>
				<div class="section section2-text">
					<?php
					    $text8 = get_field('описание_укр');
					    if($text8 != ''){
					        echo $text8;
					    }
					?>
				</div>
			<?php } ?>
			<div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                    	<?php query_posts('cat=1&posts_per_page=-1'); while (have_posts()) : the_post(); ?>
                    	<?php
						$onmain = get_field('выводить_на_главной');
						if($onmain == 'Да'){ ?>
						<li>
							<? the_post_thumbnail('proj'); ?>
							<? the_title(); ?>
						</li>
						<?php } ?>
						<?php endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev"></a>
                <a href="#" class="jcarousel-control-next"></a>
            </div>
		</div>
		<div class="section section3">
			<?php if(get_locale() == 'ru_RU') { ?>
				<div class="section section3-title">Наши клиенты</div>
			<?php } elseif(get_locale() == 'en_US') { ?>
				<div class="section section3-title">Our clients</div>
			<?php } else { ?>
				<div class="section section3-title">Наші клієнти</div>
			<?php } ?>
			<?php if(get_locale() == 'ru_RU') { ?>
				<div class="section section3-text">
					<?php
					    $text9 = get_field('описание_блока');
					    if($text9 != ''){
					        echo $text9;
					    }
					?>
				</div>
			<?php } elseif(get_locale() == 'en_US') { ?>
				<div class="section section3-text">
					<?php
					    $text9 = get_field('описание_блока_укр');
					    if($text9 != ''){
					        echo $text9;
					    }
					?>
				</div>
			<?php } else { ?>
				<div class="section section3-text">
					<?php
					    $text9 = get_field('описание_блока_англ');
					    if($text9 != ''){
					        echo $text9;
					    }
					?>
				</div>
			<?php } ?>
			<div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                    	<?php
				                  $args = array(  
				                      'tax_query' => array(  
				                          array(  
				                              'taxonomy' => 'all-clients',  
				                              'terms' => array(2)  
				                          )  
				                      ),
				                      'posts_per_page' => -1
				                  );  
				                  query_posts( $args );
				                  if( have_posts() ){ 
				                    while( have_posts() ){ 
				                          the_post();?>
						<li>
							<? the_post_thumbnail('clients'); ?>
						</li>
						<?php } wp_reset_query(); } ?>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev"></a>
                <a href="#" class="jcarousel-control-next"></a>
            </div>
		</div>
<?php get_footer(); ?>