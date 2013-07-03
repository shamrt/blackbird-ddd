<ul class="post_meta clearfix">
    <li class="posted_by">
        <span>
            <?php _e('Posted by', 'ddd'); ?>
        </span>
        <img src="<?php echo get_template_directory_uri(); ?>/images/admin.png" />
        <?php the_author_posts_link(); ?>
    </li>
    <?php if (has_category()) : ?>
        <li class="post_category">
            <span><?php _e('Posted in', 'ddd'); ?></span>
            &nbsp;&nbsp;<?php the_category(', '); ?>
        </li>
    <?php endif; ?>
    <li class="post_date">
        <img src="<?php echo get_template_directory_uri(); ?>/images/date.png" />
        <?php echo get_the_time('M, d, Y') ?>
    </li>
    <li class="post_comment">
        <img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" />&nbsp;&nbsp;
        <span><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></span>
    </li>
</ul>