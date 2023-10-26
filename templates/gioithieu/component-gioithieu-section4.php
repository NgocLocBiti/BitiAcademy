<section class="gioithieu-section4">
    <div class="container">
        <div class="title">
            <?php if (have_rows('gioithieu-section4')) : ?>
                <?php while (have_rows('gioithieu-section4')) : the_row();
                    $title  = get_sub_field('title');
                    $content  = get_sub_field('content');
                ?>
                    <h1><?php echo $title ?></h1>
                    <p><?php echo $content ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="content">
            <!-- <div class="row"> -->
            <div id="about-section4" class="owl-carousel owl-theme">
                <?php if (have_rows('gioithieu-section4-item')) : ?>
                    <?php while (have_rows('gioithieu-section4-item')) : the_row();
                        $title  = get_sub_field('title');
                        $content  = get_sub_field('content');
                        $image  = get_sub_field('img');
                    ?>
                        <!-- <div class="col-12 col-lg-4"> -->
                        <div class="item">
                            <img src="<?php echo $image['url']; ?>" alt="">
                            <h3><?php echo $title ?></h3>
                            <p><?php echo $content ?></p>
                        </div>
                        <!-- </div> -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    (function($) {
        $(document).ready(function() {
            /* AOS Animate */
            AOS.init({
                once: true
            });

            $('#about-section4').owlCarousel({
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