<footer>
    <div class="col-xs-12">
        <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-footer' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
    <div class="text-right">
        <a href="tel:15817776339"><button class="btn btn-default "><i class="fa fa-phone"> <span class="hidden-xs">(581) 777-6339</span></i></button></a>
        <a href="mailto:quebeccityreservations@gmail.com"><button class="btn btn-default "><i class="fa fa-envelope"> <span class="hidden-xs">Email</span></i></button></a>
        <a target="new" href="https://www.facebook.com/pages/Vacation-Rentals-Quebec-City/188400344615871"><button class="btn btn-default "><i class="fa fa-facebook-official"> <span class="hidden-xs">Facebook</span></i></button></a>
    </div>
</footer>

<?php wp_footer();?>



</body>
</html>