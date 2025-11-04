<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<section class="hero-video">
  <div class="hero-video__wrapper">

    <!-- 🎥 YouTube video background -->
    <div class="hero-video__embed">
      <iframe
        src="https://www.youtube.com/embed/hrMAEc7228Y?autoplay=1&mute=1&loop=1&playlist=hrMAEc7228Y&controls=0&showinfo=0&modestbranding=1"
        frameborder="0"
        allow="autoplay; fullscreen"
        allowfullscreen>
      </iframe>
    </div>

    <!-- 📝 Overlay content -->
    <div class="hero-video__content">
      <h1>Welcome to <br>Brunswick Lacrosse Club</h1>
      <p>2026 Registrations Now Open</p>
      <a href="" class="btn">Register Now</a>
    </div>
  </div>
</section>

<!-- fallback image placeholder -->
<!-- <img class="homepage-hero" src="<?php echo get_template_directory_uri(); ?>/images/homepage/homepage_hero.jpg"> -->

<div class="homepage-teams-block">
    <div class="container">
        <h2 class="wearebrunswick">WEAREBRUNSWICKLACROSSE</h2>
        <div class="ct-flex homepage-tiles">
            <div class="ct-33">
                <div class="image-container">
                    <img alt="" class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/juniors-placeholder.jpg">
                    <div class="overlay">
                        <h2>Juniors Lacrosse</h2>
                        <a class="btn" href="/juniors/">View Teams</a>
                    </div>
                </div>
            </div>
            <div class="ct-33">
                <div class="image-container">
                    <img alt="" class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/mens-placeholder.jpg">
                    <div class="overlay">
                        <h2>Mens Lacrosse</h2>
                        <a class="btn" href="/mens/">View Teams</a>
                    </div>
                </div>
            </div>
            <div class="ct-33">
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
<?php get_template_part('inc/sponsors'); ?>

<?php
get_footer(); ?>

