<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<img class="homepage-hero" src="<?php echo get_template_directory_uri(); ?>/images/homepage/homepage_hero.jpg">

<div class="container">
    <div class="ct-flex homepage-tiles">
        <div class="ct-33"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/womens-placeholder.jpg"></div>
        <div class="ct-33"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/womens-placeholder.jpg"></div>
        <div class="ct-33"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/homepage/womens-placeholder.jpg"></div>
    </div>
    <?php // get_template_part('inc/blog'); ?>
    
</div>
<?php get_template_part('inc/sponsors'); ?>

<?php
get_footer(); ?>

