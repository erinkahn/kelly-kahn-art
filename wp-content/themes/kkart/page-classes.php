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






<?php get_footer();?>