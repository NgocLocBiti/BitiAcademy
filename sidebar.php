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
        <?php
        $image = get_field('img-tintuc', 2);
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="" />
        <?php endif; ?>
    </div>
</div>