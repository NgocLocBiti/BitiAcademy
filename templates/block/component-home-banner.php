<section class="home-banner">
    <img src="https://s3-alpha-sig.figma.com/img/cdd5/e5eb/8da4124403c78bcf34d99030fb89d3f0?Expires=1696809600&Signature=DIysv4go79uo-UpB~G0mUsGVxCVIFEd8wyPyo8ens7BPa2YFqX~CMVLUpsnhlzBIPmb~cCoOWuuZzUCHzOhO4lTdfMPo6N0aU~uAwyUrNtnAAKKKMCNysaVYhGFdC6jGuMrPQhFsiANVRdOoRs51l5igHeAWTvzOTiKDF1MDz7c1LrXZp4m37ctjD9~blG82~OGBwNOn7bWMlkz8ZBZ2c~i36Y19ZqCwQSZr4SJqoqtVE9GbQ4fI4Gg7luc4K1AiPeM4nK8FPy50IwnDOzP~L0yJ4hBECGcBGLCK227-ZUWhbI8JFuanvtUl8QRIjSbQPE3-ZyrF5nNECzV-18BO~g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
    <div class="home-banner-introduce">
        <?php if (have_rows('home-banner',2)) : ?>
            <?php while (have_rows('home-banner',2)) : the_row();
                $title  = get_sub_field('title');
                $content  = get_sub_field('content');
            ?>
                <h3><?php echo $title ?></h3>
                <p><?php echo $content ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="button">
            <a href="<?php echo get_home_url(); ?>/gioi-thieu" class="vechungtoi">
                <button class="">
                    <span> Về chúng tôi</span>
                </button>
            </a>
            <a href=" <?php echo get_home_url(); ?>/khoa-dao-tao" class="">
                <button class="khoadaotao">
                    <span>Khóa đào tạo</span>
                </button>
            </a>
        </div>
    </div>
</section>