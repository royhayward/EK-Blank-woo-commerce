<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <div class="main"> 
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <div class="content"><?php the_content(); ?></div>
                <div class="meta">
                    <?php the_tags('Tags: ') ?><br />
                    Category: <?php the_category(', ') ?> <br />
                    This entry was posted <?php the_time('l, j F, Y') ?> at <?php the_time() ?><br />
                    You can follow any responses to this entry via <?php post_comments_feed_link('RSS'); ?>.<br />
                </div>
            </div>
            <?php comments_template('', true); ?>
            <div class="navigation">
                <div class="nav-prev"><?php previous_post_link('&laquo; %link') ?></div>
                <div class="nav-next"><?php next_post_link('%link &raquo;') ?></div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <h2>There were no results that matched your request</h2>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
