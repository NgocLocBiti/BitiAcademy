<section class="khoadaotao-banner">
    <div class="container">
        <?php
        $image = get_field('img_banner');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="" width="100%" />
        <?php endif; ?>
    </div>
</section>

<script>
    var elements = document.querySelectorAll('.is_active');
    elements.forEach(function(element) {
        element.classList.remove('is_active');
    });
    document.getElementById("course").classList.add('is_active');
</script>