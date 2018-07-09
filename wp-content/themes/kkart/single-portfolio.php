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



</section>






<?php get_footer(); ?>
