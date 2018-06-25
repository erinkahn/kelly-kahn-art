<?php get_header(); ?>
	<section id="portfolio-single-categories" role="main">

			<h1><?php the_title();?></h1>


			<!-- portfolio content -->

			


		<?php 
			$args = array(
				"post_type" => "portfolio",
				"category_name" => get_field('portfolio_display_category'),
				"posts_per_page" => -1,
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			
				<a href="<?php the_permalink() ?>" class="single-project" data-tilt >
					<div class="col-xs-12 inner" style="background:url(<?php the_field('project_img')?>) no-repeat center center; background-size:cover;">
					<div class="img-overlay">
						
					</div>
					<div class="text-container">
						<h4 class="text-white"><?php the_field('project_title') ?></h4>
						<span class="text-white project-subtitle"><?php the_field('project_focus') ?></span>
					</div>
					</div> 
				</a>
				
		<?php endwhile; wp_reset_postdata(); endif; ?>

			


		<footer class="footer">
			<?php get_template_part( 'nav', 'below-single' ); ?>
		</footer>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>