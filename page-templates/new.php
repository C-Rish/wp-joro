<?php
/**
 * Template Name: New
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
            <h1>The Innovation Station</h1>
            <p>We’re constantly creating. Stay up to date with our latest projects</p>
        </div>
        <div class="page-sub__img">
				<img class="page-sub-main-new" src="<?php echo get_template_directory_uri(); ?>/img/news/intersection7.png">

        </div>
    </div>
</div>

<div class="news-section">
    <div class="container">
        <div class="news-sm">
            <div class="sm-img">
                <img class="sm-main" src="<?php echo get_template_directory_uri(); ?>/img/news/sm-news.png">
            </div>
            <div class="sm-desc">
                <p class="news-title">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa.
                </p>
                <p class="news-para">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis.
                </p>
                <p class="news-name">
                <i class="fas fa-globe"></i>
                    Long Name Here
                </p>
               
                <p class="news-time"><i class="far fa-clock"></i> 1h ago</p>
            </div>
        </div>
        <div class="news-lg">
            <div class="lg-img">
                <img class="lg-main" src="<?php echo get_template_directory_uri(); ?>/img/news/news-lg.png">
            </div>
            <div class="lg-desc">
                <p class="news-title">
                The Most Ergonomic Standing Desk in Town: FlexDesk
                </p>
                <p class="news-name">
                <i class="fas fa-globe"></i>
                    Long Name Here
                </p>
               
                <p class="news-time"><i class="far fa-clock"></i> 1h ago</p>
                <p class="news-para">

                Are you hunching forward to read this? Sitting for long periods of time with poorly designed office furniture can really do a number on you. But it’s not just your posture that takes the hit, it’s your performance, too. The good news is these pains and strains are completely avoidable. The right kind of desk means fewer visits to the doctor and boosted performance for you and your entire team.

                You should be rewarded for your creativity, focus, and hard work – and FlexDesk does just that. It’s the ergonomic solution that puts your health first.

                When you’ve got clients to wow, deadlines to meet, and virtual meetings to attend, you’ll want to be on your A-game. Here are three ways FlexDesk can transform your health and boost your productivity so that you’re always on top of it.
                </p>
                <a href="#" class="learn-btn">Learn More</a>
            </div>
        </div>
        <div class="news-sm-2">
            <div class="sm-img">
                <img class="sm-main" src="<?php echo get_template_directory_uri(); ?>/img/news/sm-news-2.png">
            </div>
            <div class="sm-desc">
                <p class="news-title">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa.
                </p>
                <p class="news-para">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis.
                </p>
                <p class="news-name">
                <i class="fas fa-globe"></i>
                    Long Name Here
                </p>
               
                <p class="news-time"><i class="far fa-clock"></i> 1h ago</p>
            </div>
        </div>
        <div class="news-md">
            <div class="md-img">
                <img class="md-main" src="<?php echo get_template_directory_uri(); ?>/img/news/md-news.png">
            </div>
            <div class="md-desc">
                <p class="news-title">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa.
                </p>
                <p class="news-name">
                <i class="fas fa-globe"></i>
                    Long Name Here
                </p>
               
                <p class="news-time"><i class="far fa-clock"></i> 1h ago</p>
                <p class="news-para">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis.
                </p>
   
            </div>
        </div>
        <div class="news-sm-3">
            <div class="sm-img">
                <img class="sm-main" src="<?php echo get_template_directory_uri(); ?>/img/news/sm-news-3.png">
            </div>
            <div class="sm-desc">
                <p class="news-title">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa.
                </p>
                <p class="news-para">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis.
                </p>
                <p class="news-name">
                <i class="fas fa-globe"></i>
                    Long Name Here
                </p>
               
                <p class="news-time"><i class="far fa-clock"></i> 1h ago</p>
            </div>
        </div>

    </div>
    <div class="button">
        <a href="#" class="yellow-btn">CONTACT US</a>

    </div>
</div>





<?php
get_footer();
