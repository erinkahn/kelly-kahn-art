<?php get_header(); ?>
	<section id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			portfolio content
		<?php endwhile; endif; ?>
		<footer class="footer">
			<?php get_template_part( 'nav', 'below-single' ); ?>
		</footer>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>