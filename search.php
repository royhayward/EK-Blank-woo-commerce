<?php get_header(); ?>
<div class="main"> 
    <?php if(have_posts()): ?>
        <h2 class="search"><?php _e('Search results:', 'blank'); ?> </h2>
		<?php while(have_posts()): ?>
            <?php the_post(); ?>
            <div class="post post-index post-<?php the_ID(); ?>">
                <h3 class="entry-title index-entry-title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
				<div class="additional-meta"><?php the_time('l, j F, Y') ?></div>
                <div class="entry-content entry-content-index">
                    <?php the_content( __('Read the rest of this entry &raquo;', 'blank')); ?>
                </div>
                <div class="entry-meta entry-meta-index">
                    <?php the_tags( __('Tags: ', 'blank'), ", ", " ") ?>
                    <?php _e('Category: ', 'blank'); ?><?php the_category(', ') ?>
                    <?php comments_popup_link( __( 'Comments (0)', 'blank' ), __( 'Comments (1)', 'blank' ), __( 'Comments (%)', 'blank' ), 'comments-link', __('Comments closed', 'blank')); ?>
                    <?php edit_post_link( __('Edit'), ' | ', ''); ?>
                </div>
            </div>
		<?php endwhile; ?>
		<div class="navigation navigation-index">
			<div class="nav-prev"><?php next_posts_link( __('&laquo; Older Entries', 'blank')) ?></div>
			<div class="nav-next"><?php previous_posts_link( __('Newer Entries &raquo;', 'blank')) ?></div>
		</div>
	<?php else : ?>
		<h2 class="search search-nothing">
            <?php _e('Nothing found. Try a different search?', 'blank'); ?>
        </h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>