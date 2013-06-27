<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  

<div class="clear"></div>

<!--Start Slider Wrapper-->
<div class="slider-wrapper">            
    <div class="flexslider">
        <ul class="slides">

            <!--Start Slider-->
            <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring1 = ddd_get_option('ddd_slideimage1');
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
            
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring1)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && ddd_get_option('ddd_slideimage1') != '') { ?>
            <li><?php echo ddd_get_option('ddd_slideimage1'); ?></li>
            <?php } else { ?>  
            <li>  <?php if (ddd_get_option('ddd_slideimage1') != '') { ?>
                <img  src="<?php echo ddd_get_option('ddd_slideimage1'); ?>" alt=""/>
                <?php } else { ?>
                <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.png" alt=""/>
                <?php } ?>
                <div class="flex-caption">
                    <?php if (ddd_get_option('ddd_sliderheading1') != '') { ?>

                    <h1><a href="<?php
                    if (ddd_get_option('ddd_Sliderlink1') != '') {
                        echo ddd_get_option('ddd_Sliderlink1');
                    }
                    ?>"><?php echo stripslashes(ddd_get_option('ddd_sliderheading1')); ?></a></h1>
                    <?php } else { ?>
                    <h1><a href="#"><?php _e('Elegancy with Simplicity', 'ddd'); ?></a></h1>
                    <?php } ?>
                    <?php if (ddd_get_option('ddd_sliderdes1') != '') { ?>
                    <p>					   
                        <?php echo stripslashes(ddd_get_option('ddd_sliderdes1')); ?>
                    </p>
                    <?php } else { ?>
                    <p><?php _e('Blackbird Theme allows you to create your website through an easy to use themes options panel.', 'ddd'); ?></p>
                    <?php } ?>						 
                </div>
            </li>
            <?php } ?>
            <!--End Slider-->
        </ul>
    </div>
</div>
<!--End Silder Wrapper-->
<div class="clear"></div>

<div class="seprator"></div>

<div class="content">
    <?php if (ddd_get_option('ddd_mainheading') != '') { ?>
        <h1><?php echo stripslashes(ddd_get_option('ddd_mainheading')); ?></h1>
    <?php } else { ?>
        <h1><?php _e('Create beautiful &amp; Professional Website with the Blackbird Theme easily &amp; quickly.', 'ddd'); ?></h1>
<?php } ?>
</div>


<!-- Feature Content -->

<?php
$feature_content = array(
        array(1, 'one'),
        array(2, 'two'),
        array(3, 'three')
    );
?>

<div class="feature-content">
    <div class="circle-content">

        <?php foreach ($feature_content as $fc) { ?>
            <div class="feature-content-inner <?php echo $fc[1]; ?>">

                <?php if (ddd_get_option('ddd_fimg' . $fc[0]) != '') { ?>
                    <div class="circle"><img src="<?php echo ddd_get_option('ddd_fimg' . $fc[0]); ?>" /></div>
                <?php } else { ?>
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ddd/feature<?php echo $fc[0]; ?>.jpg" />
                    </div>
                <?php } ?>

                <?php if (ddd_get_option('ddd_headline' . $fc[0]) != '') { ?>
                    <h1>
                        <a href="<?php
                        if (ddd_get_option('ddd_link' . $fc[0]) != '') {
                            echo ddd_get_option('ddd_link' . $fc[0]);
                        }
                        ?>"><?php echo stripslashes(ddd_get_option('ddd_headline' . $fc[0])); ?></a>
                    </h1>
                <?php } else { ?>
                    <h1><a href="#"><?php _e('Professional Design', 'ddd'); ?></a></h1>
                <?php } ?>

                <?php if (ddd_get_option('ddd_feature' . $fc[0]) != '') { ?>
                    <p><?php echo stripslashes(ddd_get_option('ddd_feature' . $fc[0])); ?></p>
                <?php } else { ?>
                    <p><?php _e('The BlackBird Wordpress Theme is highly optimized to look Professional. So that your website looks great to your visitors.', 'ddd'); ?></p>
                <?php } ?>

                <a class="read-more" href="<?php
                if (ddd_get_option('ddd_link' . $fc[0]) != '') {
                    echo ddd_get_option('ddd_link' . $fc[0]);
                }
                ?>"><?php _e('Read More', 'ddd') ?></a> 
            </div>    
        <?php } ?>
    
    </div>
</div>			
</div>
</div>
</div>
</div>
<?php get_footer(); ?>