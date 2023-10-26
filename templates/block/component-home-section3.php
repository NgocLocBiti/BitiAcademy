<section class="home-section3">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-12 col-md-5 col-lg-5">
        <?php if (have_rows('home-section3-title',2)) : ?>
                <?php while (have_rows('home-section3-title',2)) : the_row();
                    $title  = get_sub_field('title');
                ?>
                    <h1>
                        <?php echo $title ?>
                    </h1>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-7 col-lg-7">
            <?php if (have_rows('home-section3-item', 2)) : ?>
                <?php while (have_rows('home-section3-item', 2)) : the_row();
                    $stt  = get_sub_field('stt');
                    $content  = get_sub_field('content');
                ?>
                    <div class="home-section3-item1">
                        <div class="home-section3-info">
                            <h2><?php echo $stt ?></h2>
                            <p><?php echo $content ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <?php if (have_rows('home-section3-item2', 2)) : ?>
                <?php while (have_rows('home-section3-item2', 2)) : the_row();
                    $stt  = get_sub_field('stt');
                    $content  = get_sub_field('content');
                ?>
                    <div class="home-section3-item2">
                        <div class="home-section3-info2">
                            <h2><?php echo $stt ?></h2>
                            <p><?php echo $content ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <?php if (have_rows('home-section3-item3', 2)) : ?>
                <?php while (have_rows('home-section3-item3', 2)) : the_row();
                    $stt  = get_sub_field('stt');
                    $content  = get_sub_field('content');
                ?>
                    <div class="home-section3-item3">
                        <div class="home-section3-info3">
                            <h2><?php echo $stt ?></h2>
                            <p><?php echo $content ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <?php if (have_rows('home-section3-item4', 2)) : ?>
                <?php while (have_rows('home-section3-item4', 2)) : the_row();
                    $stt  = get_sub_field('stt');
                    $content  = get_sub_field('content');
                ?>
                    <div class="home-section3-item4">
                        <div class="home-section3-info4">
                            <h2><?php echo $stt ?></h2>
                            <p><?php echo $content ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                    </div>
        </div>
    </div>
</section>