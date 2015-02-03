<div class="clearfix">
    <article class="col-xs-6 col-sm-7 col-sm-offset-1 property">
        <div class="panel panel-default">
            <h1 class="panel-heading">
                <i class="fa fa-home">
                    <?php
                    $property_id = url_to_postid($url);
                    $property = get_post($property_id);
                    echo $property->post_title;
                    ?>
                </i>
            </h1>
            <?php echo get_the_post_thumbnail(); ?>
            <div class="panel-body">
                <?php echo the_content(); ?>
            </div>
        </div>
    </article>
    <aside class="col-xs-6 col-sm-4">
        <?php get_sidebar('property'); ?>
    </aside>
</div>
<hr/>
