<?php get_header(); ?>
	
<section id="archive-page" role="main">

	<h1>Portfolio archive!</h1>

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


	<div class="contactForm">
		<div class="form-text">
			<p>Have you been wanting a new portrait of your family to hang up in your home? Do you want to improve your art skills by taking a private art class?</p>
			<h1>Contact Kelly.</h1>
		</div>
		<div class="form-inputs">
			<form action="" method="post">
				<label for="POST-name"></label><input id="POST-name" type="text" name="name" placeholder="Your Name:">
				<label for="POST-email"></label><input id="POST-email" type="text" name="email" Placeholder="Your Email:">
				<label for="POST-message"></label><input id="POST-message" type="text" name="message" Placeholder="Your Message:">
				<input type="submit" value="Send" class="sendButton">
			</form>
		</div>
	</div>


	
</section>

<?php get_footer(); ?>