<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <div class="main"> 
            <div class="navigation nav-single">
                <div class="nav-prev nav-prev-single"><?php previous_post_link('&laquo; %link') ?></div>
                <div class="nav-next nav-next-single"><?php next_post_link('%link &raquo;') ?></div>
            </div>
            <div class="post post-single">
                <h2 class="entry-title entry-title-single"><?php the_title(); ?></h2>
                <div class="entry-content entry-content-single">
                    <?php the_content( __('<p class="serif">Read the rest of this entry &raquo;</p>')); ?>
                    <?php //wp_link_pages(array('before' => ''. _e('<strong>Pages:</strong>', 'blank') .'', 'after' => '', 'next_or_number' => 'number')); ?>
                    <?php wp_link_pages( __('before=<p>Pages: &after=</p>')); ?>
                </div>
                <div class="entry-meta entry-meta-single">
                    <?php the_tags( __('Tags: ', 'blank'), ", ", " <br />" ) ?>
                    <?php _e('Category: ', 'blank'); ?><?php the_category(', ') ?> <br />
                    <?php _e('This entry was posted', 'blank'); ?> <?php the_time('l, j F, Y') ?> <?php _e('at ', 'blank'); ?> <?php the_time() ?>	<br />
                    <?php _e('You can follow any responses to this entry via', 'blank'); ?> <?php post_comments_feed_link('RSS'); ?>.<br />
                    <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)): ?>
                        <!-- Both Comments and Pings are open -->
                        <?php _e('You can', 'blank'); ?>
                        <a href="#comments">
                            <?php _e('leave a comment', 'blank'); ?>
                        </a>
                        <?php _e('or', 'blank'); ?>
                        <a href="<?php trackback_url(); ?>" rel="trackback">
                            <?php _e('trackback', 'blank'); ?>
                        </a>
                        <?php _e('from your own site', 'blank'); ?>.
                    <?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)): ?>
                        <!-- Only Pings are Open -->
                        <?php _e('Comments are currently closed, but you can', 'blank'); ?>
                        <a href="<?php trackback_url(); ?> " rel="trackback">
                            <?php _e('trackback', 'blank'); ?>
                        </a>
                        <?php _e('from your own site', 'blank'); ?>.
                    <?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)): ?>
                        <!-- Comments are open, Pings are not -->
                        <?php _e('You can skip to the end to leave a comment. Trackbacks are currently not allowed.', 'blank'); ?>
                    <?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)): ?>
                        <!-- Neither Comments, nor Pings are open -->
                        <?php _e('Both comments and trackbacks are currently closed.', 'blank'); ?>
                    <?php endif; ?>
                    <?php edit_post_link( __('Edit'), ' | ', ''); ?>
                </div>
            </div>
            <?php comments_template('', true); ?>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <?php _e('Sorry, no posts matched your criteria', 'blank'); ?>.
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
