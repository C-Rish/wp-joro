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

<div class="different">
    <h2 class="header-2">What Makes Us Different</h2>
    <div class="container">
        <div class="left">
            <div class="different-item">
                <div class="diff-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/group352.png">
                </div>
                <div class="diff-desc">
                    <h3>Our Manufacturing Process</h3>
                    <p>
                    Joro products are proudly manufactured in North America. This allows us to continually improve our processes and ensure high quality output.
                    </p>
                </div>
            </div>
            <div class="different-item">
                <div class="diff-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/group426.png">
                </div>
                <div class="diff-desc">
                    <h3>Our Level of Service</h3>
                    <p>
                    When you call, we answer. If you have an issue with any of our products, you talk to a real life human… in fact, you talk to the same people who designed, built and shipped them to you!
                    </p>
                </div>
            </div>
        </div> <!-- LEFT END -->
        <div class="right">
            <div class="different-item">
                <div class="diff-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/group245.png">
                </div>
                <div class="diff-desc">
                    <h3>Our Designs</h3>
                    <p>
                    We build with you, the customer in mind. We design products that are backed by science and expertise. Our solutions are designed to fit your individual and spatial needs.
                    </p>
                </div>
            </div>
            <div class="different-item">
                <div class="diff-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/group303.png">
                </div>
                <div class="diff-desc">
                    <h3>Custom Options</h3>
                    <p>
                    We know that each customer will have different needs. While we have our signature line, we also have the ability to adjust and alter to suit your needs, whatever they may be.
                    </p>
                </div>
            </div>
        </div> <!-- RIGHT END -->
    </div> <!-- CONTAINER END -->
    <a href="#" class="btn">Let’s get started</a>
</div>









<?php
get_footer();
