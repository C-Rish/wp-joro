<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="footer">
    <div class="container">
        <div class="footer-socials">
			<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/home/joro-logo.png">
            <div class="socials">
			    <img class="facebook" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon awesome-phone-alt.svg">
			    <img class="twitter" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon simple-twitter.svg">
			    <img class="youtube" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon simple-youtube.svg">
			    <img class="linkedin" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon metro-linkedin.svg">
            </div>
        </div> <!-- FOOTER SOCIALS END -->
        <div class="footer-nav">
            <a href="#">About Joro</a>
            <a href="#">ProLIFT</a>
            <a href="#">FlexDesk</a>
            <a href="#">ReachTec</a>
            <a href="#">FAQ</a>
            <a href="#">Blog</a>
        </div> <!-- FOOTER NAV END -->
        <div class="footer-contact">
            <p>Contact Info</p>
            <div class="phone">
                <img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon awesome-phone-alt.svg"> 
                <p>1-403-948-0411</p>
            </div>
            <div class="address">
                <img class="address-icon" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon ionic-md-pin.svg"> 
                <p>48 East Lake Green NE, Airdrie, AB T4A 2J2, Canada</p>
            </div>
        </div> <!-- FOOTER CONTACT END -->
        <div class="footer-form">
            <p>Enter your email to stay up to date on all Joro News</p>
			  <!-- <?php echo do_shortcode( '[contact-form-7 id="22" title="Footer Form"]' ); ?> -->
              <div class="subscribe">
                  <input type="email" placeholder="Email Address">
                  <a class="submit"><i class="fas fa-paper-plane"></i></a>
              </div>
        </div> <!-- FOOTER FORM END -->
        
    </div> <!-- FOOTER CONTAINER END -->
</div> <!-- FOOTER END -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

