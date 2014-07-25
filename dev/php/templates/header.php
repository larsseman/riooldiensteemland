<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

    <!-- Main navigation -->

	<div class="Top-Nav">
		<div class="u-gridContainer">
			
			<div class="Logos-wrap">
				<div class="Logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo-1.jpg">
				</div>
				
				<div class="Logo-2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo-2.jpg">
				</div>
			</div>
			
			
			<div class="Top-contact">
				<div class="Top-h6">
					<h6>24 uurs service</h6>
				</div>

				<a class="Contact-mob" href="tel:0332999968">
					<img src="<?php echo get_stylesheet_directory_uri() ;?>/img/svg's/telefoon.svg">				  
				  <p>033 - 299 99 68</p>
				</a>
	             
				<a class="Contact-mob" href="tel:0653622040">
					<img src="<?php echo get_stylesheet_directory_uri() ;?>/img/svg's/mobiel.svg">
				  <p>06 - 536 22 040</p>
				</a>
			</div><!-- Top-contact -->
		</div>
	</div><!-- Top-Nav -->
	
	<div class="Bot-Nav">
		<div class="u-gridContainer">

			<div class="Nav-toggle">
				<a class="Navigation-menuToggle" id="js-navCollapse">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-menu2"></use>
					</svg>
				</a>
			</div>

		    <?php include 'includes/navigation.php'; ?>
		    
		    <div class="Mob-contact-ico">
				<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0102234786">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-phone"></use>
					</svg>
				</a>
			
				<a class="Button Button--transparent u-textInverted u-noLine tel2svg" href="tel:0622207355">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-mobile"></use>
					</svg>
				</a>
			
				<a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@abt-installaties.nl">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-envelope"></use>
					</svg>
				</a>
			</div><!-- header-contact -->

		</div>
	</div>


<?php if(is_front_page()) { ?>
	<div class="Header">
	
	</div>
	
	<div class="Page-title">
		<h2>Welkom bij Riooldiensteemland!</h2>
		<p>Uw partner bij het oplossen van rioolproblemen</p>
	</div>
<?php } ?>
