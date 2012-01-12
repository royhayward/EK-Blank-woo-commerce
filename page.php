<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <div class="main"> 
            <?php edit_post_link('Edit this page', '<p class="edit">', '</p>'); ?>
            <div class="post page">
                <h2 class="page-title">
                    <?php the_title(); ?>
                </h2>
                <div class="entry-content page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>