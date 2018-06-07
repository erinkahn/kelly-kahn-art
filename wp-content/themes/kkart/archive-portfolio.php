<?php get_header(); ?>
	<section id="content" role="main">
        <h1>Portfolio archive!</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			portfolio content
		<?php endwhile; endif; ?>
		<footer class="footer">
			<?php get_template_part( 'nav', 'below-single' ); ?>
		</footer>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>