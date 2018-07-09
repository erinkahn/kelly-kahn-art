<?php get_header();?>

<!-- have to write custom html styling for custom fields since you need php and php cant be used in sass -->
<section class="hero-section" style="background:url('<?php the_field('hero_image'); ?>') no-repeat; background-size:cover; width: 100%; height: 58vw;">

</section>

<section class="home-content">

    <div class="intro">
        <img src="<?php the_field('signature_image');?>" alt="signature">
        <p><?php the_field('intro_text');?></p>
    </div>


    <div class="categories">

        <!-- custom query for "portfolios" type - custom post type
             loop through them
             display them -->

        <div class="portfolio-categories">
            
            <?php 
                $args = array(
                    'post_type' => array('portfolio'), //get the portfolio categories
                    'post_per_page' => -1, //get all the posts is -1
                    'order' => "ASC" //puts the post types in order or you can use a WP plugin
                );
                $portfolioQuery = new WP_Query($args);
                // the custom loop
                if ($portfolioQuery->have_posts()) {
                    while($portfolioQuery->have_posts()) { //loop start
                        $portfolioQuery->the_post(); 
                        ?>

                        <div class="single-post"> <!-- four images portfolios -->
                            <a class="post-link" href="<?php the_permalink(); ?>"> <!-- link to this post-->
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <h3><?php the_title();?></h3>
                            </a>
                            
                        </div>

                    <?php 
                    } //loop end
                    wp_reset_postdata();
                }
            ?>

        </div>

    </div>


    <div class="iconIllustrations">
        <div class="about">
            <img src="<?php the_field('about_image');?>" alt="about">
            <a href="<?php the_field('about_url');?>">About</a>
        </div>

        <div class="fees">
            <img src="<?php the_field('easel_image');?>" alt="easel">
            <a href="<?php the_field('fees_url');?>">Fees</a>
        </div>

        <div class="classes">
            <img src="<?php the_field('palette_image');?>" alt="palette">
            <a href="<?php the_field('classes_url');?>">Classes</a>
        </div>
    </div>


</section>

<?php get_footer();?>