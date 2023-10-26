<section class="home-section1">

    <div class="home-section1-top">
        <?php if (have_rows('home-section1', 2)) : ?>
            <?php while (have_rows('home-section1', 2)) : the_row();
                $title  = get_sub_field('title');
                $content  = get_sub_field('content');
            ?>
                <h3><?php echo $title ?></h3>
                <p><?php echo $content ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="home-section1-center">
        <div class="container">
            <div class="row">
                <?php if (have_rows('home-section1-item', 2)) : ?>
                    <?php while (have_rows('home-section1-item', 2)) : the_row();
                        $image  = get_sub_field('img', 2);
                        $title  = get_sub_field('title', 2);
                    ?>
                        <div class="col-lg-4 col-md-6 col-6  mb-4">
                            <a href="<?php echo get_home_url(); ?>/khoa-dao-tao">
                                <div class="item">
                                    <img src="<?php echo $image['url']; ?>" alt="">
                                    <div class="title">
                                        <h3><?php echo $title ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <div class="home-section1-bottom">
        <a href="<?php echo get_home_url(); ?>/khoa-dao-tao">
            <button class="btn btn__effect--2" data-text="Xem thêm">
                <span>X</span><span>e</span><span>m</span>
                <span>T</span><span>h</span><span>ê</span><span>m</span>
            </button>
        </a>
    </div>

</section>