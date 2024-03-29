<?php
/**
 Template Name:  Home page
 */
get_header();
?>




<style type="text/css">
	/*Vertical scrollbar - set width and height of a div you want to add a scrollbar to*/
	#vertical-scrollbar-demo {
		height: 100px;
		width: 400px;
	}

	/*Horizontal scrollbar - set width and height of a div you want to add a scrollbar to*/
	#horizontal-scrollbar-demo {
		width: 400px;
		height: 200px;
	}

	/*Horizontal scrollbar - set width of overview or make it expand horizontal like below*/
	#horizontal-scrollbar-demo .overview {
		/*width: 1836px;*/
		/* or */
		white-space: nowrap;
	}

	#horizontal-scrollbar-demo img {
		height: 180px;
		width: 180px;
	}

	/*Vertical and horizontal scrollbar - set width and height of a div you want to add a scrollbar to*/
	#vertical-horizontal-scrollbar-demo {
		width: 400px;
		height: 200px;
	}

	#vertical-horizontal-scrollbar-demo .overview {
		width: 600px;
	}

	/* Vertical and horizontal scrollbar - one extra step required - add width of overview - overall width of scrolled content*/
	#min-thumb-size-demo .overview {
		width: 600px;
	}

	/*Vertical and horizontal scrollbar - set width and height of a div you want to add a scrollbar to*/
	#min-thumb-size-demo {
		width: 400px;
		height: 200px;
	}

	/* Vertical and horizontal scrollbar - one extra step required - add width of overview - overall width of scrolled content*/
	#min-thumb-size-demo .overview {
		width: 600px;
	}

	#min-thumb-size-demo .vertical .thumb {
		min-height: 150px;
	}

	#min-thumb-size-demo .horizontal .thumb {
		min-width: 300px;
	}

	#fixed-thumb-size-demo {
		width: 400px;
		height: 200px;
	}

	/* Vertical and horizontal scrollbar - one extra step required - add width of overview - overall width of scrolled content*/
	#fixed-thumb-size-demo .overview {
		width: 600px;
	}

	/*No scrollbar needed*/
	#no-scrollbar-needed {
		max-height: 100px;
		max-width: 400px;
	}

</style>



<div id="vertical-horizontal-scrollbar-demo" class="default-skin demo">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed,
	lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
	Quisque
	semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed
	posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel
	tempus
	metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
	Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus
	eget
	nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi,
	in
	interdum massa nibh nec erat.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed,
	lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
	Quisque
	semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed
	posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel
	tempus
	metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
	Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus
	eget
	nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi,
	in
	interdum massa nibh nec erat.
</div>




<section class="home-banner">
	<div class="banner-wrap">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
				<div class="banner-text">
					<div class="banner-text-iiner">
						<h3>Watre park passes 15% OFF Through April 30th</h3>
						<div class="baner-text-content">
							<p>Passes availabel at Deert Grove Leirsure Center.</p>
							<a href="" class="btn btn-blue">Get Your Passes Now</a>
						</div>
					</div>
				</div>
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
			<div class="col-w-20">
				<div class="featured-box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/book.png" alt="book">
					<h4 class="featured-title">Our Program Guide</h4>
					<p>We Offer daily programs for all days</p>
				</div>
			</div>
			<div class="col-w-20">
				<div class="featured-box">
					<i class="fa fa-calendar"></i>
					<h4 class="featured-title">Calendar of Events</h4>
					<p>check out what’s coming up in the future</p>
				</div>
			</div>
			<div class="col-w-20">
				<div class="featured-box">
					<i class="fa fa-map"></i>
					<h4 class="featured-title">Find a Park or Facility</h4>
					<p>browse or search our interactive map</p>
				</div>
			</div>
			<div class="col-w-20">
				<div class="featured-box">
					<i class="fa fa-umbrella"></i>
					<h4 class="featured-title">Updates & Closures</h4>
					<p>find out about recently cancelled classes and events</p>
				</div>
			</div>
			<div class="col-w-20">
				<div class="featured-box">
					<i class="fa fa-users"></i>
					<h4 class="featured-title">Join the Team</h4>
					<p>find out about job opportunities with us</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="upcoming-wrap pad-t-b">
	<div class="container">
		<div class="title yellow-text">
			<h3>Upcoming Events</h3>
		</div>
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_1.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<h4 class="upcoming-title">12th Annual All Around the house Quit Show</h4>
						<date>Saturday, March 30 and Sunday, March 31</date>
					</div>
					<a href="http://www.sencio.org.uk/memberships/all-in-one/" class="link-over"></a>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_2.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<h4 class="upcoming-title">Egg Hunt & Eggstravaganza</h4>
						<date>Saturday, April 13</date>
					</div>
					<a href="http://www.sencio.org.uk/memberships/all-in-one/" class="link-over"></a>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_2.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<h4 class="upcoming-title">Easter Basket Delivery</h4>
						<date>Saturday, April 13</date>
					</div>
					<a href="http://www.sencio.org.uk/memberships/all-in-one/" class="link-over"></a>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_4.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<h4 class="upcoming-title">Flashlight Egg Hunt</h4>
						<date>Thursday, April 18</date>
					</div>
					<a href="http://www.sencio.org.uk/memberships/all-in-one/" class="link-over"></a>
				</div>
			</div>
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/upcomingevents_2.jpg')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<h4 class="upcoming-title">Egg Hunt & Eggstravaganza</h4>
						<date>Saturday, April 13</date>
						<a href="http://www.sencio.org.uk/memberships/all-in-one/" class="link-over"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="btn-box text-right">
			<a class="btn btn-yellow">View all Events in Calender</a>
		</div>
	</div>
