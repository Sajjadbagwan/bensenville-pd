<?php
/*Template Name: Home Page */
get_header();
$image_slider = get_field('image_slider');
$service_section = get_field('service_section','option');

?>

<?php if(!empty($image_slider)){?>
<section class="home-banner">
	<div class="banner-wrap">
		<div class="owl-carousel owl-theme">
			<?php
			foreach ($image_slider as $slider) {
				$image_array = $slider['slider_image'];
				$image = $image_array['sizes']['home_slider_image'];
				$slider_title = $slider['slider_title'];
				$slider_description = $slider['slider_description'];
				$slider_button_title = $slider['slider_button_title'];
				$slider_button_type = $slider['slider_button_type'];
				$slider_internal_link = $slider['slider_internal_link'];
				$slider_external_link = $slider['slider_external_link'];
				

			?>
			<div class="item">
				<img src="<?php echo $image;?>" alt="">
				<?php if(!empty($slider_title) || !empty($slider_description)){ ?>
				<div class="banner-text">
					<div class="banner-text-iiner">
						<?php if(!empty($slider_title)){?><h3><?php echo $slider_title;?></h3><?php } ?>
						<?php if(!empty($slider_description)){?>
						<div class="baner-text-content">
							<p><?php echo $slider_description;?></p>
							<?php if(!empty($slider_button_title) && $slider_button_type=='Internal'){?>
							<a href="<?php echo $slider_internal_link;?>" class="btn btn-blue"><?php echo $slider_button_title;?></a>
							<?php } ?>
							<?php if(!empty($slider_button_title) && $slider_button_type=='External'){?>
							<a href="<?php echo $slider_external_link;?>" target="_blank" class="btn btn-blue"><?php echo $slider_button_title;?></a>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php }  ?>
		</div>
	</div>
</section>
<?php } ?>
<?php if(!empty($service_section)){?>
<section class="feature-wrap">
	<div class="container">
		<div class="row">
			<?php foreach ($service_section as $services) {
				$service_title = $services['service_title'];
				$service_description = $services['service_description'];
				$service_icon = $services['service_icon'];
				if(!empty($service_title) || !empty($service_description)){
			?>
			<div class="col-w-20">
				<div class="featured-box">
					<i class="fa fa-<?php echo $service_icon;?>"></i>
					<?php if(!empty($service_title)){?><h4 class="featured-title"><a href="#"><?php echo $service_title;?></a></h4><?php } ?>
					<?php if(!empty($service_description)){?><p><?php echo $service_description;?> </p><?php } ?>
				</div>
			</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php } ?>
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date("Y-m-d H:i:s");
$events = tribe_get_events(array('order'=> 'DESC','start_date' => $today ) );
if(!empty($events)){
?>
<section class="upcoming-wrap pad-t-b">
	<div class="container">
		<div class="title yellow-text">
			<h3>Upcoming Events</h3>
		</div>
		<div class="owl-carousel owl-theme">
			<?php
			foreach ($events as $event) {
			$title = $event->post_title;
			$ID = $event->ID;
			$image =wp_get_attachment_image_src( get_post_thumbnail_id($ID),'upcoming_event_image' );
			$startdate = tribe_get_start_date($event,false,'l, F j');
			$enddate = tribe_get_end_date($event,false,'l, F j');	
			if($startdate !=$enddate){
				$date = $startdate .' and '.$enddate;
			}else{
				$date = $startdate;
			} ?>
			<div class="item">
				<div class="upcoming-box bg-cover equal-heigth" style="background-image: url('<?php echo $image[0]; ?>')">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-15x11.png">
					<div class="upcoming-text">
						<?php if(!empty($title)){?><h4 class="upcoming-title"><?php echo $title;?></h4><?php } ?>

						<date><?php echo $date;?></date>
					</div>
					<a href="#" class="link-over"></a>
				</div>
				<a href="<?php echo get_permalink($event->ID);?>" class="link-over"></a>
			</div>
			<?php } ?>
		</div>
		<div class="btn-box text-right">
			<a class="btn btn-yellow" href="<?php echo get_permalink(get_page_by_path('events/'));?>">View all Events in Calender</a>
		</div>
	</div>
</section>
<?php } ?>
<?php
$bensenville_park_title = get_field('bensenville_park_title');
?>
<section class="news pad-t-b bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/newsbg.jpg')">
	<div class="container">
		<div class="row">
			<div class="new-wrapper">
				<?php if(!empty($bensenville_park_title)){?>
				<div class="title">
					<h3><?php echo $bensenville_park_title;?></h3>
				</div>
				<?php } ?>
				<div class="new-content">
					<?php if ( have_posts() ) :
						$args = array(
								'post_status'=> 'publish',
								'order'=> 'DESC',
								'orderby'=> 'date',
								'posts_per_page'=> 4
							);
						$query = new WP_Query($args);
						while ( $query->have_posts() ) : $query->the_post();
							$title =get_the_title();
							$link = get_the_permalink(get_the_ID());
							$content =apply_filters( 'the_content', get_the_content() );
							?>
					<?php if(!empty($title)){?><h4 class="new-title"><a href="<?php echo $link;?>"><?php echo $title;?></a></h4><?php } ?>
					<?php if(!empty($content)){?>
					<?php $count = strlen($content);
										if ($count > 400) {
											echo blog_limitText($content,400).' <a href='.$link.'>Click here to learn more </a>';
										}else{
											echo blog_limitText($content,400);
										}
									?>
					<?php } ?>
					<?php endwhile; endif; ?>

					<div class="btn-box text-left">
						<a class="btn btn-blue" href="<?php echo get_permalink(get_option('page_for_posts'));?>">View more news Items</a>
					</div>
				</div>
			</div>
			<div class="box-wrapper">
				<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>


				<div class="box box-blue mar-t-50">
					<h4 class="new-title">Field & Facility Updates…</h4>
					<div class="detail-box">
						<div class="item clearfix">
							<h5>Bensenville Water Park</h5>
							<span>closed for the season</span>
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
<?php get_footer(); ?>
