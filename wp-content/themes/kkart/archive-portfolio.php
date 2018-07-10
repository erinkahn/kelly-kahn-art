<?php get_header(); ?>
	
<section id="archive-page" role="main">
	
	<div class="categories">

	<!-- custom query for "portfolios" type - custom post type
		loop through them
		display them -->

	<div class="portfolio-categories">
		
		<?php 
			$args = array(
				'post_type' => array('portfolio'), //get the portfolio categories
				'post_per_page' => -1, //get all the posts is -1
				'order' => "ASC" //puts the post types in order or you can use a WP plugin
			);
			$portfolioQuery = new WP_Query($args);
			// the custom loop
			if ($portfolioQuery->have_posts()) {
				while($portfolioQuery->have_posts()) { //loop start
					$portfolioQuery->the_post(); 
					?>

					<div class="single-post"> <!-- four images portfolios -->
						<a class="post-link" href="<?php the_permalink(); ?>"> <!-- link to this post-->
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							<h3><?php the_title();?></h3>
						</a>
						
					</div>

				<?php 
				} //loop end
				wp_reset_postdata();
			}
		?>

	</div>

</div>
			
		
	
</section>


<?php get_footer(); ?>