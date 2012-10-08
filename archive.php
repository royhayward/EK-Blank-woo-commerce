<?php get_header(); ?>
<div class="main"> 
    <?php if(have_posts()): ?>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <h2>
            <?php if(is_category()): ?>
                Category "<?php single_cat_title(); ?>"
            <?php elseif(is_tag()): ?>
                Posts tagged with "<?php single_tag_title(); ?>"
            <?php elseif(is_day()): ?>
                Archive for <?php the_time('F jS, Y'); ?>
            <?php elseif(is_month()): ?>
                Archive for <?php the_time('F, Y'); ?>
            <?php elseif(is_year()): ?>
                Archive for <?php the_time('Y'); ?>
            <?php elseif(is_author()): ?>
                Author Archive 
            <?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
                Blog archives
            <?php endif; ?>
        </h2>
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
            <div class="nav-prev">
                <?php next_posts_link('&laquo; Older Entries') ?>
            </div>
            <div class="nav-next">
                <?php previous_posts_link('Newer Entries &raquo;') ?>
            </div>
        </div>
    <?php else: ?>
        <h2>There were no results that matched your request</h2>
        <p>Do you want to search for it?</p>
        <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
 </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
