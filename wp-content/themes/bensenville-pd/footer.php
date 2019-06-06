<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bensenville-pd
 */

?>

</div><!-- #content -->

<?php 
	$logo_text = get_field('logo_text','option');
	$address = get_field('address','option');
	$phone_number = get_field('phone_number','option');
	$newsletter_shortcode = get_field('newsletter_shortcode','option');
	$service_section = get_field('service_section','option');
if(!empty($service_section) && (!is_front_page())){?>

<div class="feature-wrap featured-footer">
	<div class="container">
		<div class="row">
			<?php foreach ($service_section as $services) {
		$service_title = $services['service_title'];
		$service_icon = $services['service_icon'];
		if($service_icon == 'book'){
			$icon_class ='fas fa-book';
		}elseif ($service_icon == 'umbrella') {
			$icon_class = 'fas fa-umbrella';	
		}elseif ($service_icon == 'calendar') {
			$icon_class = 'fas fa-calendar-alt';	
		}elseif ($service_icon == 'map') {
			$icon_class = 'far fa-map';	
		}elseif ($service_icon == 'users') {
			$icon_class = 'fas fa-users';	
		}else{
			$icon_class = '';	
		}
		$service_link_type = $services['service_link_type'];
		$service_internal_link = $services['service_internal_link'];
		$service_external_link = $services['service_external_link'];
		if(!empty($service_title)){
		?>
			<div class="col-w-20">
				<div class="featured-footer-box">
					<i class="<?php echo $icon_class; ?>"></i>
					<?php if(!empty($service_title) && $service_link_type == 'Internal'){?>
						<h4 class="featured-title"> <a href="<?php echo $service_internal_link;?>"><?php echo $service_title;?></a></h4>
					<?php } ?>
					<?php if(!empty($service_title) && $service_link_type == 'External'){?>
						<h4 class="featured-title"> <a href="<?php echo $service_external_link;?>" target="_blank"><?php echo $service_title;?></a></h4>
					<?php } ?>
				</div>
			</div>
			<?php } }  ?>

		</div>
	</div>
</div>

<?php } ?>
<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-22">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="footer-logo"></a>
						<?php if(!empty($logo_text)){?><p class="text-right"><?php echo $logo_text;?></p><?php } ?>
					</div>
				</div>
				<div class="footer-col-16">
					<div class="footer-contact-box">
						<?php if(!empty($address)){?><p><?php echo $address;?></p><?php } ?>
						<?php if(!empty($phone_number)){?><a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a><?php } ?>
					</div>
				</div>
				<div class="footer-col-50">
					<div class="newsletter">
						<?php echo do_shortcode($newsletter_shortcode);?>
					</div>
				</div>
				<div class="footer-col-12 pad-t-30">
					<div id="google_translate_element"></div>

					<p class="copyright">&copy; <?php echo date('Y');?> Bensenville Park District, All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
