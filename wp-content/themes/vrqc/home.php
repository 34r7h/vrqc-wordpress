<?php get_header(); ?>
<div class="">
    <?php
            // get all the categories from the database
            $args = array('exclude'=> '1, 2, 5, 7');
            $cats = get_categories($args);

            foreach ($cats as $cat) {
                echo "<div class='clearfix post-group'>";
                $cat_id= $cat->term_id;
                echo "<h2>".$cat->name."</h2>";
                query_posts("cat=$cat_id&posts_per_page=3");

                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="col-xs-12 col-sm-6 col-md-4 post">
                            <a href="<?php the_permalink();?>">
                                <?php echo get_the_post_thumbnail() ?>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content("(Investigate)"); ?>
                            </a>
                        </article>
                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php } // done the foreach statement ?>

</div>
</div>
<?php get_footer(); ?>
