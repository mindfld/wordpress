<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1250px" />
<meta name = "format-detection" content = "telephone=no">
<meta name='freelancehunt-verification' content='5802a8bf7fe975a' />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
<title><?php
	global $page, $paged;
	wp_title( '', true, 'right' );
	//bloginfo( 'name' );

	//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
	//	echo " | $site_description";

	if(get_locale() == 'ru_RU') {
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Страница %s', 'twentyeleven' ), max( $paged, $page ) );
	} elseif(get_locale() == 'en_US') {
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );		  
	} else {
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );		   
	}
	echo " | BVI Groupe";
	?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<? if(is_page(41)){ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tab.js" type="text/javascript"></script>
<? } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<? if(is_front_page()){ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/car.js" type="text/javascript"></script>
<? } ?>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,400,300,300italic,400italic,700,700italic,500,500italic' rel='stylesheet' type='text/css'>
<? if(is_page(11)){ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/contacts.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/chosen.css">
<? } ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			    <?php if(get_locale() == 'ru_RU') { ?>
			      	<?php if (!dynamic_sidebar("адрес в шапке рус") ) : ?> 
					<?php endif; ?>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<?php if (!dynamic_sidebar("адрес в шапке англ") ) : ?> 
					<?php endif; ?>
			    <?php } else { ?>
				    <?php if (!dynamic_sidebar("адрес в шапке укр") ) : ?> 
					<?php endif; ?>
			    <?php } ?>
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
			</a>
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<?php qtrans_generateLanguageSelectCode($type='text'); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->
	<div id="mask"></div>
	<div id="main">
				<?php if(get_locale() == 'ru_RU') { ?>
			      	<div id="boxes">
					  	<div id="dialog" class="window">
					    	<a href="#" class="close"></a>
					    	<div class="popup-title"><span>Заявка</span> на проект</div>
					    	<?php 
					        	echo do_shortcode('[contact-form-7 id="57" title="Заявка на проект рус"]'); 
					      	?>
					  	</div>
					  
					</div>
			    <?php } elseif(get_locale() == 'en_US') { ?>
			    	<div id="boxes">
					  	<div id="dialog" class="window">
					    	<a href="#" class="close"></a>
					    	<div class="popup-title"><span>Project</span> order</div>
					    	<?php 
					        	echo do_shortcode('[contact-form-7 id="58" title="Заявка на проект англ"]'); 
					      	?>
					  	</div>
					  
					</div>
			    <?php } else { ?>
				    <div id="boxes">
					  	<div id="dialog" class="window">
					    	<a href="#" class="close"></a>
					    	<div class="popup-title"><span>Заявка</span> на проект</div>
					    	<?php 
					        	echo do_shortcode('[contact-form-7 id="59" title="Заявка на проект укр"]'); 
					      	?>
					  	</div>
					</div>
			    <?php } ?>