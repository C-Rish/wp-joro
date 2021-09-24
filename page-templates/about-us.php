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

