<div class="clearfix">
    <?php get_header(); ?>
</div>
<div class="hidden-xs homepage-splash">
    <?php
        $post = get_post();
        $title = $post->ID;
        echo get_the_post_thumbnail($title, 'full');
        wp_reset_query();
    ?>
    <hr/>
</div>

<div class="">
    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7">

        <section class="panel panel-default">

            <h3 href class="panel-heading"><a href="<?php $propertyLink=get_site_url().'/properties'; echo $propertyLink ?>">Our Vacation Rentals</a></h3>
            <div class="col-xs-12 btn-group btn-group-justified">
                <a ng-repeat="(key,section) in nav.properties" ng-click="$parent.show.rooms={}; $parent.show.rooms=key" type="button" class="btn btn-default">{{section}}</a>
            </div>
            <hr class="col-xs-12"/>
            <?php
            // get all the properties category
            $args = array('include'=> '7');
            $cats = get_categories($args);

            foreach ($cats as $cat) {
            echo "<div class='clearfix'>";
            $cat_id= $cat->term_id;
            query_posts("cat=$cat_id");

            if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article ng-show='(show.rooms == 0 || show.rooms == vrqc.propertiesObject[index.propertyPostsById[id[<?php echo the_ID(); ?>]]].custom_fields.roomcount[0])' ng-init="id[<?php echo the_ID(); ?>] = '<?php echo the_ID(); ?>';" class="clearfix panel-body">
                <a href="<?php the_permalink();?>">
                    <div class="col-xs-12 col-sm-5 frontpage-post">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <h4><i class="fa fa-home"> <?php the_title(); ?></i></h4>
                        <p><?php the_content('More'); ?></p>
                    </div>
                </a>
                <hr class="col-xs-12"/>
            </article>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php } // done the foreach statement ?>
        </div>
            <hr/>
        </section>
        <section>
            <h3>Blog Entries</h3>
            <?php
            // get all the categories from the database except test, offrs, and properties
            $args = array('exclude'=> '1, 2, 5, 7');
            $cats = get_categories($args);

            foreach ($cats as $cat) {
            echo "<div class='clearfix post-group col-sm-4'><div class='panel panel-default'>";
            $cat_id= $cat->term_id;
            echo "<h2 class='panel-heading'>".$cat->name."</h2>";
            query_posts("cat=$cat_id&posts_per_page=1");

            if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="panel-body">
                <a href="<?php the_permalink();?>">
                    <div class="frontpage-post">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <div>
                        <h4><i class="fa fa-thumb-tack"> <?php the_title(); ?></i></h4>
                    </div>
                </a>
                <hr/>
            </article>
        </div>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php echo "</div>"; ?>
            <?php } // done the foreach statement ?>
            <?php wp_reset_query(); ?>

        </div>
        </section>
    </div>
    <aside class="col-xs-12 col-sm-3 col-md-4 col-lg-5">
        <section>
            <h3>Follow us</h3>
            <p>Stay abreast of Quebec City's finest info</p>
            <input type="text"/><button>Subscribe</button>
        </section>
        <section>
            <h3>Reviews</h3>
            <?php
            // Posts per page setting
            $ppp = 3; // either use the WordPress global Posts per page setting or set a custom one like $ppp = 10;
            $custom_offset = 0; // If you are dealing with your custom pagination, then you can calculate the value of this offset using a formula
            // category (can be a parent category)
            $category_parent = 7;
            // lets fetch sub categories of this category and build an array
            $categories = get_terms( 'category', array( 'child_of' => $category_parent, 'hide_empty' => false ) );
            $category_list =  array( $category_parent );
            foreach( $categories as $term ) {
            $category_list[] = (int) $term->term_id;
            }
            // fetch posts in all those categories
            $posts = get_objects_in_term( $category_list, 'category' );
            $sql = "SELECT comment_ID, comment_date, comment_content, comment_post_ID
            FROM {$wpdb->comments} WHERE
            comment_post_ID in (".implode(',', $posts).") AND comment_approved = 1
            ORDER by comment_date DESC LIMIT $ppp OFFSET $custom_offset";
            $comments_list = $wpdb->get_results( $sql );
            if ( count( $comments_list ) > 0 ) {
            $date_format = get_option( 'date_format' );
            echo '<div class="well">';
            foreach ( $comments_list as $comment ) {
            echo '<article><i class="col-xs-2 col-sm-3 fa fa-user fa-3x text-center"> </i> <b class="col-xs-10 col-sm-9">'.substr( $comment->comment_content, 0, 50 ).'</b><br />'.date( $date_format, strtotime( $comment->comment_date ) ).' | <a href="'.get_permalink( $comment->comment_post_ID ).'">'.get_the_title( $comment->comment_post_ID ).'</a>
                <hr/></article>';
            }
            echo '</div>';
            } else {
            echo '<p>No comments</p>';
            }
            ?>

        </section>
        <section class="featured-offer">
            <?php
                $cat_id = 5; //the certain category ID
                $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
            if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
            <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </section>
    </aside>
</div>

<div class="clearfix col-xs-12">
    <?php get_footer(); ?>
</div>