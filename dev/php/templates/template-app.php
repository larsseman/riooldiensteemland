<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<article class="Content-article u-gridCol8 Coll-8" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
					<p>Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.</p>
					<p>Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. </p>
					
					<div class="App-wrapper">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone5.png" class="App-iphone" />
						<a href="https://play.google.com/store/apps/details?id=com.wRiooldienstEemalnd">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" class="App-google" />
						</a>
						<a class="App-down" href="https://play.google.com/store/apps/details?id=com.wRiooldienstEemalnd">Download de app hier</a>
 
						<div class="qr-code">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.jpg" />
						</div>
					</div>
					<?php  //the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
				
				<aside class="u-gridCol4">
					<div class="Sidebar">
						<div class="Sidebar-inner">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</aside>

			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


