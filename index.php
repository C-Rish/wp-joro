<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'page-templates/new' ); ?>
<?php endif; ?>

<body style="background:#89bbe0" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div class="page-sub">
    <div class="container">
        <div class="page-sub__desc">
            <h1>The Innovation Station</h1>
            <p>We’re constantly creating. Stay up to date with our latest projects</p>
        </div>
        <div class="page-sub__img">
				<img class="page-sub-main-new" src="<?php echo get_template_directory_uri(); ?>/img/news/intersection7.png">

        </div>
    </div>
</div>

<div id="primary">
	<main id="main" class="site-main mt-5" role ="main">
		<?php
			if(have_posts() ){
				?>
				<div class="container news-post">
					<?php
						while (have_posts() ): the_post();
						?>
						<div class="single-news">
						<?php
							// the_title();
							the_content();
							the_excerpt();
						?>
						</div>
						<?php
					endwhile;
					?>
				</div>
				<?php
			}
		?>
	</main>
</div>

<?php
get_footer();
