<?php
/*
Template Name: Page About
*/
?>

<section class="about">

<?php get_header();?>
about



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



<?php get_footer();?>