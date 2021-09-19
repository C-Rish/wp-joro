<?php
/**
 * Template Name: Prolift
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<body style="background:#ffd876" <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div class="product-main">
	<div class="container">
		<div class="product-main__desc">
			<img class="product-main-logo" src="<?php echo get_template_directory_uri(); ?>/img/prolift/prolift-colored.png">
			<p>Mobile and fixed AV stands that are simple to use, easy to adjust and a breeze to move</p>
			<a href="#" class="btn">Elevate your presentation with ProLIFT</a>
		</div>
		<div class="product-main__img">
			<img class="product-main-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/intimatesettingcopy.png">
			<img class="product-main-shape" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group17.svg">

		</div>
	</div>
</div>

<!-- FEATURES SECTION NOTE: CSS FOR THIS SECTION IN prolift.scss -->
<div class="feature">
	<div class="container">
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/group96.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>Easy to operate</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/group109.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>IFP & IWB compatible</h5>
		</div>
		<div class="feature-item">
			<div class="feature-item__img">
				<img class="feature-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/group108.svg">
				<img class="feature-sub-img" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group14.svg">
			</div>
			<h5>2-year warranty</h5>
		</div>
	</div>
</div>

<div class="teach-bg">
	<div class="teach">
		<div class="teach-left">
			<img class="left-main" src="<?php echo get_template_directory_uri(); ?>/img/prolift/class-left.png">
		</div>
		<div class="teach-title">
			<p>Amplify presentations and teach better with ProLIFT</p>
		</div>
		<div class="teach-para">
			<p>
			From the classroom to the boardroom, Pro-LIFT stands bring motion and flexibility to learning and presentation. With fixed and wall-mounted AV solutions, our stands are compatible with virtually every flat panel, interactive whiteboard and short-throw projector. 
			</p>
			<p>
			Student and administrator approved, our mounts come with a wide array of accessories and electronic height adjustment, all backed with a 2-year warranty.
			</p>
		</div>
		<div class="teach-right">
			<img class="right-main" src="<?php echo get_template_directory_uri(); ?>/img/prolift/Classroom1 copy@2x.png">
		</div>
	</div>
</div>

<div class="stand-mount">
	<div class="container">
		<div class="mobile-stand">
			<div class="mobile-stand__img">
				<img class="stand-main" src="<?php echo get_template_directory_uri(); ?>/img/prolift/prolift2.png">
				<img class="stand-sub" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group11.svg">

			</div>
			<div class="mobile-stand__desc">
				<p>Mobile Stands</p>
				<ul>
					<li><span></span> Easy to move from room to room</li>
					<li><span></span>Simple to operate</li>
					<li><span></span>Electronic height adjustable</li>
				</ul>
				<a href="#" class="see-btn">See our Wall Mounts <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
		
		<div class="mobile-stand">
			<div class="mobile-stand__img">
				<img class="stand-main" src="<?php echo get_template_directory_uri(); ?>/img/prolift/Prolift2-1.png">
				<img class="stand-sub" src="<?php echo get_template_directory_uri(); ?>/img/prolift/mask-group11.svg">

			</div>
			<div class="mobile-stand__desc">
				<p>Wall Mounts</p>
				<ul>
					<li><span></span> Electronic height adjustable</li>
					<li><span></span>Object detection capable</li>
					<li><span></span>Options for screens weighing up to 225 lbs</li>
				</ul>
				<a href="#" class="see-btn">See our Wall Mounts <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
		</div>

	</div>
	<div class="stand-shape"></div>
</div>

<div class="solutions" id="solutions-section">
	<dic class="container">
		<div class="solutions-title">
			<h2 class="header-2">Mobile Stand Solutions</h2>
		</div>
		<div class="solutions-item">
			<a class="item-img" href="#pop-up">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLiftG5ZELT-LTT7FM-10.png">
			</a>
			<span>G5Z-ELT</span>
		</div>
		<div class="solutions-item">
			<div class="item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLiftY7W-Pro-ISOPerspective-Low-TurretClosed.png">
			</div>
			<span>G5Z-ELT</span>
		</div>
		<div class="solutions-item">
			<div class="item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLift FFM-600 - ISO-MidHeight-Perspective@2x.png">
			</div>
			<span>G5Z-ELT</span>
		</div>

	</dic>
</div>
<div class="solutions">
	<dic class="container">
		<div class="solutions-item">
			<div class="item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLiftG5ZELT-LTT7FM-10.png">
			</div>
			<span>G5Z-ELT</span>
		</div>
		<div class="solutions-title2">
			<h2 class="header-2">Wall Mounted Solutions</h2>
		</div>
		<div class="solutions-item">
			<div class="item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLiftY7W-Pro-ISOPerspective-Low-TurretClosed.png">
			</div>
			<span>G5Z-ELT</span>
		</div>
		<div class="solutions-item">
			<div class="item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/ProLift FFM-600 - ISO-MidHeight-Perspective@2x.png">
			</div>
			<span>G5Z-ELT</span>
		</div>

	</dic>
</div>

<div class="solutions-sm">
	<div class="container">
		<div class="solutions-sm-title">
			<h2 class="header-2">ACCESSORIES</h2>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/CordlessRemote-300x300.png">
			</div>
			<span>GLZ-FTA</span>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/G5Z-ACC-DCT-300x300.png">
			</div>
			<span>GLZ-FTA</span>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/G5Z-ACC-SSB-300x300.png">
			</div>
			<span>GLZ-FTA</span>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/G5Z-ACC-TLT-300x300.png">
			</div>
			<span>GLZ-FTA</span>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/G5Z-ACC-VCT-300x300@2x.png">
			</div>
			<span>GLZ-FTA</span>
		</div>
		<div class="solutions-sm-item">
			<div class="sm-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/GSZ-ACC-PCT-300x300.png">
			</div>
			<span>GLZ-FTA</span>
		</div>


	</div>
</div>

<div class="popup" id="pop-up">
	<div class="popup__content">
		<div class="content__left">
			<div class="content-main-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/Prolift2-transparent.png">
			</div>
			<div class="content-sub-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/group168.png">

			</div>
			<div class="content-shape">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prolift/group156.svg">

			</div>
			<a href="#" class="learn-btn">See G5Z-ELT in action</a>
		</div>

		<div class="content-right">
			<h3>G5Z-ELT</h3>
			<p>
			A heavy-duty mobile solution that can accommodate heavier presentation boards and is easily maneuverable from room to room.
			</p>
			<ul>
				<li>Nimble and easily maneuverable</li>
				<li>TV’s up to 180 lbs and comes standard with a VESA Mount</li>
				<li>Accommodates LCD/LED panels up to 75″ diagonal</li>
				<li>Supports LCD/LED/IFP TVs up to 180 lbs</li>
				<li>Electric height adjustment of 22”</li>
				<li>Electric tilt adjustment from 0 to 90 (horizontal to vertical)</li>
				<li>Heavy-duty, 4″ total locking plate mounted castors</li>
				<li>Programmable hand switch mounted on a frame</li>
				<li>Power outlet bar with 6 inputs and 10′cord</li>
			</ul>
			<div class="download">
				<a class = "sell" href="#">Download Sell Sheet</a>
				<a class = "spec" href="#">Download Spec Sheet</a>
			</div>
			<a href="" class="yellow-btn">GET A</a>
		</div>

		<a href="#solutions-section" class="popup-close"><i class="fas fa-times-circle"></i></a>
	</div>
</div>

<div class="questions">
	<div class="container">
		<p class="question-desc">Not sure what you’re looking for?</p>
		<h2 class="header-2">ANSWER A FEW QUESTIONS AND LET US HELP.</h2>
		<div class="questions-form">
			<p class="question">Are you looking for a solution for an educational space or an office space?</p>
			<div class="options-section">

				<a href="#" class="option">Educational</a>
				<a href="#" class="option">Office or Corporate</a>
				<a href="#" class="option">Other</a>
			</div>
			<a href="#" class="yellow-btn">NEXT</a>
		</div>
	</div>
</div>

<div class="video">
	<div class="container">
		<h2 class="header-2">ProLIFT: A Joro Innovation</h2>
		<div class="video-section">
		<iframe src="https://www.youtube.com/embed/0z86zK5D_iI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>






<?php
get_footer();
