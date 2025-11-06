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
                    <img alt="Brunswick Mens teams" class="our-purpose-img" src="<?php echo get_template_directory_uri(); ?>/images/page/mens_placeholder.jpg">
                </div>
                <div class="ct-50 ct-float-text">
                    <p><span class="sub-heading">Men's Senior Teams</span><br><br>
                    Currently we have 2 men’s teams – State league, and State league reserves. Training is on Tuesdays and Thursdays at 6.30pm-8pm. Matches are played on Saturday afternoons. New players are welcome.<br><br>

                    <span class="sub-heading">Fees and Equipment</span><br><br>
                    Registration is $450 per year. This includes all equipment such as sticks and helmets. Please <a href="mailto:wearebrunswicklacrosse@gmail.com">contact our men’s coordinator Mark Griffiths</a> if you would like to know more.<br><br>
                </div>
            </div>          
        </div>
    </div>

    <?php get_template_part('inc/join-us'); ?>
				
	</main><!-- #main -->
    <?php get_template_part('inc/sponsors'); ?>       

<?php
get_footer();