<?php get_header(); ?>
<div class="main error404">
    <h2>Error 404 - Not Found</h2>
    <p>The page you were looking for has either been deleted or moved.</p>
    <p>Do you want to search for it?</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>