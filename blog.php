<?php
/*
  Template Name: Blog Page
 */
?>
<?php get_header(); ?>
<div class="page-heading">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<div class="clear"></div>
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content">
        <div class="content-bar">                     
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('showposts=' . $limit . '&paged=' . $paged);
                $wp_query->is_archive = true;
                $wp_query->is_home = false;
                ?>
                <!-- Start the Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <!--post start-->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(esc_attr__('Permalink to %s', 'ddd'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
                            <div class="post_content">
                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                    </a>
                                <?php } else { ?>
                                  
                                        <?php ddd_get_image(595, 300); ?> 
                                        <?php                                   
                                }
                                ?>	
                                <?php the_excerpt(); ?>
                                <div class="clear"></div>
                                <?php if (has_tag()) { ?>
                                    <div class="tag">
                                        <?php the_tags(__('Post Tagged with ', ', ', '')); ?>
                                    </div>
                                <?php } ?>
                                <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Read More', 'ddd'); ?></a> </div>

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
                <nav id="nav-single" style="margin-top:20px;"> <span class="nav-previous">

        <?php next_posts_link( __( '&larr; Older posts', 'ddd' ) ); ?>
        </span> <span class="nav-next">
        <?php previous_posts_link( __( 'Newer posts &rarr;', 'ddd' ) ); ?>
        </span> </nav>
        </div>

        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>