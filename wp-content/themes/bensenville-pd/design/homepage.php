<?php
/**
 Template Name:  Home page
 */
get_header();
?>

<section class="home-banner">
	<div class="banner-wrap">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<section class="feature-wrap">
	<div class="container">
		<div class="row">
			<div class="col-5 col-sm-12">
				<div class="featured-box">
					<i class="fa fa-umbrella"></i>
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days </p>
				</div>
			</div>
			<div class="col-5 col-sm-12">
				<div class="featured-box">
					<i class="fa fa-calenda"></i>
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days </p>
				</div>
			</div>
			<div class="col-5 col-sm-12">
				<div class="featured-box">
					<i class="fa fa-umbrella"></i>
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days </p>
				</div>
			</div>
			<div class="col-5 col-sm-12">
				<div class="featured-box">
					<i class="fa fa-umbrella"></i>
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days </p>
				</div>
			</div>
			<div class="col-5 col-sm-12">
				<div class="featured-box">
					<i class="fa fa-users"></i>
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days </p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="upcoming-wrap">
	<div class="container">
		<div class="title yellow-text">
			<h3>Upcoming Events</h3>
		</div>
		<div class="">
			<div class="item">
				<div class="upcoming-box bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_1.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
					<date>Saturday, March 30 and Sunday, March 31</date>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_2.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
					<date>Saturday, March 30 and Sunday, March 31</date>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_2.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
					<date>Saturday, March 30 and Sunday, March 31</date>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_4.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
					<date>Saturday, March 30 and Sunday, March 31</date>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_5.jpg')">
					<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
					<date>Saturday, March 30 and Sunday, March 31</date>
				</div>
			</div>
		</div>
		<div class="btn-box text-right">
			<a class="btn btn-yellow">View all Events in Calender</a>
		</div>
	</div>
</section>

<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<div class="title">
					<h3>Bensenville Park district News</h3>
				</div>
				<div class="new-content">
					<h4 class="new-title">New Cardio Equipment</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="">Check out our Fitness center</a></p>

					<h4 class="new-title">New Cardio Equipment</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="">Check out our Fitness center</a></p>

					<h4 class="new-title">New Cardio Equipment</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="">Check out our Fitness center</a></p>

					<h4 class="new-title">New Cardio Equipment</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="">Check out our Fitness center</a></p>

					<div class="btn-box text-left">
						<a class="btn btn-blue">View all Events in Calender</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12"></div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
