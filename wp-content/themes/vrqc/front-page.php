<?php get_header(); ?>
<?php
$post = get_post();
$title = $post->ID;
echo get_the_post_thumbnail($title, 'full');
?>
<div class="container">
    hello homepage
</div>
<?php get_footer(); ?>
