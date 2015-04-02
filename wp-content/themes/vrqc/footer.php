<footer>
    <div class="col-xs-12">
        <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-footer' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
    <div class="text-right">
        <a href="mailto:quebeccityreservations@gmail.com"><button class="btn btn-default "><i class="fa fa-envelope"> <span class="hidden-xs">Email</span></i></button></a>
        <a target="new" href="https://www.facebook.com/pages/Vacation-Rentals-Quebec-City/188400344615871"><button class="btn btn-default "><i class="fa fa-facebook-official"> <span class="hidden-xs">Facebook</span></i></button></a>
        <a href="tel:15817776339"><i class="fa fa-phone fa-2x phone"> <span class="hidden-xs">(581) 777-6339</span></i></a>
    </div>
    <br/>
    <div class="text-right">
        <b class="col-xs-3 pull-right"><p>1216 Cours du Général-de Montcalm</p> <p>Québec, PQ G1R 3G4 </p><p>Canada</p></b>
        <p class="col-xs-3 pull-right">Business Address:</p>
    </div>
</footer>

<?php wp_footer();?>



</body>
</html>