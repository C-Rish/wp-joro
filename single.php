<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<body style="background:#89bbe0" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>


<div class="wrapper" id="single-wrapper">


		<div class="row">



			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.

				}
				?>

			</main><!-- #main -->


		</div><!-- .row -->


</div><!-- #single-wrapper -->

<?php
get_footer();
