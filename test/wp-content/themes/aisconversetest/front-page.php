<?php get_header()?>
    <section class="banner-sec">
        <div class="container">
            <div class="banner-slider">
                <div class="banner-slide">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="banner-info">
                                <span><img src="<?php echo get_template_directory_uri()?>/images/clock.png" alt="">26, January 2019</span>
                                <h2>Researchers design robot glider that takes off from water</h2>
                                <a href="#" title="" class="lnk-default">Read More</a>
                            </div><!--banner-info end-->
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri()?>/images/banner-img.jpg" alt="">
                            </div><!--banner-img end-->
                        </div>
                    </div>
                </div><!--banner-slide end-->
                <div class="banner-slide">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="banner-info">
                                <span><img src="<?php echo get_template_directory_uri()?>/images/clock.png" alt="">26, January 2019</span>
                                <h2>Researchers design robot glider that takes off from water design robot glider.</h2>
                                <a href="#" title="" class="lnk-default">Read More</a>
                            </div><!--banner-info end-->
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri()?>/images/banner-img2.jpg" alt="">
                            </div><!--banner-img end-->
                        </div>
                    </div>
                </div><!--banner-slide end-->
                <div class="banner-slide">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="banner-info">
                                <span><img src="<?php echo get_template_directory_uri()?>/images/clock.png" alt="">26, January 2019</span>
                                <h2>Researchers design robot glider  water</h2>
                                <a href="#" title="" class="lnk-default">Read More</a>
                            </div><!--banner-info end-->
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img src="<?php echo get_template_directory_uri()?>/images/banner-img3.jpg" alt="">
                            </div><!--banner-img end-->
                        </div>
                    </div>
                </div><!--banner-slide end-->
            </div><!--banner-slider end-->
        </div>
    </section><!--banner-sec end-->

    <section class="main-content">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; else : ?>
            <?php endif; ?>
            <?php get_template_part('template-parts/about-us');?>
            <?php get_template_part('template-parts/blog');?>
            <div class="clearfix"></div>
        </div>
    </section><!--main-content end-->
<?php get_footer()?>