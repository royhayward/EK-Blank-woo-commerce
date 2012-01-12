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
                    <?php the_content(); ?>
                </div>
                <div class="entry-meta entry-meta-single">
                    <?php the_tags('Tags: ') ?><br />
                    Category: <?php the_category(', ') ?> <br />
                    This entry was posted <?php the_time('l, j F, Y') ?> at <?php the_time() ?><br />
                    You can follow any responses to this entry via <?php post_comments_feed_link('RSS'); ?>.<br />
                    <?php edit_post_link('Edit', ' | ', ''); ?>
                </div>
            </div>
            <?php comments_template('', true); ?>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    Sorry, no posts matched you criteria.
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