</section>

<section class="news pad-t-b bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/newsbg.jpg')">
	<div class="container">
		<div class="row">
			<div class="new-wrapper">
				<div class="title">
					<h3>Bensenville Park district News</h3>
				</div>
				<div class="new-content">
					<h4 class="new-title">New Cardio Equipment</h4>
					<p>Ten new state-of-the-art cardio fitness machines have been installed, including ellipticals, upright and recumbent cycles, an indoor rower and more. Fitness Attendants will be on hand to help instruct patrons on the new equipment. <a href="">Check out our Fitness Center</a></p>

					<h4 class="new-title">Learn to Swim Program</h4>
					<p>Reasons why your child should learn to swim are many and varied. The most important is that swimming is a skill that can save your child’s life. The Bensenville Park District offers group and private swim lessons for every age, with flexible and convenient hours. <a href="">Click here for the class schedule</a></p>

					<h4 class="new-title">Free Fitness – Try Us!</h4>
					<p>The Fitness Center and all fitness classes will be complimentary May 29 – June 4. <a href=""> Click here for the class schedule</a></p>

					<h4 class="new-title">Healthy for Life</h4>
					<p>The FORWARD Coalition of DuPage County empowers community leaders to create sustainable policy, system, and environmental changes to improve healthy eating and active living opportunities for residents. Lou Ann Chvatal, Registered Dietitian Nutritionist, Exercise Physiologist and Certified Personal Trainer, is an active member of the FORWARD Coalition and is making strides to bring Healthy for Life, Classes for Families to Bensenville Park District <a href="">Click here to learn more</a></p>

					<div class="btn-box text-left">
						<a class="btn btn-blue">View more news Items</a>
					</div>
				</div>
			</div>
			<div class="box-wrapper">
				<div class="box box-bg-gradient clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/images/boximg.jpg" alt="">
					<div class="box-content">
						<h5 class="box-title">Winter/Spring 2019 Program Guide</h5>
						<p>REGISTRATION BEGINS DEC 4th!</p>
						<a href="" class="box-link"><i class="fa fa-angle-right"></i> Download Current Brochure</a>
						<a href="" class="box-link"><i class="fa fa-angle-right"></i> Past Brochures & Registration Info</a>
					</div>
				</div>

				<div class="box box-blue mar-t-50">
					<h4 class="new-title">Field & Facility Updates…</h4>
					<div class="detail-box">
						<div class="item clearfix">
							<h5>Bensenville Water Park</h5>
							<span>closed for the season</spann>
						</div>
						<div class="item clearfix">
							<h5>Deer Grove Leisure Center</h5>
							<span>Open</span>
						</div>
						<div class="item clearfix">
							<h5>Fisher Farm</h5>
							<span>Open</span>
						</div>
						<div class="item clearfix">
							<h5>Water Park & Splash Pad</h5>
							<span>closed for the season</span>
						</div>
						<div class="item clearfix">
							<h5>Hyatt-Hubbard Site</h5>
							<span>open</span>
						</div>
						<div class="item clearfix">
							<h5>Lions Park</h5>
							<span>Open</span>
						</div>
						<div class="item clearfix">
							<h5>Popular Park</h5>
							<span>Open</span>
						</div>
						<div class="item clearfix">
							<h5>Rose Park</h5>
							<span>Open</span>
						</div>
						<div class="item clearfix">
							<h5>Rose Park</h5>
							<span>Open</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<script type="text/javascript">


</script>


<?php get_footer(); ?>
