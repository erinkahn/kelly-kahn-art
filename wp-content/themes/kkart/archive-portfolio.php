<?php get_header(); ?>
	
<section id="archive-page" role="main">
	
	<div class="categories">
		<!-- loop through all posts/portfolio categories and show all on one page -->	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="portfolio-categories">
		
				<div class="single-post"> <!-- four images portfolios -->
					<a class="post-link" href="<?php the_permalink(); ?>"> <!-- link to this post-->
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						<h3><?php the_title();?></h3>
					</a>
					
				</div>

			</div>

		<?php endwhile; endif; ?>	

	</div>
			
		
	
</section>


<?php get_footer(); ?>