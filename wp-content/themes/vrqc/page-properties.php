<?php get_header(); ?>
<div class="container">
    <article class="col-xs-12 col-sm-8">
        <section class="clearfix">
            <nav><h3>Condo Filtering</h3></nav>

            <?php
                $query = new WP_Query(array(
                    'post_type' => 'easy-rooms',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));


            while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            echo $post_id;
            echo '<article class="clearfix">
                    <div class="col-xs-12 col-sm-7">
                        <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                    </div>
                    <div class="col-xs-12 col-sm-5">'. get_the_content().'</div>
                </article>';
            echo "<br>";
            }

            wp_reset_query();
            ?>
            <article class="clearfix">
                <div class="col-xs-12 col-sm-7">
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div class="col-xs-12 col-sm-5">Description 1</div>
            </article>
            <hr/>
            <article class="clearfix">
                <div class="col-xs-12 col-sm-7">
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div class="col-xs-12 col-sm-5">Description 2</div>
            </article>
            <hr/>
        </section>
    </article>
    <aside class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>

