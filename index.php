<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/block/component', 'home-banner'); ?>
    <?php get_template_part('templates/block/component', 'home-section1'); ?>
    <?php get_template_part('templates/block/component', 'home-section2'); ?>
    <?php get_template_part('templates/block/component', 'home-section3'); ?>
    <?php get_template_part('templates/block/component', 'home-section4'); ?>
</main>

<?php get_footer(); ?>

<?php get_template_part('templates/block/component', 'home-to-top'); ?>