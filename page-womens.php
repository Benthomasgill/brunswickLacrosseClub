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
                    <img alt="Brunswick Womens teams" class="our-purpose-img" src="<?php echo get_template_directory_uri(); ?>/images/page/womens_placeholder.jpg">
                </div>
                <div class="ct-50 ct-float-text">
                    <p><span class="sub-heading">Women's Senior Teams</span><br><br>
                    In 2019, Brunswick formed its first women, femme and non-binary B grade team. The team is currently coached by Michael Lovett and Aimee C.  Training is on Tuesdays and Thursdays at 6.30pm-8pm with matches on Saturday afternoons. New players are welcome.<br><br>

                    <span class="sub-heading">Fees and Equipment</span><br><br>
                    Registration is $400 per year. This includes all equipment such as sticks and goggles. Please <a href="mailto:wearebrunswicklacrosse@gmail.com">contact our women’s coordinator Renee</a> if you would like to know more.
                    <br><br>
                </div>
            </div>          
        </div>
    </div>
    <?php get_template_part('inc/join-us'); ?>
    

	</main><!-- #main -->

    <?php get_template_part('inc/sponsors'); ?>    

<?php
get_footer();