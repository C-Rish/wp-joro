<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<body style="background:#89bbe0" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div class="page-sub">
    <div class="container">
        <div class="page-sub__desc">
            <h1>Contact Us</h1>
            <p class="mb-5">Want to learn more about our products? Or would you like a quote for your home, school or business? .</p>
            <p>Our team would love to hear from you</p>
        </div>
        <div class="page-sub__img">
				<img class="page-sub-main-new" style="box-shadow:none;" src="<?php echo get_template_directory_uri(); ?>/img/contact/contact-main.png">
                <div class="sub-page-shape"></div>

        </div>
    </div>
</div>

<div class="touch-section">
    <h2 class="header-2">Get in touch with us!</h2>
    <div class="socials">
			    <img class="facebook" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon awesome-phone-alt.svg">
			    <img class="twitter" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon simple-twitter.svg">
			    <img class="youtube" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon simple-youtube.svg">
			    <img class="linkedin" src="<?php echo get_template_directory_uri(); ?>/img/home/Icon metro-linkedin.svg">
            </div>
</div>

<div class="contact-cards">
    <div class="container">
        <div class="contact-card">
          <i class="fas fa-envelope"></i>
          <p>inquiries@joromfg.com</p>
        </div>
        <div class="contact-card">
        <i class="fas fa-phone"></i>
          <p>1-403-948-0411</p>
        </div>
        <div class="contact-card">
        <i class="fas fa-map-marker-alt"></i>
          <p>48 East Lake Green NE, Airdrie, AB T4A 2J2, Canada</p>
        </div>
    </div>
</div>

<div class="contact-form-section" style="background:#ffffff">
	<div class="container">
		<p class="form-title">Not sure what you’re looking for?</p>
		<h2 class="header-2">Get in touch with us.</h2>
		<?php echo do_shortcode( '[contact-form-7 id="30" title="Contact Form"]' ); ?>
	</div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10184912.745326975!2d-99.76580949806493!3d51.4480399243034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1632196893498!5m2!1sen!2snp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="seller-card">
        <div class="seller-loca">
            <h4>Find a reseller near you!</h4>
            <div class="seller-country">
                <a href="#" class="canada active">Canada</a>
                <a href="#" class="usa">U.S.A</a>
            </div>
        </div>
        <div class="seller">
            <div class="seller-desc">
                <h5>Reseller 1</h5>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                </p>
            </div>
            <div class="seller-desc">
                <h5>Reseller 1</h5>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                </p>
            </div>
            <div class="seller-desc">
                <h5>Reseller 1</h5>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                </p>
            </div>
        </div>
    </div>
</div>





<?php
get_footer();
