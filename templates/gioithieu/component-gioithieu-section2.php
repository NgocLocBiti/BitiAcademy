<section class="gioithieu-section2">
    <div class="images">
        <?php if (have_rows('gioithieu-section2')) : ?>
            <?php while (have_rows('gioithieu-section2')) : the_row();
                $image  = get_sub_field('img');
            ?>
                <img src="<?php echo $image['url']; ?>" alt="">
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>