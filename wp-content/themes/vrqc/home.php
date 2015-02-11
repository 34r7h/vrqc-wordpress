<div class="clearfix"><?php get_header(); ?>
</div><div class="">
    <div class='clearfix post-group col-xs-11 col-xs-push-1'>
        <div class="btn-group btn-group-justified">
            <a ng-repeat="category in nav.categories" ng-href="<?php get_site_url(); ?>/category/{{category}}" ng-click="$parent.show.category=category" type="button" class="btn btn-default">{{category}}</a>
        </div>
        <hr/>
        <?php
            // get all the categories from the database
            $args = array('exclude'=> '1, 2, 5, 7');
        $cats = get_categories($args);
        foreach ($cats as $cat) {
        $cat_id= $cat->term_id;
        $cat_slug = $cat->slug;
        echo "<a href='" .get_site_url() ."/category/" . $cat->slug . "'><div class='clearfix panel panel-default'><h2 class='clearfix panel-heading'>".$cat->name."</h2></a>";
        query_posts("cat=$cat_id&posts_per_page=3");

        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="col-xs-12 col-sm-6 col-md-4 post">
            <a class="panel-body" href="<?php the_permalink();?>">
                <?php echo get_the_post_thumbnail() ?>
                <h4><i class="fa fa-thumb-tack"> <?php the_title(); ?></i></h4>
                <?php the_content("Investigate"); ?>
            </a>
        </article>
        <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
    </div>
    <?php } // done the foreach statement ?>
</div>
</div>
<?php get_footer(); ?>