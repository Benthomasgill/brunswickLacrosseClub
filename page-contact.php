<?php 

get_header();


?>
	<div class="page-header-block">
		<?php get_template_part('inc/hero-images'); ?>
	</div>	
	<main id="primary" class="site-main">

    <div class="background-container-white">
        <div class="container">
            <div class="ct-flex">
                <div class="ct-50">
                    <div class="contact-map">
                        <iframe
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2067391522297!2d144.9785806756907!3d-37.76614303793711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642d0e4c3f7ff%3A0x37d5e9c85758f221!2s6%20Cross%20St%2C%20Brunswick%20East%20VIC%203057!5e0!3m2!1sen!2sau!4v1730898000000!5m2!1sen!2sau">
                        </iframe>
                    </div>
                </div>
                <div class="ct-50 ct-float-text contact-copy">
                    <p><span class="sub-heading">Connect with us</span><br><br>
                    If you’re interested in joining Brunswick Lacrosse Club, we’d love to hear from you! Whether you’re completely new to the sport or a returning player, we welcome everyone to get involved. If you have any questions about how to join, what equipment you’ll need, or details about fees and what the club provides, please don’t hesitate to reach out. <br><br>
                    <span class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/mail.svg">  <a href="mailto:wearebrunswicklacrosse@gmail.com">wearebrunswicklacrosse@gmail.com</a><br>
                    </span>
                    <span class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.svg">  <a target="_new" href="https://www.facebook.com/WeAreBrunswickLacrosse">https://www.facebook.com/WeAreBrunswickLacrosse</a>
                    </span>
                    <span class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.svg">  <a target="_new" href="https://www.instagram.com/brunswicklacrosse/?hl=en">https://www.instagram.com/brunswicklacrosse/</a>
                    </span>
                </div>
            </div>           
        </div>
    </div>
				
	</main><!-- #main -->

    <?php get_template_part('inc/sponsors'); ?>    

<?php
get_footer();