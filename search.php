<?php get_header(); ?>
<div class="main"> 
    <?php if(have_posts()): ?>
        <h2>Search results:</h2>
		<?php while(have_posts()): the_post(); ?>
            <div class="post">
                <h3>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
				<div class="date"><?php the_time('l, j F, Y') ?></div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <div class="meta">
                    <?php the_tags('Tags: ',',',' ') ?>
                    Category: <?php the_category(', ') ?>
                    <?php comments_popup_link(
                        'Comments (0)',
                        'Comments (1)',
                        'Comments (%)',
                        'comments-link',
                        'Comments closed'
                    ); ?>
                </div>
            </div>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="nav-prev"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="nav-next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2>Nothing found. Try a different search?</h2>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>