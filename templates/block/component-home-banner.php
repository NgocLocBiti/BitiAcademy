<section class="home-banner">
    <img src="https://i.imgur.com/8ytAL5p.gif" alt="">
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
<script>
	var elements = document.querySelectorAll('.is_active');
	elements.forEach(function(element) {
		element.classList.remove('is_active');
	});
	document.getElementById("home").classList.add('is_active');
</script>