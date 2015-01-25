<div class="clearfix"><?php get_header(); ?></div>
<div class="homepage-splash"><?php
$post = get_post();
$title = $post->ID;
echo get_the_post_thumbnail($title, 'full');
?></div>
<div class="container">
    <div class="col-md-9 clearfix">
        <section class="clearfix">
            <nav><h3>Condo Filtering</h3></nav>
            <article class="clearfix">
                <div class="col-xs-12 col-sm-7">
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div class="col-xs-12 col-sm-5">Description 1</div>
            </article>
            <hr/>
            <article class="clearfix">
                <div class="col-xs-12 col-sm-7">
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div class="col-xs-12 col-sm-5">Description 2</div>
            </article>
            <hr/>
        </section>
        <section>
            <nav><h3>Post Filtering</h3></nav>
            <article class="col-xs-12 col-sm-4">
                <div>
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div>
                    Post 1 Title
                </div>
                <hr/>
            </article>
            <article class="col-xs-12 col-sm-4">
                <div>
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div>
                    Post 2 Title
                </div>
                <hr/>
            </article>
            <article class="col-xs-12 col-sm-4">
                <div>
                    <img width="100%" src="http://wayneroberts.ca/wp-content/uploads/2012/12/quebec.jpg" alt=""/>
                </div>
                <div>
                    Post 3 Title
                </div>
                <hr/>
            </article>
        </section>
    </div>
    <aside class="col-md-3">
        <section>
            <h3>Follow us</h3>
            <p>Stay abreast of Quebec City's finest info</p>
            <input type="text"/><button>Subscribe</button>
        </section>
        <section>
            <h3>Reviews</h3>
            <article class="col-xs-12">
                <div class="pull-left"><img src="https://cdn3.iconfinder.com/data/icons/wine-and-vineyard-icons/512/French_Man-128.png" width="100%" alt=""/></div>
                <div>review 1</div>
                <div>date</div>
                <div>link</div>
                <hr/>
            </article>
            <article class="col-xs-12">
                <div class="pull-left"><img src="https://cdn3.iconfinder.com/data/icons/wine-and-vineyard-icons/512/French_Man-128.png" width="100%" alt=""/></div>
                <div>review 1</div>
                <div>date</div>
                <div>link</div>
                <hr/>
            </article>
        </section>
    </aside>
</div>
<?php get_footer(); ?>
