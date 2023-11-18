<section class="home-section4 section">
    <?php if (have_rows('home-section4', 2)) : ?>
        <?php while (have_rows('home-section4', 2)) : the_row();
            $title  = get_sub_field('title');
            $content  = get_sub_field('content');
        ?>
            <div class="home-section4-title">
                <h1><?php echo $title ?></h1>
                <p><?php echo $content ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div id="home-section4" class="owl-carousel owl-theme">
            <?php if (have_rows('home-section4-item', 2)) : ?>
                <?php while (have_rows('home-section4-item', 2)) : the_row();
                    $img  = get_sub_field('img');
                    $title  = get_sub_field('title');
                    $info  = get_sub_field('info');
                    $content  = get_sub_field('content');
                ?>
                        <div class="home-section4-item">
                            <div class="name">
                                <img src="<?php echo $img['url']; ?>" alt="">
                                <h3><?php echo $title ?></h3>
                                <p><?php echo $info ?></p>
                            </div>
                            <hr>
                            <div class="info">
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

            $('#home-section4').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                slideTransition: 'linear',
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                }
            })
        });
    })(jQuery);
</script>