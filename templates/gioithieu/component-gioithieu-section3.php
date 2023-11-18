<section class="gioithieu-section3 ">
    <div class="container section">
        <div class="title">
            <?php if (have_rows('gioithieu-section3')) : ?>
                <?php while (have_rows('gioithieu-section3')) : the_row();
                    $title  = get_sub_field('title');
                    $content  = get_sub_field('content');
                ?>
                    <h1><?php echo $title ?></h1>
                    <p><?php echo $content ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="content">
            <div class="row">
                <?php if (have_rows('gioithieu-section3-item')) : ?>
                    <?php while (have_rows('gioithieu-section3-item')) : the_row();
                        $title  = get_sub_field('title');
                        $image  = get_sub_field('img');
                    ?>
                        <div class="col-12 col-lg-6 col-md-6 mb-4 ">
                            <div class="item">
                                <img src="<?php echo $image['url']; ?>" alt="">
                                <h3><?php echo $title ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>