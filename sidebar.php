<div class="sidebar">   
    <?php if (!dynamic_sidebar('primary-widget-area')) : ?>
        <?php get_search_form(); ?>
        <h3>
            <?php _e('Archives', 'ddd'); ?>
        </h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>        
    <?php endif; // end primary widget area ?>
    <?php
// A second sidebar for widgets, just because.
    if (is_active_sidebar('secondary-widget-area')) :
        ?>
        <?php dynamic_sidebar('secondary-widget-area'); ?>
    <?php endif; ?>    
</div>