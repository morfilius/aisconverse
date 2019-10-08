<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Test html</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="theme-layout">

    <header>
        <div class="container">
            <?php if($logo = get_theme_mod('logo-img')):?>
                <div class="logo">
                    <a href="/" title="">
                        <img src="<?php echo $logo?>" alt="<?php bloginfo('name')?>">
                    </a>
                </div><!--logo end-->
            <?php endif?>
            <div class="contact-info">
                <?php if($phone = get_theme_mod('phone')):?>
                    <h3><?php echo $phone?></h3>
                <?php endif?>
            </div><!--contact-info end-->
            <div class="menu-btn">
                <a href="#" title="">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </div><!--menu-btn end-->
            <div class="clearfix"></div>
        </div>
    </header><!--header end-->
    <section class="navi-sec">
        <div class="container">
            <?php if(is_active_sidebar('search')):?>
                <?php dynamic_sidebar('search')?>
            <?php endif?>
            <!--form class="search_form">
                <input type="text" name="search" placeholder="Search">
            </form--><!--search_form end-->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'top',
                'container' => 'nav',
                'menu_class' => ''
            ));
            ?><!--navigation end-->
            <div class="clearfix"></div>
        </div>
    </section><!--navi-sec end-->
