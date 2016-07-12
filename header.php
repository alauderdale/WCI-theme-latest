<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>
    <body class='index'>
      <nav class='sliding-menu slide-menu-right'>
        <button class='close-menu nav-toggler'>
          <i class='md md-close'></i>
        </button>
        <div class='clearfix'></div>
        <a class='btn btn-default' href='<?php echo get_permalink( get_page_by_title( 'Contact' ) ) ?>'>
          Get in Touch
        </a>
        <?php wp_nav_menu( array( 
        'theme_location' => 'menu-primary', 
        'container' => false, 
        'menu_class' => 'nav main-links',
        'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
        )); ?>
        <div class='nav-padding-left'>
          <p>
            <ul class='list-inline menu-social'>
                            <?php $socialLoop = new WP_Query( array('post_type' => 'social', 'posts_per_page' => 3) ); ?>

      <?php while ( $socialLoop->have_posts() ) : $socialLoop->the_post(); ?>
              <li>
                <a target="_blank" href='<?php the_field('link_url');?>'>
                  <i class='fa <?php the_field('icon_class');?>'></i>
                </a>
              </li>
                            <?php wp_reset_postdata(); ?>
      <?php endwhile; // end of the loop. ?>
            </ul>
          </p>
        </div>
      </nav>
      <div id='wrapper'>
        <nav class='main-nav'>
          <div class='container'>
            <a class='navbar-brand' href='<?php bloginfo('url')?>'>
              <img src='<?php bloginfo('template_url'); ?>/images/logo@2x.png' width='210px'>
            </a>
            <div class='pull-right visible-xs'>
              <button class='nav-toggler toggle-slide-right'>
                <span class='menu-text'>
                  menu
                  <i class='md md-menu'></i>
                </span>
              </button>
            </div>
            <div class='nav-links hidden-xs pull-right'>
        <?php wp_nav_menu( array( 
        'theme_location' => 'menu-primary', 
        'container' => false, 
        'menu_class' => 'nav main-links',
        'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
        )); ?>
            </div>
          </div>
        </nav>
        <!-- end menu -->
        <div class='main'>