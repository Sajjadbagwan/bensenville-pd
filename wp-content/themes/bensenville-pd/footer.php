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

<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="footer-logo">
						<a href="#" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="footer-logo"></a>
						<p class="text-right">“It’s all Around You”</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-contact-box">
						<p>1000 W. Wood St. Bensenville Illinois 60106</p>
						<a href="tel:630-766-7015">630-766-7015</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="newsletter">
						<h5>Newsletter Signup</h5>
						<p>Sign up for our email newsletter and recieve monthly updates on programs, events and news.</p>
						<form class="newsletter-form">
							<input type="email" name="" class="form-control" placeholder="Email Address:">
							<button class="btn btn-yellow">Signup</button>
						</form>
					</div>
				</div>
				<div class="col-md-2">
					<div id="google_translate_element"></div>

					<p class="copyright">&copy; 2019 Bensenville Park District, All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>