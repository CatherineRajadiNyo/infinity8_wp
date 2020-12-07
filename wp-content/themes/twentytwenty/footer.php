<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
$bg = "-blue";
$logo = "/images/logo@2x.png";
$header = "color-gold";
$btn = "btn-secondary";
$who = "us";
if(isset($args['consultant'])){
    $bg = "-gold";
    $logo = "/images/logo-white.png";
    $header = "color-dark_blue";
    $btn = "btn-primary";
    $who = "chua zhi qun";
}
?>
		<section class="banner banner-contact_us contact-us <?php echo $bg; ?>">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 col-md-4 contact-us-content">
						<img src="<?php echo THEME_ASSET_PATH . $logo; ?>" alt="logo" class="logo mb-5" />
						<div class="mb-5">60 Anson Road, Wework<br />#17-01, 059441 singapore</div>
						<div class="mb-5"><a href="mailto:sayhello@infinity8.com"
								class="text-underline">sayhello@infinity8.com</a></div>
						<div class="mb-5">
							<a href="tel:+6589972891">+65 8997 2891</a>
							<br />
							<a href="tel:+6582739271">+65 8273 9271</a>
						</div>
						<div class="mb-5">
							<a class="social-media" href="#"><i class="fab fa-linkedin-in"></i></a>
							<a class="social-media" href="#"><i class="fab fa-twitter"></i></a>
							<a class="social-media" href="#"><i class="fab fa-facebook-f"></i></a>
						</div>
					</div>
					<div class="col-12 col-md-8 contact-us-form">
						<div class="header mb-5">
							<h4 class="<?php echo $header; ?>">CONTACT <?php echo $who; ?> TODAY</h4>
						</div>
						<form>
							<div class="mb-3 d-flex justify-content-between">
								<input type="text" name="name" placeholder="Name" class="mr-2">
								<input type="text" name="mobile" placeholder="Mobile" class="ml-2">
							</div>
							<div class="mb-3">
								<input type="text" name="email" placeholder="Email">
							</div>
							<div class="mb-3">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="pt-3">
								<button type="submit" class="btn <?php echo $btn; ?>">Book appointment</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-blue" role="contentinfo">
			<div class="container footer">
				<div class="row no-gutters">
					<div class="col-12 col-sm d-sm-flex">
					<?php
						wp_nav_menu(
							array(
								'menu' => 'primary',
								'menu_class' => 'footer-nav',
								'container' => '',
							)
						);
					?>
					</div>
					<div class="col-12 col-sm text-center text-sm-right">&copy; Infinity 8 Singapore. All rights are reserved.</div>
				</div>
			</div>
		</section>

		<?php wp_footer(); ?>

		<script src="<?php echo THEME_ASSET_PATH; ?>js/jquery.min.js"></script>
		<script src="<?php echo THEME_ASSET_PATH; ?>js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo THEME_ASSET_PATH; ?>js/script.js"></script>

		<?php 
		$external_js = $args['external_js'];
		if ($external_js && count($external_js)) :
			foreach($external_js as $js_file) {
		?>
				<script type="text/javascript" src="<?php echo $js_file; ?>"></script>
		<?php 
			}
		endif;
		?>

		<?php
		$additional_js = $args['additional_js'];
		if ($additional_js && count($additional_js)) :
			foreach($additional_js as $js_file) { 
		?>
				<script type="text/javascript" src="<?php echo THEME_ASSET_PATH.'js/'.$js_file; ?>"></script>
		<?php 
			}
		endif;
		?>

	</body>
</html>
