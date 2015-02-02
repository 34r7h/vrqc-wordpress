<div class="clearfix">
    <article class="col-xs-6 col-sm-8 property">
        <h1>
            <?php
            $property_id = url_to_postid($url);
            $property = get_post($property_id);
            echo $property->post_title;
            ?>
        </h1>
        <?php echo get_the_post_thumbnail(); ?>
        <?php echo the_content(); ?>
    </article>
    <aside class="col-xs-6 col-sm-4">
        <?php get_sidebar('property'); ?>
    </aside>
</div>
<hr/>
