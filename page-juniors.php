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
                    <img alt="Brunswick u14 mixed team" class="our-purpose-img" src="<?php echo get_template_directory_uri(); ?>/images/page/u14_placeholder.jpg">
                </div>
                <div class="ct-50 ct-float-text">
                    <p><span class="sub-heading">Junior Teams</span><br><br>
                    We have 4 junior teams: Under 12 (mixed boys and girls), Under 14 (mixed boys and girls), Under 16 boys and Under 18 boys. Age group is determined by age as at 1 May 2026. <br><br>

                    <span class="sub-heading">Training and Matches</span><br><br>
                    Junior teams train at Fleming Park from 5.30pm-6.30pm on Tuesdays and Thursdays. Matches are played on Saturday mornings. New players are welcome.<br><br>

                    <span class="sub-heading">Equipment</span><br><br>
                    We provide all equipment including lacrosse sticks, helmets, gloves and goggles.</p>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="ct-flex">
                <div class="ct-50 ct-float-text">
                    <p><span class="sub-heading">Registration</span><br><br>
                    Registration is $330 per year. Please contact our junior coordinators if you would like to know more or register.<br><br>

                    <span class="sub-heading">Schools</span><br><br>
                    We encourage schools to learn and play the skills of lacrosse. We are happy to come to your school, run sessions and supply all equipment. <br><br>This could be during PE classes or as an after-school care activity. Please contact Mark Griffiths for more information.</p>
                </div>
                <div class="ct-50">
                    <img alt="Brunswick u12 mixed team" class="our-purpose-img" src="<?php echo get_template_directory_uri(); ?>/images/homepage/juniors-placeholder.jpg">
                </div>
            </div>            
        </div>
    </div>

    <?php get_template_part('inc/join-us'); ?>
				
	</main><!-- #main -->

    <?php get_template_part('inc/sponsors'); ?>    

<?php
get_footer();