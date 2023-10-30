<section class="home-banner">
    <img src="https://s3-alpha-sig.figma.com/img/cdd5/e5eb/8da4124403c78bcf34d99030fb89d3f0?Expires=1699833600&Signature=FXfgXFrox5lUKfwYUqP8o1JNIiw1PO~X8v95hdl-N1DSmQvImAQ-xzhH7O3chLtDKAsqiMN3WwMBce8UX8KubVxpl~ETpSjJA2COtbIPALREGUa~-bOiP2BibSsdfDu9FCZ~P-WdxozEyvR9ag3evo~khZM7roSmeEnGZl6wPdUDEkPIHoWKFcIZ6XsVNFHKIbX3N5BH5PZjyqcnX4BurX-~Zk32mbpmuH7wASHiDPRu8bn-43zz9KK649fHUjgisLmjCeWJiFHMZlb3IHHyJNW1ZAi1jmSQMfcR10GHruCBCRud9rUZlC3~5rPEi4szYAHDS4a5GM3qDH3KOzLbsQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
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