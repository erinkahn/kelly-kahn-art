<?php
/*
Template Name: Page Fees
*/
?>


<?php get_header();?>

<section class="fees-page">


	<div class="fees-title">
		<h2><?php the_field('fees_header');?></h2>
		<p><?php the_field('fees_text');?></p>
    </div>

    <div class="portrait-images">
		<div class="pet">
			<h3>Pet Portrait Fees</h3>
			<img src="<?php the_field('pet_fees');?>" alt="pet-chart">
		</div>
		<div class="portrait">
			<h3>Portrait Fees</h3>
			<img src="<?php the_field('portrait_fees');?>" alt="portrait-chart">
		</div>
	</div>
	
	<div class="agreement">
		<div>
			<h4><?php the_field('agreement_title');?></h4>
			<p><?php the_field('agreement_text');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_2');?></h4>
			<p><?php the_field('agreement_text_2');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_3');?></h4>
			<p><?php the_field('agreement_text_3');?></p>
		</div>

		<div>	
			<h4><?php the_field('agreement_title_4');?></h4>
			<p><?php the_field('agreement_text_4');?></p>
		</div>
		
		<div>
			<h4><?php the_field('agreement_title_5');?></h4>
			<p><?php the_field('agreement_text_5');?></p>
		</div>
			
		<div>
			<h4><?php the_field('agreement_title_6');?></h4>
			<p><?php the_field('agreement_text_6');?></p>
		</div>

		<div>
			<h4><?php the_field('agreement_title_7');?></h4>
			<p><?php the_field('agreement_text_7');?></p>
		</div>
			
		<div>
			<h4><?php the_field('agreement_title_8');?></h4>
			<p><?php the_field('agreement_text_8');?></p>
		</div>
				
	</div>


</section>

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





<?php get_footer();?>