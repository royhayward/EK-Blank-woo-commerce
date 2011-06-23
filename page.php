<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <div class="main"> 
            <?php edit_post_link( __('Edit this page', 'blank'), '<p class="edit">', '</p>'); ?>
            <div class="post page">
                <h2 class="page-title">
                    <?php the_title(); ?>
                </h2>
                <div class="entry-content page-content">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>