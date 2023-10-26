<?php
get_header();
$queried_object = get_queried_object();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
global $post;
?>

<section class="section-tintuc">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-3 ">
                <form class="section-tintuc-search" action="<?php echo get_home_url(); ?>">
                    <div class="input-group mb-3">
                        <input name="s" type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Username" aria-describedby="basic-addon1">
                        <button type="submit" class="btn_search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <?php get_template_part('templates/block/sidebar', 'Category'); ?>

            </div>
            <div class="col-lg-6 center ">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(

                    'post_status'     => 'publish',
                    'post_type'       => 'tin-tuc',
                    'pagination' => true,
                    'posts_per_page' => 1,
                    'paged'  => $paged,
                    'paged'           => get_query_var('paged'),
                );

                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php if ($getposts->have_posts()) : ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <img class="" src="<?php the_post_thumbnail_url('') ?>" alt="">
                                </div>
                                <div class="content">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="thoi-gian">
                                        <p><i class="fal fa-calendar-alt"></i> <?php echo get_the_time('Y/m/d', $post->ID); ?></p>
                                        <p><i class="fal fa-clock"></i><?php echo get_the_time('H:i', $post->ID); ?></p>
                                    </div>
                                    <p class="noi_dung"><?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = null); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 right">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(

                    'post_status'     => 'publish',
                    'post_type'       => 'tin-tuc',
                    'pagination' => true,
                    'posts_per_page' => 2,
                    'paged'  => $paged,
                    'paged'           => get_query_var('paged'),
                );

                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php if ($getposts->have_posts()) : ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <img class="" src="<?php the_post_thumbnail_url('full') ?>" alt="">
                                </div>
                                <div class="content">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="thoi-gian">
                                        <p><i class="fal fa-calendar-alt"></i> <?php echo get_the_time('Y/m/d', $post->ID); ?></p>
                                        <p><i class="fal fa-clock"></i><?php echo get_the_time('H:i', $post->ID); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(

                'post_status'     => 'publish',
                'post_type'       => 'tin-tuc',
                'paged'           => get_query_var('paged'),
                'pagination' => true,
                'posts_per_page' => 9,
                'paged'  => $paged,
            );
            ?>
            <?php $getposts = new WP_query($args); ?>
            <?php if ($getposts->have_posts()) : ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-12 mb-4">
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
                                    <p class="noi_dung"><?php echo wp_trim_words(get_the_content(), $num_words = 50, $more = null); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
        <?php get_template_part('templates/block/component', 'pagination'); ?>
    </div>
</section>
<?php get_footer(); ?>
<?php get_template_part('templates/block/component', 'home-to-top'); ?>

<script>
    var elements = document.querySelectorAll('.active');
    elements.forEach(function(element) {
        element.classList.remove('active');
    });
    document.getElementById("news").classList.add('active');
</script>