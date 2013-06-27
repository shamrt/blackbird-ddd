<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>
            <?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?>
        </title> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>	
    </head>				
    <body <?php body_class(); ?> style="<?php if (blackbird_get_option('blackbird_bodybg') != '') { ?>background: fixed url(<?php echo blackbird_get_option('blackbird_bodybg'); ?>);<?php } else {
            ?> background: fixed url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg); <?php } ?>" >
        <div class="page">
            <div class="container">
                    <div class="header">

                        <!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
                        <div id="logo" class="h1">
                            <a href="<?php echo home_url(); ?>" rel="nofollow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ddd/header.png">
                            </a>
                            <div class="sh_bottom"></div>
                        </div>

                    </div>

                    <!--start Menu wrapper-->
                    <div class="menu_wrapper">
                        <navigation id="main-nav">
                            <a href="#" class="mobile_nav closed"><?php _e('Pages Navigation Menu','black-bird'); ?><span></span></a>
                            <?php blackbird_nav(); ?> 
                        </navigation>
                        <div class="top-search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                    <!--End Menu wrapper-->
                    <!-- <div class="clear"></div> -->