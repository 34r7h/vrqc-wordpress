<?php
if(in_category(7) || get_post_type() == 'easy-rooms') {
get_header('property');
include 'single-property.php';
get_footer();
} else {
?>

<?php

get_header();
?>
    <div class="clearfix"><article class="col-xs-12 col-sm-4 col-sm-offset-2 " id="content" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <div class="clearfix">
            <div class="col-xs-6 col-sm-6">
                <i class="fa fa-arrow-left"> Previous Entry</i>
                <p><?php previous_post_link() ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 text-right">
                Next Entry <i class="fa fa-arrow-right"></i>
                <p><?php next_post_link() ?></p>
            </div>
        </div>
    
        <h2><?php the_title(); ?></h2>
            <?php echo get_the_post_thumbnail() ?>
    
    
            <div>
            <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
    
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    
            <p>
    
                </p>
    
            </div>
            <?php comments_template(); ?>
    </article>
    <aside class="col-xs-12 col-sm-4 col-sm-offset-2">
        <?php get_sidebar(); ?>
    </aside></div>


<?php endwhile; else: ?>
<?php endif; ?>
<hr/>
<?php get_footer(); ?>
<?php } ?>