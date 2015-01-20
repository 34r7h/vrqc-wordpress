<section id="content" class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="thumbnails">
          <li class="col-xs-3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="wp-content/uploads/2015/01/img-1.png" alt="">
                <h5>Most</h5>
                <h3>popular</h3>
              </div>
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="col-xs-3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="wp-content/uploads/2015/01/img-2.png" alt="">
                <h5>Beauty</h5>
                <h3>Gifts</h3>
              </div>
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean my hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="col-xs-3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="wp-content/uploads/2015/01/img-3.png" alt="">
                <h5>Attention</h5>
                <h3>to Detail</h3>
              </div>
              <div class="thumbnail-pad">
                  <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suipit varius mi. Cum sociis natoque penatibus et.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="col-xs-3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="wp-content/uploads/2015/01/img-4.png" alt="">
                <h5>Award-Winning</h5>
                <h3>Fragrances</h3>
              </div>
              <div class="thumbnail-pad">
                  <p>Nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">


    </div>
    <div class="row">
    	<div class="col-xs-8">
        	<div class="clearfix cols-1">
                <div class="col-xs-4 left-0">
                    <h4 class="indent-2">Welcome</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
                    <figure class="img-indent"><img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10653642_574926949296540_2215621477242951631_n.jpg?oh=accf947bf0c5dc1d78aae6ccb5ccb7db&oe=55372B9E&__gda__=1432690344_64d12b96589ca648ae6f12010d3fa486" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.
                </div>
                <div class="col-xs-4">
                    <h4 class="indent-2">What We Do</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
                    <figure class="img-indent"><img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10622781_574924152630153_275621012059616202_n.jpg?oh=785d08e89af2b25d1f14f6ab0b27ee99&oe=5522FC7B&__gda__=1428525024_b55b1a22c31fef5c84f4385a42cadf79" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.
                </div>
            </div>
            <h4 class="indent-1">our Capabilities:</h4>
            <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturien.</p>
            <div class="lists">
            	<div class="col-xs-4 left-0">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="link">More Info</a>
        </div>

        <div class="col-xs-4">
        	<h4 class="indent-2">Latest News:</h4>
        	<ul class="list-news">
                    <?php
                            $newsposts = get_posts();

                            foreach($newsposts as $post) :
                            setup_postdata($post); ?>

                            <li >
                                <p><?php the_date();?></p>
                                <p><?php the_time();?></p>

                                 <a href="<?php the_permalink();?>" class="btn btn_ span4">

                            <p class="text-info"><?php the_title();?></p>
                            <?php the_content();?>
                            </a>
                            </li>

                        <?php endforeach; ?>
                </ul>
            <ul class="list-news">
            	<li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. <a href="#" class="underline">>></a>
                </li>
                <li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Aenean nonummy hendrerit mauris</p>
                    Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.  <a href="#" class="underline">>></a>
                </li>
                <li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturien.</p>
                    Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.  <a href="#" class="underline">>></a>
                </li>
            </ul>
            <h4 class="indent-1">testimonials:</h4>
			<p class="p1">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada.”</p>
            <span class="clr"><strong>Mark Priston</strong>, <a href="#" class="link-2">demolink.org</a></span>
        </div>

    </div>
  </div>
</section>
