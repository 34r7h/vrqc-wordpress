<?php get_header(); ?>
<h1><?php single_cat_title(); ?></h1>
<section class="col-sm-8"><?php
while ( have_posts() ) : the_post();
    echo '<a class="col-xs-12 col-sm-6" href="'. get_permalink() .'"><div class="panel panel-default">';
    echo '<div class="col-xs-6 panel-heading">'.get_the_post_thumbnail().'</div>';
    echo '<div class="col-xs-6 panel-body"><h3>'.the_title().'</h3></div>';
    echo '</div></a>';
endwhile;



// Reset Query
wp_reset_query();

?></section>
<aside class="col-xs-12 col-sm-4">
    <?php get_search_form(); ?>
    <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
