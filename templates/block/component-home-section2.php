<section class="home-section2">
    <div id="home-section2" class="owl-carousel owl-theme">
        <?php if (have_rows('home-section2', 2)) : ?>
            <?php while (have_rows('home-section2', 2)) : the_row();
                $image  = get_sub_field('img', 2);
                $title  = get_sub_field('title');
                $content  = get_sub_field('content');
            ?>
                <div class="item">
                    <div class="image-container">
                        <img src="<?php echo $image['url']; ?>" alt="Overlay Image" class="overlay-image">
                    </div>
                    <div class="item-info">
                        <h3><?php echo $title ?></h3>
                        <p><?php echo $content ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<script>
    (function($) {
        $(document).ready(function() {
            /* AOS Animate */
            AOS.init({
                once: true
            });

            $('#home-section2').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay:false,
                responsive: {
                    0: {
                        items: 1
                    },
                }
            })
        });
    })(jQuery);
</script>