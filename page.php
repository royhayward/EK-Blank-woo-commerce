<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <div class="main"> 
            <div class="post">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>