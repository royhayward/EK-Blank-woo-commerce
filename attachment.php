<?php get_header(); ?>
<div class="main"> 
    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            <?php the_post(); ?>
            <div class="attachment">
                <h2 class="entry-title attach-entry-title">
                    <a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment">
                        <?php echo get_the_title($post->post_parent); ?>
                    </a> &raquo; <?php the_title(); ?>
                </h2>
                <div class="entry">
                    <p class="attachment">
                        <a href="<?php echo wp_get_attachment_url($post->ID); ?>">
                            <?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?>
                        </a>
                    </p>
                    <div class="caption">
                        <?php if(!empty($post->post_excerpt)) the_excerpt(); // this is the "caption" ?>
                    </div>
                    <?php the_content(); ?>
                    <div class="navigation">
                        <div class="alignleft"><?php previous_image_link() ?></div>
                        <div class="alignright"><?php next_image_link() ?></div>
                    </div>
                    <div class="entry-meta" id="entry-meta-attach">
                        <?php the_tags('Tags: ', ", ", " " ) ?>
                        This attachment was posted <?php the_time('l, F j, Y') ?> at <?php the_time() ?>	
                        <?php edit_post_link('Edit', ' | ', ''); ?>
                    </div>
                </div>
                <?php comments_template(); ?>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Sorry, no attachments matched your criteria.</p>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
