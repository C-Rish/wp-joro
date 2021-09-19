<?php
/**
 * Template Name: Flexdesk
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<body style="background:#89BBE0" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div class="product-main">
	<div class="container">
		<div class="product-main__desc">
			<img class="product-main-logo" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/flexdesk-logo.png">
			<p>A desk solution that adjusts to your working style, giving you an option to stand and de-stress while increasing your productivity</p>
			<a href="#" class="btn">Explore FlexDesk</a>
		</div>
		<div class="product-main__img">
			<img class="product-main-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/flexdesk-main.png">
			<img class="product-main-shape" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group17.svg">

		</div>
	</div>
</div>

<!-- FEATURES SECTION NOTE: CSS FOR THIS SECTION IN prolift.scss -->
<div class="feature">
	<div class="container">
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/group96.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Improve health and wellness</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/group109.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Increase efficiency and productivity</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/group108.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Customizable options</h5>
		</div>
	</div>
</div>

<div class="flexdesk-main">
	<div class="container">
		<div class="learn-section">
			<div class="learn-desc">
				<h3>Work, create and learn better with FlexDesk</h3>
				<p>
				The FlexDesk allows you to easily switch between a sitting and standing desk, thus reducing the strain on your neck, shoulder and spine. As well, studies have shown that switching between sitting and standing at your desk can help improve your productivity, concentration, and efficiency, with increased blood flow to the brain. 
				</p>
				<p>
				Our FlexDesk series is fully customizable to your needs and space. We can create anything from a small personal workstation to large interactive boardroom tables with our system. With the ability to adjust your desk with the touch of a button, your workspace can be transformed, and trust us, your back will thank you.
				</p>
			</div> <!-- LEARN DESC END -->
			<div class="learn-img">
				<img class="learn-main-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/flex-thumb.png">
				<img class="learn-shape" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/intersection6.svg">
			</div> <!-- LEARN IMG END -->
		</div> <!-- LEARN SECTION END -->

		<div class="flexdesk-section">
			<div class="flexdesk-img">
				<img class="flexdesk-main-img" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/flexdesk1.png">
				<img class="flexdesk-shape" src="<?php echo get_template_directory_uri(); ?>/img/flexdesk/group139.svg">
			</div> <!-- FLEXDESK IMG END -->
			<div class="flexdesk-desc">
				<h3>Explore FlexDesk possibilities</h3>
				<ul>
					<li><span></span> Customizable options to suit your needs</li>
					<li><span></span>Electric or crank (manual) adjusted</li>
					<li><span></span>High quality clear anodized (silver look) or black frame finish</li>
					<li><span></span>Programmable switch with position readout and user-defined memory settings</li>
					<li><span></span>Adjustment range of up to 26.5" (with our E-Series)</li>
					<li><span></span>Wide selection of work surface finishes</li>
					<li><span></span>Boardroom table features multiple adjustable place settings</li>
					<li><span></span>Adjusted with a low profile up/down switch at a rate of 1.5" per second</li>
					<li><span></span>FlexDesk technology can be applied to existing workstations</li>
					<li><span></span>For home, office, medical and light industrial uses</li>
				</ul>
			</div> <!-- FLEXDESK DESC END -->
		</div> <!-- FLEXDESK SECTION END -->
	</div>
</div>

<div class="flexdesk-video">
	<div class="container">
		<iframe src="https://www.youtube.com/embed/C2sM3MKlLbY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
		<a href="#" class="brochure">Download Brochure</a>
	</div>
</div>

<div class="contact-form-section">
	<div class="container">
		<p class="form-title">Not sure what you’re looking for?</p>
		<h2 class="header-2">Get in touch with us.</h2>
		<?php echo do_shortcode( '[contact-form-7 id="30" title="Contact Form"]' ); ?>
	</div>
</div>


<?php
get_footer();
