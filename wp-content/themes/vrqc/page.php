<div class="clearfix"><?php get_header('pages'); ?></div>
<div class="container">
    <article class="col-xs-12 col-sm-8">
        <?php
        $post_id = url_to_postid($url);
        $page = get_post($post_id);
                        echo $page->post_title;

        ?>
        <h1>
            <?php
                echo $page->post_title;
            ?>
        </h1>
        <div class="col-xs-7 page">
            <?php
                $id = $page->ID;
                echo get_the_post_thumbnail($id, 'full');
            ?>
        </div>
        <?php
        echo $page->post_content;
        ?>
    </article>
    <aside class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>
