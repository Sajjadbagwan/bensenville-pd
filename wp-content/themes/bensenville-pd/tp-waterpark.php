<?php
/**
 Template Name:  Waterpark
 */
get_header();

$id =get_the_ID();
$page=get_page($id); 
$page_link = get_page_link($id);
$page_title = $page->post_title;
$banner = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'waterpark_banner_image' );
$banner_image_array = get_field('banner_image','option');
$banner_image = $banner_image_array['sizes']['waterpark_banner_image'];
$banner_logo_array = get_field('banner_logo');
$banner_logo = $banner_logo_array['sizes']['waterpark_banner_logo'];
$parent_id = wp_get_post_parent_id($id);
if($parent_id != 0){
	$parent_page =get_page($parent_id); 
	$parent_page_link = get_page_link($parent_id);
}
?>
<section class="page-banner">
	<img src="<?php if(!empty($banner)){ echo $banner[0]; } else{ echo $banner_image; } ?>" alt="">
	<div class="breadcrumb">
		<div class="container">
			<ul class="clearfix">
			<?php if(!empty($parent_page)){?>
				<li><a href="<?php echo $parent_page_link;?>"><?php echo $parent_page->post_title;?></a></li>
				<span> > </span>
				<li><a href="<?php echo $page_link;?>"><?php echo $page_title;?> </a></li>
			<?php } else{?>
				<li><a href="<?php echo $page_link;?>"><?php echo $page_title;?> </a></li>
		<?php } ?>
		</ul>
		<?php if(!empty($banner_logo)){?>
		<div class="banner-logo">
				<img src="<?php echo $banner_logo;?>" alt="">
		</div>
		<?php } ?>
		</div>
	</div>
</section>


<section class="history-wrap waterpart-wrap pad-t-b">
	<div class="container">
		<div class="row">
			<div class="new-wrapper">
				<div class="new-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php echo apply_filters('the_content',get_the_content()); ?>
					<?php endwhile; ?>
				</div>
				<?php 
				$slider = get_field('slider');
				if($slider){?>
					<div class="waterpark-slider">
						<div class="owl-carousel owl-theme">
							<?php foreach ($slider as $sliders) {
								$slider_image_array = $sliders['slider_image'];
								$slider_image = $slider_image_array['sizes']['waterpark_slider_image'];

								if(!empty($slider_image)){
							?>
							<div class="item">
								<img src="<?php echo $slider_image; ?>" alt="">
							</div>
							<?php } }  ?>	
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="box-wrapper">
				<div class="box box-bg-gradient clearfix">
					<div class="box-content">
						<h5 class="box-title">About Us</h5>
						<ul>
							<li>Agency News</li>
							<li>Agency Planning</li>
							<li>Board of Commissioners</li>
							<li>Board Meetings</li>
							<li>Calendar of Events</li>
							<li>Employment</li>
							<li>Gift Certificates</li>
							<li>inclusion/NEDSRA</li>
							<li>Legal Requirements</li>
							<li>Links & Community News</li>
							<li>Our History</li>
							<li>Policies & Forms</li>
						</ul>
					</div>
				</div>

    			<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
