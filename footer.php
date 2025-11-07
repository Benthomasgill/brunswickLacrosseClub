<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customTheme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="ct-flex footer-container">
			<div class="ct-20">
				<ul>
					<li>Juniors</li>
					<li>Mens</li>
					<li>Womens</li>
				</ul>
			</div>
			<div class="ct-20">	
				<ul>
					<li>About</li>
					<li>Gallery</li>
					<li>Sponsors</li>
					<li>Orange Club</li>
					<li>Contact Us</li>
					<li>Team Store</li>
				</ul>
			</div>
			<div class="ct-20 sociallist">	
				<ul>
					<li><strong>Follow Us</strong></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_white.svg">Facebook</li>
					<li class="insta"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram_white.svg">Instagram</li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/icons/youTube.svg">youTube</li>
				</ul>
			</div>
			<div class="ct-20">	
				<ul>

				</ul>
			</div>
			<div class="ct-20">
				<img class="footer-logo" alt="Brunswick Lacrosse Club" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo.png">	
				<p><?php echo primary_details()['business_name']; ?><br>
				<?php echo primary_details()['street_address']; ?>,<br>
				<?php echo primary_details()['suburb']; ?> <?php echo primary_details()['state']; ?> <?php echo primary_details()['postcode']; ?><br>
				Phone: <?php echo primary_details()['phone']; ?>
				</p>
			</div>
		</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'customtheme' ) ); ?>">

			</a>
			<span class="sep">Brunswick Lacrosse Club acknowledges the custodians of the land on which we play, the Wurundjeri Woi-wurrung people of the Kulin Nation, and their Elders past, present and future. <br>We acknowledge and respect the continuing culture and connection to land, waters and community.</span><br><br> 
			<span class="sep">© Copyright Brunswick Lacrosse Club <?php echo date('Y'); ?>  | Custom Theme By <a href="https://benthomasgill.net/">Ben Thomas-Gill</a></span>
		</div><!-- .site-info -->

		<!--/ Start Local Business Schema /-->
		<div itemscope itemtype="https://schema.org/LocalBusiness">
			<?php get_template_part('inc/footer/business-details'); ?> 
		</div>
		<!--/ End Local Business Schema /-->

		<!-- <img class="pride-flag" src="<?php echo get_template_directory_uri(); ?>/images/footer/Progress-Pride-flag.webp"> -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
