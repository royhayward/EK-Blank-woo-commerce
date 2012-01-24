<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
    <?php if(is_home()): ?>
        <?php bloginfo('name'); ?>
    <?php elseif(is_category()): ?>
        Category &raquo; <?php wp_title('&laquo; - ', TRUE, 'right'); ?>
        <?php bloginfo('name'); ?>
    <?php elseif(is_tag()): ?>
        Tag &raquo; <?php wp_title('&laquo; - ', TRUE, 'right'); ?>
        <?php bloginfo('name'); ?>
    <?php elseif(is_search()): ?>
        Search results &raquo; <?php the_search_query(); ?> &laquo; - 
        <?php bloginfo('name'); ?>
    <?php elseif (is_404()): ?>
        404 <?php wp_title(' - ', TRUE, 'right'); ?>
        <?php bloginfo('name'); ?>
    <?php else: ?>
        <?php wp_title(' - ', TRUE, 'right'); ?>
        <?php bloginfo('name'); ?>
    <?php endif; ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper"> <!-- wrapper, ends in footer.php -->
    <div class="header">
        <h1>
            <a href="<?php echo get_option('home'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>
