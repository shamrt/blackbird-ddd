<div class="widget_inner first">
    <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
        <?php dynamic_sidebar('first-footer-widget-area'); ?>
    <?php else : ?>  
        <h3><?php _e('BUSINESS DETAILS','ddd'); ?></h3>
        <p><?php _e('Lorem ipsum Consequat ea consectetur anim tempor sed eu id ut laboris enim enim mollit in Ut ex aliquip deserunt do.','ddd'); ?></p>
        <p><?php _e('Non incididunt Excepteur voluptate fugiat quis esse consectetur sint et anim. Lorem ipsum Consectetur pariatur sit Excepteur in aliqua nostrud dolor amet elit.','ddd'); ?></p>               
    <?php endif; ?> 
</div>
<div class="widget_inner">
    <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
        <?php dynamic_sidebar('second-footer-widget-area'); ?>
    <?php else : ?> 
        <h3><?php _e('SOCIAL LINKS','ddd'); ?></h3>
        <ul class="social-links">
            <?php if (ddd_get_option('ddd_facebook') != '') { ?>
                <li><a href="<?php echo ddd_get_option('ddd_facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><?php _e('&nbsp;&nbsp;Join Us On Facebook','ddd'); ?></a> </li>
            <?php } ?>  
            <?php if (ddd_get_option('ddd_twitter') != '') { ?>
                <li><a href="<?php echo ddd_get_option('ddd_twitter'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><?php _e('&nbsp;&nbsp;Join Us On Twitter','ddd'); ?></a></li>
            <?php } ?>
            <?php if (ddd_get_option('ddd_linked') != '') { ?>
                <li><a href="<?php echo ddd_get_option('ddd_linked'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" /><?php _e('&nbsp;&nbsp;Join Us On In.com','ddd'); ?></a></li>
            <?php } ?>
            <?php if (ddd_get_option('ddd_rss') != '') { ?>
                <li><a href="<?php echo ddd_get_option('ddd_rss'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/subscribe.png" /><?php _e('&nbsp;&nbsp;Subscribe to Our Blog','ddd'); ?></a></li>
            <?php } ?>
        </ul>
    <?php endif; ?>
</div>
<div class="widget_inner last">
    <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
        <?php dynamic_sidebar('third-footer-widget-area'); ?>
    <?php else : ?> 
        <h3><?php _e('FOOTER SETUP','ddd'); ?></h3>
        <p><?php _e('Footer is widgetized. To setup the footer, drag the required Widgets in Appearance -> Widgets Tab in the First, Second or Third Footer Widget Areas.','ddd'); ?></P>
    <?php endif; ?>
</div>
