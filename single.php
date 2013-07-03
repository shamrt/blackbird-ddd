<?php
/**
 * The Template for displaying all single posts.
 * 
 */
?>
<?php get_header(); ?>

<!--Start Page Heading-->
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content single">

        <div class="content-bar">
            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
            <!--post start-->
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="post_title single"><span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(esc_attr__('Permalink to %s', 'ddd'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a><span></h1>
                <div class="post_content">
                    <?php the_content(); ?>
                    <div class="clear"></div>

                    <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'ddd') . '</span>', 'after' => '</div>')); ?>
                    <?php if (has_tag()) { ?>
                    <div class="tag">
                        <?php the_tags(__('Post Tagged with ', ', ', '')); ?>
                    </div>
                    <?php } ?>
                </div>                              
                
                <?php get_template_part("post", "meta"); // Get post metadata ?>
                
            </div>
            <!--End Post-->
            <?php
            endwhile;
            else:
                ?>
            <div class="post">
                <p>
                    <?php _e('Sorry, no posts matched your criteria.', 'ddd'); ?>
                </p>
            </div>
        <?php endif; ?>
        <!--End Loop-->
        <nav id="nav-single"> <span class="nav-previous">
            <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post ', 'ddd')); ?>
        </span> <span class="nav-next">
        <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'ddd')); ?>
    </span> </nav>
    <!--Start Comment box-->
    <?php comments_template(); ?>
    <!--End Comment box--> 
</div>

<!--Start sidebar-->
<?php get_sidebar(); ?>
<!--End sidebar-->

</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?> 