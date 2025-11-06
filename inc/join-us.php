<div class="homepage-teams-block">
    <div class="container">
        <h2 class="wearebrunswick">WEAREBRUNSWICKLACROSSE</h2>
        <div class="ct-flex homepage-tiles">
            <div class="ct-33 junior-block">
                <div class="image-container">
                    <img alt="" class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/juniors-placeholder.jpg">
                    <div class="overlay">
                        <h2>Juniors Lacrosse</h2>
                        <a class="btn" href="/juniors/">View Teams</a>
                    </div>
                </div>
            </div>
            <div class="ct-33">
                <div class="image-container mens-block">
                    <img alt="" class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/mens-placeholder.jpg">
                    <div class="overlay">
                        <h2>Mens Lacrosse</h2>
                        <a class="btn" href="/mens/">View Teams</a>
                    </div>
                </div>
            </div>
            <div class="ct-33 womens-block">
                <div class="image-container">
                    <img alt="" class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/womens-placeholder.jpg">
                    <div class="overlay">
                        <h2>Womens Lacrosse</h2>
                        <a class="btn" href="/womens/">View Teams</a>
                    </div>
                </div>
            </div>
        </div>
        <h2>Ready to Join Us?</h2>
        <div class="join-us">
            <a href="" class="btn">Register Now</a>
        </div>
        <?php // get_template_part('inc/blog'); ?>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname.includes("/womens/")) {
        document.querySelectorAll(".womens-block").forEach(function(el) {
        el.classList.add("inactive");
        });
    }
    });
    document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname.includes("/mens/")) {
        document.querySelectorAll(".mens-block").forEach(function(el) {
        el.classList.add("inactive");
        });
    }
    });
    document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname.includes("/juniors/")) {
        document.querySelectorAll(".junior-block").forEach(function(el) {
        el.classList.add("inactive");
        });
    }
    });
</script>