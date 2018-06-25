<?php get_header(); ?>
	<section id="archive-page" role="main">

        <!-- <h1>Portfolio archive!</h1> -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- portfolio content -->
		
		<div class="categories">

			<div class="portfolio-categories">
				
			
				<div class="single-post"> <!-- four images portfolios -->
					<a class="post-link" href="<?php the_permalink(); ?>"> <!-- link to this post-->
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						<h3><?php the_title();?></h3>
					</a>
					
				</div>

			</div>

		</div>

			
		
		<?php endwhile; endif; ?>


	
	</section>
<?php get_footer(); ?>