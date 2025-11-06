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
                    <img alt="our purpose" class="our-purpose-img" src="<?php echo get_template_directory_uri(); ?>/images/page/orangeClub.jpg">
                </div>
                <div class="ct-50 ct-float-text">
                    <p><span class="sub-heading">Orange Club</span><br><br>
                        The Orange supporter’s club was founded in 2022. Jump on board and support your favourite team. Cost is $50 and perks include $40 worth of merchandise or food/drinks at the canteen. You will have exclusive access to limited edition 30th anniversary merchandise including 30th anniversary totes, and two styles of 30th anniversary caps. <br><br><span class="link"><a target="_new" href="http://wearebrunswicklacrosse.tidyhq.com/public/membership_levels/528a65847262">Join here</a></strong><br><br>
                        Your contribution goes towards the development and growth of lacrosse in the Brunswick area, through the purchase of new equipment to support new recruits, funding coaches to develop and run our Schools’ Program, and assisting our representative players to achieve their dreams.</p>
                </div>
            </div>
        </div>
    </div>
				
	</main><!-- #main -->

    <?php get_template_part('inc/sponsors'); ?>    

<?php
get_footer();