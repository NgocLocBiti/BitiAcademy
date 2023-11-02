<div class="sidebar-chitiettintuc mb-2">
    <h5><i class="far fa-newspaper"></i>Tin mới cập nhật </h5>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(

        'post_status'     => 'publish',
        'post_type'       => 'tin-tuc',
        'pagination' => true,
        'posts_per_page' => 5,
        'paged'  => $paged,
        'paged'           => get_query_var('paged'),
    );

    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php if ($getposts->have_posts()) : ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <div class="position-relative animate-box">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                        <h3 class="title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                    <hr>
                </a>
            </article>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    <?php endif; ?>
    <div class="image-box">
        <img src="https://s3-alpha-sig.figma.com/img/2b40/a64e/aa84813f0646ab1f7360531cae74e914?Expires=1699833600&Signature=dgNUDqeEvYCsc0~UuU2X88nzbcp223q8Oa~Q3qnS9IXbrK63F~DtMPYTsweLkwTvT5d3lMzZuv7Dmtt~dwZVZ9-QgBqjOP5QCIvtsMnGgodaNzZyQGNPjKe6B44GSo3WfxXe-pwMn5ANzO237z-Ru7PrJ1LREiruWO7ylNESDtzVlPOmnYWgXsQqTITVJT008xfMUjUxya3Vo1k3qbsfEA1VaVOrsargWaeuMBk4zvURU53E6zfKg06yolVJ60UBg7FNVRYl~rpkWnGQLwg2DIpW8ZFHExFLNVV4Db6JieUrBnNh4kUdHjpsk5ASmK3xv79aoHccL3aulXgOyZP9ig__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
    </div>
</div>