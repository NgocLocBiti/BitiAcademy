<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/huongdantaikhoan/component', 'huongdantaikhoan'); ?>
</main>

<?php get_footer(); ?>


<?php get_template_part('templates/block/component', 'home-to-top'); ?>

<style>
    .header{
        position: relative;
    }
</style>