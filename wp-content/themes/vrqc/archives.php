<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="col-xs-12 col-sm-8 panel panel-default">
    <div id="content" role="main" class="panel-body">

        <?php the_post(); ?>
        <h1 class="panel-heading"><?php the_title(); ?></h1>

        <div class="col-xs-12 col-sm-6">
            <div class="panel-body">
                <h2>By Month:</h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 panel-body">
            <h2>By Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
        </div>

    </div><!-- #content -->
</div><!-- #container -->


<hr class="col-xs-12"/>
<?php get_footer(); ?>