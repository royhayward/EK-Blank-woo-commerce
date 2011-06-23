<?php get_header(); ?>
<div class="main error404">
    <h2>
        <?php _e('Error 404 - Not Found', 'blank'); ?>
    </h2>
    <p>
        <?php _e('The page you were looking for has either been deleted or moved.', 'blank'); ?>
    </p>
    <p>
        <?php _e('Do you want to search for it', 'blank'); ?>?
    </p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>