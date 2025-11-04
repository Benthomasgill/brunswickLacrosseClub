<div class="sponsor-carousel">
    <h2>Our Sponsors</h2>
    <p>Our success would not be possible without the valued support of our local sponsors and partners.</p>
    <div class="swiper mySponsorSwiper">
        <div class="swiper-wrapper">
            <!-- Add your sponsor logos below -->
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/EBV.jpg" alt="Sponsor 1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/MaidtoClean.jpg" alt="Sponsor 2"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/Merri-bek.png" alt="Sponsor 3"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sponsors/logo4.png" alt="Sponsor 4"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/sponsors/logo5.png" alt="Sponsor 5"></div>
        </div>
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.mySponsorSwiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: { slidesPerView: 2, spaceBetween: 10 },
            768: { slidesPerView: 3, spaceBetween: 20 },
            1024: { slidesPerView: 5, spaceBetween: 30 },
        },
    });
});
</script>
