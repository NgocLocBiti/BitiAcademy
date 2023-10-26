<?php /* Template Name: Giới thiệu*/ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/gioithieu/component', 'gioithieu-banner'); ?>
    <?php get_template_part('templates/gioithieu/component', 'gioithieu-section1'); ?>
    <?php get_template_part('templates/gioithieu/component', 'gioithieu-section2'); ?>
    <?php get_template_part('templates/gioithieu/component', 'gioithieu-section3'); ?>
    <?php get_template_part('templates/gioithieu/component', 'gioithieu-section4'); ?>
</main>
<?php get_footer(); ?>


<?php get_template_part('templates/block/component', 'home-to-top'); ?>

<style>
    .header{
        position: relative;
    }
</style>