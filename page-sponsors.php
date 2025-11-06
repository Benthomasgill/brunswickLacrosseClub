<?php 

get_header();


?>
	<div class="page-header-block">
		<?php get_template_part('inc/hero-images'); ?>
	</div>	
	<main id="primary" class="site-main">

    <div class="background-container-white">
        <div class="container">
            <p>We welcome sponsorship enquiries. We offer exposure through our social media and localized community of Fleming Park, Brunswick. We run multiple events throughout the year that could include you!<br><br>
            Interested in becoming a sponsor or wanting more information on how you can team up with Brunswick Lacrosse Club?<br><br>
            Reach out to us at <a href="mailto:wearebrunswicklacrosse@gmail.com">wearebrunswicklacrosse@gmail.com</a> 
            </p>
        </div>
    </div>
    <div class="background-container sponsors">
        <div class="container">
            <h2>Thank you to our sponsors</h2>
            <div class="ct-flex">
                <div class="ct-33">
                    <div class="sponsor-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/EBV.png" alt="EBV">
                        <p><br>East Brunswick Village (EBV), one of the inner north’s largest and most exciting urban renewal projects. With over three hectares of well thought out architecturally designed and landscaped space and just six kilometres from Melbourne’s CBD, EBV’s vision is of a self-sustaining urban village where everything residents need is just a short walk away.</p>
                    </div>
                </div>
                <div class="ct-33">
                    <div class="sponsor-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/MaidtoClean.jpg" alt="MaidtoClean">
                        <p><br>Maid to Clean, an award-winning premium house cleaning company that services all of Melbourne. We offer a range of services including one off/regular cleaning, spring cleaning, end of lease cleans, steam cleaning and more.<br><br>
                        Special $30 off discount code for the Brunswick Lacrosse team – <strong>BRUNNYLAC30</strong></p>
                    </div>
                </div>
                <div class="ct-33">
                    <div class="sponsor-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/Merri-bek.png" alt="Merri-bek">
                        <p><br>We appreciate the support and ongoing connection provided by the Merri-bek Council to support our club grow and stay local.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>					
	</main><!-- #main -->

<?php
get_footer();