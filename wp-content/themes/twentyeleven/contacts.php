<?php
/*
Template Name: Контакты
*/


get_header(); ?>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia

function initialize()
{
							<?php
			                  // Запрос. $args - параметры запроса
			                  $args = array(  
			                      'tax_query' => array(  
			                          array(  
			                              'taxonomy' => 'all-office',  
			                              'terms' => array(5)  
			                          )  
			                      ),
			                      'posts_per_page' => -1
			                  );  
			                  query_posts( $args );
			                  if( have_posts() ){ 
			                    while( have_posts() ){ 
			                          the_post();?>
			                          			<?php
												    $map = get_field('карта');
												   
												        $lat = $map['lat'];
												        $lng = $map['lng'];
												?>
			                          	var latlng<? the_ID();?> = new google.maps.LatLng(<? echo $lat; ?>,<? echo $lng; ?>);
									    var myOptions<? the_ID();?> =
									    {
									        zoom: 18,
									        center: latlng<? the_ID();?>,
									        mapTypeId: google.maps.MapTypeId.ROADMAP
									    };
									   
									    var map<? the_ID();?> = new google.maps.Map(document.getElementById("map_canvas<? the_ID();?>"), myOptions<? the_ID();?>);
									   	var myMarker = new google.maps.Marker(
										    {
										        position: latlng<? the_ID();?>,
										        map: map<? the_ID();?>,
										        title: "<? echo $map['address']; ?>"
										   });
		                            			                              
			                  <?php } wp_reset_query(); } ?>


}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

		<div class="marginb0 block-inner">
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
					<div class="office-list">
						<?php if(get_locale() == 'ru_RU') { ?>
					      	<div class="office-list-title">Наши офисы</div>
					    <?php } elseif(get_locale() == 'en_US') { ?>
					    	<div class="office-list-title">Our offices</div>
					    <?php } else { ?>
						    <div class="office-list-title">Наші офіси</div>
					    <?php } ?>
						
						<select>
						 
						
							<?php
			                  // Запрос. $args - параметры запроса
			                  $args = array(  
			                      'tax_query' => array(  
			                          array(  
			                              'taxonomy' => 'all-office',  
			                              'terms' => array(5)  
			                          )  
			                      ),
			                      'posts_per_page' => -1
			                  );  
			                  query_posts( $args );
			                  if( have_posts() ){ 
			                    while( have_posts() ){ 
			                          the_post();?>
			                          	<option value="office-<? the_ID();?>">
					                        <?php if(get_locale() == 'ru_RU') { ?>
										      	<?php
												    $addr = get_field('адрес_рус');
												    if($addr != ''){
												        echo $addr;
												    }
												?>
										    <?php } elseif(get_locale() == 'en_US') { ?>
										      	<?php
												    $addr = get_field('адрес_англ');
												    if($addr != ''){
												        echo $addr;
												    }
												?>
										    <?php } else { ?>
										      	<?php
												    $addr = get_field('адрес_укр');
												    if($addr != ''){
												        echo $addr;
												    }
												?>
										    <?php } ?>
			                          	</option>
		                            			                              
			                  <?php } wp_reset_query(); } ?>
	                  	</select>
	                </div>
	    </div><!-- .block-inner-->
	    <div class="map offices-block">
	    		<?php
			                  // Запрос. $args - параметры запроса
			                  $args = array(  
			                      'tax_query' => array(  
			                          array(  
			                              'taxonomy' => 'all-office',  
			                              'terms' => array(5)  
			                          )  
			                      ),
			                      'posts_per_page' => -1
			                  );  
			                  query_posts( $args );
			                  if( have_posts() ){ 
			                    while( have_posts() ){ 
			                          the_post();?>
			                          	 <div class="office-block office-<? the_ID();?>">
			                          	 	<div class="mapp" id="map_canvas<? the_ID();?>" style="width:100%; height: 325px;"></div>
			                          	 </div>
		                            			                              
			                  <?php } wp_reset_query(); } ?>
	    </div>
	    <div class="block-inner margint0">
	    	<div itemscope itemtype="http://schema.org/LocalBusiness" class="cont-info">
	                <div class="offices-block">
					<?php
	                  // Запрос. $args - параметры запроса
	                  $args = array(  
	                      'tax_query' => array(  
	                          array(  
	                              'taxonomy' => 'all-office',  
	                              'terms' => array(5)  
	                          )  
	                      ),
	                      'posts_per_page' => -1
	                  );  
	                  query_posts( $args );
	                  if( have_posts() ){ 
	                    while( have_posts() ){ 
	                        the_post();?>
	                            <div class="office-block office-<? the_ID();?>">
	                            				
	                            	<?php if(get_locale() == 'ru_RU') { ?>
								      	<div class="cont-info-title i1">Наш адрес</div>
									      	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="padding40">
									      	<?php
											    $addr = get_field('адрес_рус');
											    if($addr != ''){
											        echo $addr;
											    }
											?>
											</div>
										<div class="cont-info-title i2">Электронная почта</div>
											<div itemprop="email" class="padding40">
											<?php
												$mail = get_field('почта');
												if($mail != ''){
												    echo $mail;
												}
											?>
											</div>
										<div class="cont-info-title i3">Телефоны для консультаций</div>
											<div class="padding40">
											<?php
												$phns = get_field('телефоны');
												if($phns != ''){
												    echo $phns;
												}
											?>
											</div>
								    <?php } elseif(get_locale() == 'en_US') { ?>
								    	<div class="cont-info-title i1">Our address</div>
									    	<div class="padding40">
									      	<?php
											    $addr = get_field('адрес_англ');
											    if($addr != ''){
											        echo $addr;
											    }
											?>
											</div>
										<div class="cont-info-title i2">E-mail</div>
											<div class="padding40">
											<?php
												$mail = get_field('почта');
												if($mail != ''){
												    echo $mail;
												}
											?>
											</div>
										<div class="cont-info-title i3">Phones for consultation</div>
											<div class="padding40">
											<?php
												$phns = get_field('телефоны');
												if($phns != ''){
												    echo $phns;
												}
											?>
											</div>
								    <?php } else { ?>
									    <div class="cont-info-title i1">Наша адреса</div>
										    <div class="padding40">
									      	<?php
											    $addr = get_field('адрес_укр');
											    if($addr != ''){
											        echo $addr;
											    }
											?>
											</div>
										<div class="cont-info-title i2">Електронна пошта</div>
											<div class="padding40">
											<?php
												$mail = get_field('почта');
												if($mail != ''){
												    echo $mail;
												}
											?>
											</div>
										<div class="cont-info-title i3">Телефони для консультацій</div>
											<div class="padding40">
											<?php
												$phns = get_field('телефоны');
												if($phns != ''){
												    echo $phns;
												}
											?>
											</div>
								    <?php } ?>
								    	
										
	                            </div>
	                              
	                        
	                          
	                  <?php } wp_reset_query(); } ?>
	                </div>

				
			</div>
			<div class="cont-form">
				<?php if(get_locale() == 'ru_RU') { ?>
					<div class="cont-form-title">Задать вопрос</div>
			      	<?php 
			        	echo do_shortcode('[contact-form-7 id="4" title="Контактная форма рус"]'); 
			      	?>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<div class="cont-form-title">Ask a question</div>
			    	<?php 
			        	echo do_shortcode('[contact-form-7 id="56" title="Котнтактная форма англ"]'); 
			      	?>
			    <?php } else { ?>
			    	<div class="cont-form-title">Задати питання</div>
				    <?php 
			        	echo do_shortcode('[contact-form-7 id="55" title="Контактная форма укр"]'); 
			      	?>
			    <?php } ?>
			    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			</div>

		</div><!-- .block-inner-->

<?php get_footer(); ?>