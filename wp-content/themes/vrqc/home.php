<?php get_header(); ?>
<div class="container">
    <?php
        $attachments = get_posts( );
        foreach ( $attachments as $attachment ) {
            $id = $attachment->ID;
            echo '<div class="col-xs-4"> ' . apply_filters( 'the_title' , $attachment->post_title );
            echo get_the_post_thumbnail($id, 'full', array('class'=>'col-xs-12')) . '</div>';
        }
    ?>
    Blogroll
</div>
<?php get_footer(); ?>
