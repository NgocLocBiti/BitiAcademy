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
        <img src="https://s3-alpha-sig.figma.com/img/2b40/a64e/aa84813f0646ab1f7360531cae74e914?Expires=1698624000&Signature=f9VAl9n5-NRK6SNa37Ephm7UxJnwyEv48Ql2nP86IbNJuxUKxFrqq0POB2Hi8G0HsuoaM6UMUut9PQfZYan--9aOmIVw2lNhly--yv~LNlabeLeFLAozn~rcJ1fcfzifoi-Jpt8HvZdQNhaHZrND23oNtqpp4-H9c9pg758CQp3jtKclFvQNJHo3wf2dXEnC-VWGJacETy8F6iKASMCfsUyv0eyG4xp87HAFNtvW3SHg2Gv6Wo6Av46gcU-UBst6vKbVIwrrFei5JUmZGIReMW0esNm1ja6it7BnOntl~UXUh-6hvoa4O-CkiAnSxrLpxE7wOmBWAV~sC8bBLMJ6rA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
    </div>
</div>