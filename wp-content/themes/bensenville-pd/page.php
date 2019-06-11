<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bensenville-pd
 */

get_header();

$id =get_the_ID();
$page=get_page($id); 
$page_link = get_page_link($id);
$page_title = $page->post_title;
$banner = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'inner_banner_image' );
$banner_image_array = get_field('banner_image','option');
$banner_image = $banner_image_array['sizes']['inner_banner_image'];
$banner_logo = get_field('banner_logo');
$parent_id = wp_get_post_parent_id($id);
if($parent_id != 0){
	$parent_page =get_page($parent_id); 
	$parent_page_link = get_page_link($parent_id);
}
?>
<section class="page-banner">
	
	<div class="page-banner-img bg-cover" style="background-image: url('<?php if(!empty($banner)){ echo $banner[0]; } else{ echo $banner_image; } ?>');">
		
		<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-24x4.png" alt="">
	</div>
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
		</div>
	</div>
</section>


<section class="news pad-t-b history-wrap">
	<div class="container">
		<div class="row">
			<div class="new-wrapper">
				<?php if(!empty($page_title)){?>
				<div class="title">
					<h3><?php echo $page_title;?></h3>
				</div>
				<?php } ?>
				<div class="new-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php echo apply_filters('the_content',get_the_content()); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="box-wrapper">
				
				<div class="box box-bg-gradient clearfix">
					<div class="box-content">
						<h5 class="box-title">About Us</h5>
						<ul>
							<li><a href="#">Agency News</a></li>
							<li><a href="#">Agency Planning</a></li>
							<li><a href="#">Board of Commissioners</a></li>
							<li><a href="#">Board Meetings</a></li>
							<li><a href="#">Calendar of Events</a></li>
							<li><a href="#">Employment</a></li>
							<li><a href="#">Gift Certificates</a></li>
							<li><a href="#">inclusion/NEDSRA</a></li>
							<li><a href="#">Legal Requirements</a></li>
							<li><a href="#">Links & Community News</a></li>
							<li><a href="#">Our History</a></li>
							<li><a href="#">Policies & Forms</a></li>
						</ul>
					</div>
				</div>
    			<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>
			
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
