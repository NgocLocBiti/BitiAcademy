<section class="gioithieu-banner">
    <?php
    $image = get_field('img');
    if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="" />
    <?php endif; ?>
</section>
<script>
    var elements = document.querySelectorAll('.is_active');
    elements.forEach(function(element) {
        element.classList.remove('is_active');
    });
    document.getElementById("about").classList.add('is_active');
</script>