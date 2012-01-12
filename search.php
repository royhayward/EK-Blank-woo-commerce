<?php get_header(); ?>
<div class="main"> 
    <?php if(have_posts()): ?>
        <h2 class="search">Search results:</h2>
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
                    <?php the_content(); ?>
                </div>
                <div class="entry-meta entry-meta-index">
                    <?php the_tags('Tags: ',',',' ') ?>
                    Category: <?php the_category(', ') ?>
                    <?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)', 'comments-link', 'Comments closed'); ?>
                    <?php edit_post_link('Edit', ' | ', ''); ?>
                </div>
            </div>
		<?php endwhile; ?>
		<div class="navigation navigation-index">
			<div class="nav-prev"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="nav-next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="search search-nothing">
            Nothing found. Try a different search?
        </h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>