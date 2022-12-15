<?php
get_header();
if (is_front_page()) {

    require_once("home.php");
    exit;
}
?>

<?php
$args = array(
    'post_type' => 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrieve all the post that is published 
);
$result = new WP_Query($args);
if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) : $result->the_post(); ?>
        <?php get_template_part('posts', get_post_format()); ?>
    <?php endwhile; ?>
<?php
endif;
wp_reset_postdata();
?>
<?php get_footer(); ?>