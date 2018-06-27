<?php
/*
Template Name: Page About
*/
?>


<?php get_header();?>

<section class="about">


    <div class="kelly">
        <img src="<?php the_field('about_image');?>" alt="">
    </div>

    <div class="aboutText">
        <h3><?php the_field('about_header');?></h3>
        <p><?php the_field('about_text');?></p>
        <p><?php the_field('about_text2');?></p>
    </div>
    

    <!-- <h3>Influences</h3>
    <ul>
        <li>Jan Kunz</li>
        <li>Winslow Homer</li>
        <li>The Village Painters</li>
        <li>Frances Jones</li>
        <li>Rollina Ogelsbay</li>
        <li>John Lonergan</li>
        <li>Al Sella</li>
    </ul> -->


    <!-- <h3>Exhibitions and Galleries</h3>
    <ul>
        <li>Vestavia Art Association guest artist/speaker, Vestavia, Alabama, October, 2014 Al</li>
        <li>"Art Fuels" guest artist/speaker at Indian Springs School, Indian Springs, Alabama, September, 2014 Al</li>
        <li>Mountain Brook Holiday Art Show, December 6 - 20, 2013, Brookwood Mall in the old Gus Mayer location, Birmingham, Al</li>
        <li>Illustrated the cover of the Birmingham, Alabama Hadassah Directory 2012 - 2013. Its 100th Year Birthday</li>
        <li>Charleston House - 15 Mitylene Park Lane, Montgomery, Al. art for sale - Exhibition begins September 29, 2011</li>
        <li>30th Annual Mountain Brook Art Association Spring Art Show at the Crestline Elementary Athletic Field, Mountain Brook, AL - April 9, 2011</li>
        <li>Kala's Cottage - Guntersville, Alabama - 2010</li>
        <li>National Center for the Study of Civil Rights and African American Culture Exhibition - Montgomery, Alabama - June 6 - October 31, 2010</li>
        <li>1st Place Oil/Acrylic - Vestavia Art Show 2009</li>
    </ul> -->


</section>

 <div class="contactForm">
    <div class="form-text">
        <p>If you’d like to commission Kelly to paint a portrait or fine art piece for you, or 
    schedule a private art class, contact her for a quote.</p>
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