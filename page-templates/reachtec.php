<?php
/**
 * Template Name: Reachtec
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<body style="background:#88e2a6" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div class="product-main">
	<div class="container">
		<div class="product-main__desc">
			<img class="product-main-logo" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/reachtec-colored.png">
			<p>A custom, easy to install solution that adds functionality to your new & existing cabinets</p>
			<a href="#" class="btn">Explore ReachTec systems</a>
		</div>
		<div class="product-main__img">
			<img class="product-main-img" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/Flexdesk thumbnail2.png">
			<img class="product-main-shape" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group17.svg">

		</div>
	</div>
</div>

<!-- FEATURES SECTION NOTE: CSS FOR THIS SECTION IN prolift.scss -->
<div class="feature">
	<div class="container">
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/group96.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>No more climbing to reach the top shelves</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/group109.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Easy to glide up and down</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/group108.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Storage space becomes accessible to all</h5>
		</div>
	</div>
</div>

<!-- THIS SECTION IS IN PRLIFT AND REACHTEC NOTE: CSS IN PROLIFT.SCSS -->

<div class="teach-bg">
	<div class="teach">
		<div class="teach-left">
			<img class="left-main" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/reachtec-women.png">
		</div>
		<div class="teach-title">
			<p>We make cabinets do amazing things</p>
		</div>
		<div class="teach-para">
			<p>
			ReachTec brings a new level of accessibility and safety into the home or workplace.Easily mounted to most existing cabinet systems, ReachTec allows anyone to easily glide cabinets within easy reach. Our systems are simple to install for anyone with cabinet experience, and the mounting hardware is never visible, preserving the aesthetics of new and existing rooms. 
			</p>
			<p>
			Our systems are safe and tested in accordance with CSA standards.
			</p>
		</div>
		<div class="teach-right">
			<img class="right-main" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/rt-thumbnail-right.png">
		</div>
	</div>
</div>

<div class="reachtec-card-section">
	<div class="container">
		<div class="reachtec-card">
			<div class="card-img">
				<img class="card-main" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/kitchen-12.png">
			</div>
			<div class="card-desc">
				<h5>Pocket Series</h5>
				<p>
				The Pocket Series is designed for shorter wall cabinet applications. The upper wall cabinet may be lowered to enable you to reach the upper shelf. The 9” height adjustment will lower the cabinet to a height above the standard wall plug. At the same time, you can reach the top shelf of your 30” tall cabinet.
				</p>
				<a href="#" class="download">Download Brochure</a>
			</div>
		</div> <!-- REACHTEC CARD END -->
		<div class="reachtec-card">
			<div class="card-img">
				<img class="card-main" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/laundry_01-300x212.png">
			</div>
			<div class="card-desc">
				<h5>Laundrette Series</h5>
				<p>
				The Laundrette series allows you to have two cabinets mounted above your washer and dryer and even have some open shelving in between. The system features a 9” height adjustment range and lowers the cabinet and shelf combination to a height that does not interfere with the plumbing and electrical for your equipment.
				</p>
				<a href="#" class="download">Download Brochure</a>
			</div>
		</div> <!-- REACHTEC CARD END -->
		<div class="reachtec-card">
			<div class="card-img">
				<img class="card-main" src="<?php echo get_template_directory_uri(); ?>/img/reachtec/rt-thumbnail.png">
			</div>
			<div class="card-desc">
				<h5>Organizer Series</h5>
				<p>
				The Organizer Series features an extended height range of 18” and is best suited for the taller cabinets (39” or more). Ideally, this series may be used in an environment where you have a minimum of 9-foot ceilings.
				</p>
				<a href="#" class="download">Download Brochure</a>
			</div>
		</div> <!-- REACHTEC CARD END -->
		
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
