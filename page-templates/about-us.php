<?php
/**
 * Template Name: About Us
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
            <h1>About Us</h1>
            <p>Crafting high-quality products that make your life easier</p>
        </div>
        <div class="page-sub__img">
				<img class="page-sub-mainimg" src="<?php echo get_template_directory_uri(); ?>/img/about/about-main.png">
                <div class="sub-page-shape"></div>

        </div>
    </div>
</div>

<div class="mission">
    <div class="container">
        <h2 class="header-2">Our Mission</h2>
        <p>We’re a family-owned and operated manufacturer that creates innovative, flexible, and safe solutions to learn, create and work. We combine leading-edge design with the first-class service. Joro products are designed, built, shipped, and sold by our friends, neighbors, and family with you in mind.</p>
    </div>
</div>

<div class="our-story">
    <div class="container">

        <div class="our-story__img">
            <img class="story-img" src="<?php echo get_template_directory_uri(); ?>/img/about/mask-group13.png">
            <div class="img-text">
                <p>History</p>
                <h2>Our STORY</h2>
            </div>
        </div>
        <div class="our-story__desc">
            <p>
            Our family comes from a long line of builders, creators, designers, and innovators. We founded Joro and FlexDesk in 1996 to create custom, thoughtful workplace solutions that weren’t being built by anyone else. Since that time, we’ve brought our passion for design and flexibility to the classroom and boardroom with ProLIFT mounts, and to the home and workplace with ReachTec mobility products. Our products are proudly designed and manufactured in North America by a tight-knit team who are a part of our family and community.
            </p>
            <span></span>
        </div>
    </div>

</div>









<?php
get_footer();
