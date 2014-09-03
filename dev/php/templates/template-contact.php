<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="pagetitle">
					<h2><?php the_title(); ?></h2>
				</div>
				
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p>Riooldienst Eemland</p>
								<p>Groeneweg 2</p>
								<p>3751LE Bunschoten</p>
								<p>Email: rioolbeheer@amerongen.info</p>
								<p>Tel: 033 - 299 99 68</p>
								<p>Tel:  06 - 536 22 040 (spoed)</p>
							</div>
						</div>					
						<div class="u-gridCol3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kantoor2b.jpg" style="margin-top: 0px" />
						</div>
						<div class="adress-map u-gridCol6">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

