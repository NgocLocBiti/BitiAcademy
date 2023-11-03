<?php get_header(); ?>

<main class="tintuc tintuc-detail">
    <?php
    $img_url = wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full');

    ?>
    <section class="tintuc-banner position-relative" style="background-image: url(<?php echo $img_url; ?>);">
        <h1 class="text-white text-center text-uppercase fw-bold position-absolute"><?php the_title(); ?></h1>
    </section>

    <section class="tintuc-main position-relative">
        <div class="container">
            <div class="tintuc-main-wrap">
                <div class="row gx-5 mb-5">
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="tintuc-main-detail">
                            <h2 class="entry-title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="meta-data">
                                <div class="date">
                                    <i class="fal fa-calendar-alt"></i> <?php echo get_the_time('Y/m/d', $post->ID); ?>
                                </div> 
                                <div class="time">
                                    <i class="fal fa-clock"></i><?php echo get_the_time('H:i', $post->ID); ?>
                                </div>
                            </div>
                            <div class="entry-content">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-5 pb-5">
                    <div class="tintuc-related">
                        <h2 class="st-heading">
                        <i class="fas fa-layer-plus"></i> Tin liên quan
                        </h2>
                        <div class="content">
                            <div id="tinlienquan" class="owl-carousel owl-theme">
                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(

                                    'post_status'     => 'publish',
                                    'post_type'       => 'tin-tuc',
                                    'pagination' => true,
                                    'posts_per_page' => -1,
                                    'paged'  => $paged,
                                    'paged'           => get_query_var('paged'),
                                );
                                ?>
                                <?php $getposts = new WP_query($args); ?>
                                <?php if ($getposts->have_posts()) : ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <div class="items_tintuc">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="img">
                                                    <img class="" src="<?php the_post_thumbnail_url('full') ?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="thoi-gian">
                                                        <p><i class="fal fa-calendar-alt"></i> <?php echo get_the_time('Y/m/d', $post->ID); ?></p>
                                                        <p><i class="fal fa-clock"></i><?php echo get_the_time('H:i', $post->ID); ?></p>
                                                    </div>
                                                    <h2><?php the_title(); ?></h2>
                                                    <p class="noi_dung"><?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = null); ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<?php get_template_part('templates/block/component', 'home-to-top'); ?>

<script>
    var elements = document.querySelectorAll('.is_active');
    elements.forEach(function(element) {
        element.classList.remove('is_active');
    });
    document.getElementById("news").classList.add('is_active');

    (function($) {
        $(document).ready(function() {
            /* AOS Animate */
            AOS.init({
                once: true
            });

            $('#tinlienquan').owlCarousel({
                loop: true,
                margin: 30,
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
                        items: 3
                    },
                    1000: {
                        items: 4
                    },
                }
            })
        });
    })(jQuery);
</script>