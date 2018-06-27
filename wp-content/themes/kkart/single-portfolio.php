<?php get_header(); ?>


<section class="single-portfolio">


	<!-- ACF - advanced custom fields repeater -->
	<!-- https://www.advancedcustomfields.com/resources/repeater/ -->

	<?php

	// check if the repeater field has rows of data
	if( have_rows('portfolio_image') ):

		// loop through the rows of data
		while ( have_rows('portfolio_image') ) : the_row(); ?>

			<!-- display a sub field value -->
			<div class="galleryImages">
				<div class="image-container">
					<img src="<?php the_sub_field('portfolio_image');?>" alt="">
					<h2> <?php the_sub_field('portfolio_title');?> </h2>
					<p> <?php the_sub_field('portfolio_subtitle'); ?> </p>
				</div>
			</div>
			

		<?php endwhile;

	else :

		// no rows found

	endif;

	?>



	


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