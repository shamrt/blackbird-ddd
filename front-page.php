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

        <?php

        for ($i=1; $i <= 5; $i++) { 
            
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $slider = ddd_get_option("ddd_slideimage$i");
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');

            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $slider)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>


            <?php // Allow for videos?
            if ($check_img_ofset == 0 && ddd_get_option("ddd_slideimage$i") != '') { ?>
                <li><?php echo ddd_get_option("ddd_slideimage$i"); ?></li>
            <?php } else { ?>  

                <?php // Only show configured slides; else, single sample slide 
                if (ddd_get_option("ddd_slideimage$i") != '' || 
                            (ddd_get_option("ddd_slideimage$i") == '' && $i == 1) ) { ?>
                <li>  
                    <?php if (ddd_get_option("ddd_slideimage$i") != '') { ?>
                        <img  src="<?php echo ddd_get_option("ddd_slideimage$i"); ?>" alt=""/>
                    <?php } else { ?>
                        <img  src="<?php echo get_template_directory_uri(); ?>/images/slider1.png" alt=""/>
                    <?php } ?>

                    <div class="flex-caption">
                        <?php if (ddd_get_option("ddd_sliderheading$i") != '') { ?>
                            <h1>
                                <a href="<?php
                                if (ddd_get_option("ddd_Sliderlink$i") != '') {
                                    echo ddd_get_option("ddd_Sliderlink$i");
                                }
                                ?>"><?php echo stripslashes(ddd_get_option("ddd_sliderheading$i")); ?></a>
                            </h1>
                        <?php } else { ?>
                            <h1><a href="#"><?php _e('Aenean eu erat tellus', 'ddd'); ?></a></h1>
                        <?php } ?>

                        <?php if (ddd_get_option("ddd_sliderdes$i") != '') { ?>
                            <p>					   
                                <?php echo stripslashes(ddd_get_option("ddd_sliderdes$i")); ?>
                            </p>
                        <?php } else { ?>
                            <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris.', 'ddd'); ?></p>
                        <?php } ?>						 
                    </div>
                </li>
                <?php } ?>

            <?php } ?>
        <?php } ?>

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
        <h1><?php _e('Create beautiful &amp; Professional Website with the DDD Theme easily &amp; quickly.', 'ddd'); ?></h1>
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

                <div class="circle">

                    <a href="<?php if (ddd_get_option('ddd_link'.$fc[0]) != '') { echo ddd_get_option('ddd_link'.$fc[0]); } ?>">
                        <?php if (ddd_get_option('ddd_fimg'.$fc[0]) != '') { ?>
                            <img src="<?php echo ddd_get_option('ddd_fimg'.$fc[0]); ?>" />
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ddd/feature<?php echo $fc[0]; ?>.jpg" />
                        <?php } ?>
                    </a> 
                </div>

                <?php if (ddd_get_option('ddd_headline'.$fc[0]) != '') { ?>
                    <h1>
                        <a href="<?php
                        if (ddd_get_option('ddd_link'.$fc[0]) != '') {
                            echo ddd_get_option('ddd_link'.$fc[0]);
                        }
                        ?>"><?php echo stripslashes(ddd_get_option('ddd_headline'.$fc[0])); ?></a>
                    </h1>
                <?php } else { ?>
                    <h1><a href="#"><?php _e('Adipisicing amet sit', 'ddd'); ?></a></h1>
                <?php } ?>

                <?php if (ddd_get_option('ddd_feature'.$fc[0]) != '') { ?>
                    <p><?php echo stripslashes(ddd_get_option('ddd_feature'.$fc[0])); ?></p>
                <?php } else { ?>
                    <p><?php _e('Lorem ipsum Duis dolore sint laboris consequat anim culpa esse do dolor elit sunt magna consequat pariatur cillum labore nisi.', 'ddd'); ?></p>
                <?php } ?>

                <a class="read-more" href="<?php
                if (ddd_get_option('ddd_link'.$fc[0]) != '') {
                    echo ddd_get_option('ddd_link'.$fc[0]);
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