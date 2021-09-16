<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-main">
	<div class="container">
		<div class="home-main__section">
			<div class="main-section__img">
				<img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/home/home-main1.png">
				<div class="main-img-shape1"></div>
				<div class="main-img-shape2"></div>
				<img class="sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/mask-group10.svg">
			</div>
			<div class="main-section__desc">
				<h1>Elevate Your Workspace</h1>
				<p>Solutions that improve productivity, comfort, and mobility by design.</p>
				<a href="" class="btn">Explore Joro’s Solutions</a>
			</div>
		</div>

	</div>
</div>

<div class="our-products">
	<div class="container">
		<div class="our-products-card">
			<div class="our-products-card__img">
				<img class="our-card-img" src="<?php echo get_template_directory_uri(); ?>/img/home/flexdesk1.png">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/mask-group10.svg">
			</div>
			<div class="our-products-card__desc">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/Flexdesk-Colored.png">
				<p>
				Improve posture and wellness with custom sit/stand solutions from workstations to boardroom tables.
				</p>
				<a href="" class="learn">Learn More <i class="fas fas-long-arrow-alt-right"></i></a>
			</div>
		</div>

		<div class="our-products-card">
			<div class="our-products-card__img">
				<img class="our-card-img" src="<?php echo get_template_directory_uri(); ?>/img/home/Prolift2.png">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/mask-group10.svg">
			</div>
			<div class="our-products-card__desc">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/Prolift-colored.png">
				<p>
				Improve posture and wellness with custom sit/stand solutions from workstations to boardroom tables.
				</p>
				<a href="" class="learn">Learn More <i class="fas fas-long-arrow-alt-right"></i></a>
			</div>
		</div>

		<div class="our-products-card">
			<div class="our-products-card__img">
				<img class="our-card-img" src="<?php echo get_template_directory_uri(); ?>/img/home/Reachtec3.png">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/mask-group10.svg">
			</div>
			<div class="our-products-card__desc">
				<img class="our-card-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/home/Reachtec-colored.png">
				<p>
				Improve posture and wellness with custom sit/stand solutions from workstations to boardroom tables.
				</p>
				<a href="" class="learn">Learn More <i class="fas fas-long-arrow-alt-right"></i></a>
			</div>
		</div>


	</div>
</div>

<div class="purpose">
	<div class="purpose-img">
		<img class="purpose-main-img" src="<?php echo get_template_directory_uri(); ?>/img/home/group-19.png">
		<div class="purpose-main-text">
			<p>About Us</p>
			<h3 class="header-3-yellow">Our Purpose</h3>
		</div>
	</div>
	<div class="purpose-desc">
		<div class="purpose-desc__list">
			<img class="purpose-main-img" src="<?php echo get_template_directory_uri(); ?>/img/home/group-18.svg">
			<p>We are a family-owned and operated manufacturer that brings mobility and flexibility to your home and workspace.</p>
		</div>
		<div class="purpose-desc__list">
			<img class="purpose-main-img" src="<?php echo get_template_directory_uri(); ?>/img/home/group-18.svg">
			<p>
				Our team combines leading-edge design with first-class service. Joro products are designed and customized for you, and manufactured locally, and shipped straight to your home, your office, or your classroom.
			</p>
		</div>
		<a href="" class="learn-btn">Learn More</a>
	</div>
</div>

<?php
get_footer();
