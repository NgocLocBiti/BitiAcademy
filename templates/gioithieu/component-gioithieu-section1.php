<section class="gioithieu-section1">
    <div class="container">
        <?php if (have_rows('gioithieu-section1')) : ?>
            <?php while (have_rows('gioithieu-section1')) : the_row();
                $sub_title  = get_sub_field('sub-title');
                $title  = get_sub_field('title');
                $content  = get_sub_field('content');
            ?>
                <h2><?php echo $sub_title ?></h2>
                <h1><?php echo $title ?></h1>
                <p><?php echo $content ?></p>
                <a href="<?php echo get_home_url(); ?>/lien-he/">
                    <button class="btn-59">
                        <span>Liên hệ với chúng tôi <i class="fas fa-paper-plane" style="color: #1388ED;"></i></span>
                    </button>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>