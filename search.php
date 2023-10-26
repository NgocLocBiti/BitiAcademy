<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>
<section class="page-blogs">
    <div class="page-blog">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-lg-3 col-md-4 mb-4">
                    <div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-9 col-md-8">
                    <ul class="blog-list list-unstyled">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page'     => -1,
                            // 'post_type'          => '',
                            'orderby'            => 'date',
                            'order'              => 'DESC',
                            'paged'             => get_query_var('paged'),
                            's'                  => get_search_query(),
                            'pagination' => true,
                            'posts_per_page' => 9,
                            'paged'  => $paged,
                        );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php if ($_GET['s'] == '') { ?>
                            <h4 class="mb-3 mb-md-4">Vui lòng nhập từ khóa bạn muốn tìm kiếm.</h4>
                        <?php } else { ?>
                            <h4 class="mb-3 mb-md-4"><?php echo count($getposts->posts) ?> kết quả tìm kiếm được tìm thấy</h4>
                            <div class="row">
                                <?php if ($getposts->have_posts()) : ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <div class="col-lg-4 mb-4">
                                            <li class="blog-item">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="image">
                                                        <img class="blog-item_img" src="<?php the_post_thumbnail_url('full') ?>" alt="">
                                                    </div>
                                                    <div class="blog-item_info">
                                                        <?php
                                                        $categorys =  get_the_category(get_the_ID());
                                                        foreach ($categorys as $key => $category) {
                                                            echo '<p class="next">' . $category->name . '</p>';
                                                        }
                                                        ?>
                                                        <h3><?php the_title(); ?></h3>
                                                        <div class="thoi-gian">
                                                            <p><i class="fal fa-calendar-alt"></i> <?php echo get_the_time('Y/m/d', $post->ID); ?></p>
                                                            <p><i class="fal fa-clock"></i><?php echo get_the_time('H:i', $post->ID); ?></p>
                                                        </div>
                                                        <p class="noi_dung"><?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = null); ?></p>
                                                    </div>
                                                </a>
                                            </li>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        <?php } //if (function_exists('prw_wp_corenavi')) prw_wp_corenavi($getposts, $paged); 
                        ?>
                    </ul>
                    <?php get_template_part('templates/block/component', 'pagination'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>
<div class="clear"></div>

<?php get_footer(); ?>
<?php get_template_part('templates/block/component', 'home-to-top'); ?>
