<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">

		<div class="u-gridRow">
			<div class="u-gridCol8 Coll-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--rightsidebar" id="post-<?php the_ID(); ?>">
						<div class="pagetitle">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="Content-entry">
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div> <!--Coll-8 -->
				
			<div class="u-gridCol4">
				<div class="Sidebar">
					<div class="Sidebar-inner">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</div><!-- u-gridRow -->
	</div><!-- u-gridContainer -->

<?php get_footer(); ?>
