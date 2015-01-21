<?php get_header(); ?>
<?php

$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID );
$attachments = get_posts( $args );
if ( $attachments ) {
foreach ( $attachments as $attachment ) {
echo apply_filters( 'the_title' , $attachment->post_title );
the_attachment_link( $attachment->ID , false );
}
}
?>
Blogroll
<?php get_footer(); ?>
