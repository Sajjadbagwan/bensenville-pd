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
	
?>
<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-20">
					<div class="footer-logo">
						<a href="#" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="footer-logo"></a>
						<?php if(!empty($logo_text)){?><p class="text-right"><?php echo $logo_text;?></p><?php } ?>
					</div>
				</div>
				<div class="footer-col-15">
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
				<div class="footer-col-15">
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
