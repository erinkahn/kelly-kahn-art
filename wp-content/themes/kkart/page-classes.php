<?php
/*
Template Name: Page Classes
*/
?>


<?php get_header();?>

<section class="classes">

	<div class="class-title">
		<h2><?php the_field('class_header');?></h2>
		<p><?php the_field('class_text');?></p>
	</div>


	<div class="class-images">
		<div class="big-image">
			<img src="<?php the_field('class_image');?>" alt="class">
		</div>
		<div class="three-images">
			<img src="<?php the_field('class_image_2');?>" alt="class">
			<img src="<?php the_field('class_image_3');?>" alt="class">
			<img src="<?php the_field('class_image_4');?>" alt="class">
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