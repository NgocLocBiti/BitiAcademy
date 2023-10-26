<?php

$current_term = get_queried_object();

if ($current_term->has_archive) {
    $current_term_slug = "all";
} else {
    $current_term_slug = $current_term->slug;
    if ($current_term_slug == "") {
        $current_term = array_shift(array_values(get_the_terms(get_the_ID(), 'tin-tuc')));
        $current_term_slug = $current_term->slug;


    }
}
?>

<div class="sidebar-news ">
    <h3 class="title mb-0 text-uppercase"> Tin tức</h3>
    <?php
    $terms = get_terms([
        'taxonomy' => 'danh-muc-tin-tuc',
        'hide_empty' => false,
        'orderby'       => 'id',
    ]);

    ?>
    <a href="<?php echo get_home_url(); ?>/tin-tuc">
        <button id="btn-category" class="btn <?php echo ($current_term_slug == 'all') ? "active_tintuc" : ""; ?>">Tất cả<i class="fa-solid fa-angle-right"></i> </button>
    </a>
    <?php
    foreach ($terms as $term) {
    ?>
        <a href="<?php echo get_home_url(); ?><?php echo  "/" . $term->taxonomy . "/" . $term->slug; ?>">
            <button id="btn-category" class="btn <?php echo ($current_term_slug == $term->slug) ? "active_tintuc" : ""; ?>">
                <?php echo $term->name; ?> <i class="fa-solid fa-angle-right"></i>
            </button>
        </a>
    <?php
    }
    ?>
</div>

