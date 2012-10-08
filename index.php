<?php get_header(); ?>
<?php if(have_posts()): ?>
    <div class="main"> 
        <?php while(have_posts()): the_post(); ?>
            <div class="post">
                <h2 class="title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h2>
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
    </div>
<?php else: ?>
    <div class="main">
        <h2>There were no results that matched your request</h2>
        <p>Do you want to search for it?</p>
        <?php include (TEMPLATEPATH . "/searchform.php"); ?>
     </div>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
