<?php /* Template Name: Khóa đào tạo*/ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/khoadaotao/component', 'khoadaotao-banner'); ?>
    <?php get_template_part('templates/khoadaotao/component', 'khoadaotao-section'); ?>
</main>
<?php get_footer(); ?>

<?php get_template_part('templates/block/component', 'home-to-top'); ?>

<style>
    .header{
        position: relative;
    }
</style>