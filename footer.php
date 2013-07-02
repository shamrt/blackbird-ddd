</div> <!-- End #content -->

<!--Start Footer-->
<div class="footer-wrapper">
    <div class="container">
        <div class="footer">
            <?php
            /* A sidebar in the footer? Yep. You can can customize
             * your footer with four columns of widgets.
             */
            get_sidebar('footer');
            ?>
        </div>
    </div>
</div>
<!--End Footer-->

<div class="footer_bottom">
    <div class="container">
        <div class="footer_bottom_inner"> 
            <span class="blog-desc">				
                <?php echo get_bloginfo('title'); ?>
                -
                <?php echo get_bloginfo('description'); ?>
            </span>
            <?php if (ddd_get_option('ddd_footertext') != '') { ?>
                <span class="copyright"><?php echo ddd_get_option('ddd_footertext'); ?></span> 
            <?php } else { ?>
                <span class="copyright"><a href="http://sha.nemart.in"><?php _e('Website and hosting by Shane Martin', 'ddd'); ?></a></span>
            <?php } ?>			
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>