<?php get_header(); ?>
<div>
    <article class="col-xs-12">
        <section class="clearfix">
            <nav><h3>Condo Filtering</h3></nav>
            <?php
            // get all the properties category
            $args = array('include'=> '7');
            $cats = get_categories($args);

            foreach ($cats as $cat) {
            echo "<div class='clearfix'>";
            $cat_id= $cat->term_id;
            query_posts("cat=$cat_id&posts_per_page=5");

            if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="clearfix col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <a href="<?php the_permalink();?>">
                        <div class="panel panel-heading">
                            <h4><i class="fa fa-home"> <?php the_title(); ?></i></h4>
                        </div>
                        <div class="frontpage-post panel-body">
                            <?php echo get_the_post_thumbnail() ?>
                            <p><?php the_content('More'); ?></p>
                        </div>
                        <div class="panel-footer">
                            <p>Herro</p>
                        </div>
                    </a>
                </div>
            </article>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php } // done the foreach statement ?>
        </div>
            <hr/>
        </section>
    </article>
</div>
<?php get_footer(); ?>

