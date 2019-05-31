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
$banner = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full' );
$banner_image = get_field('banner_image','option');
$parent_id = wp_get_post_parent_id($id);
if($parent_id != 0){
	$parent_page =get_page($parent_id); 
	$parent_page_link = get_page_link($parent_id);
}
?>
<section class="page-banner">
	<img src="<?php if(!empty($banner)){ echo $banner[0]; } else{ echo $banner_image['url']; } ?>" alt="">
	<div class="page-title">
		<p>
			<?php if(!empty($parent_page)){?>
				<a href="<?php echo $parent_page_link;?>"><?php echo $parent_page->post_title;?></a>
				<span> > </span>
				<a href="<?php echo $page_link;?>"><?php echo $page_title;?> </a>
			<?php } else{?>
				<a href="<?php echo $page_link;?>"><?php echo $page_title;?> </a>
		<?php } ?>
		</p>
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
				<?php
				$sidebar = get_field('sidebar');
				$sidebar_option = $sidebar[0];
				if($sidebar_option == 'Yes'){
				?>
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
			<?php } ?>
    			<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
