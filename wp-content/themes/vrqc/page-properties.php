<?php get_header(); ?>
<div class="container" ng-controller="vrqcCtrl">
    <article class="col-xs-12 col-sm-8">
        <section class="clearfix">
            <nav><h3>Condo Filtering</h3></nav>
            <div ng-repeat="post in postData">
                {{post.title}}
            </div>

            <!--<?php
                $query = new WP_Query(array(
                    'post_type' => 'easy-rooms',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));


            while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $post_URL = get_permalink();
            echo $post_id;
            echo '<div gethtml>'. $post_URL .'</div>';
            echo '<article class="clearfix">
                    <div class="col-xs-12 col-sm-7">
                        <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                    </div>
                    <div class="col-xs-12 col-sm-5"></div>
                    <div class="col-xs-12 col-sm-5">'. get_the_content().'</div>
                    <div ng-repeat="(key, value) in postData[0]">{{value}}</div>
                </article>';
            echo "<br>";
            wp_reset_postdata();

            }

            ?>
-->
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

