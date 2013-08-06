<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
    <?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container"> <!-- container, ends in footer.php -->
    <header>
        <?php if(is_front_page()): ?>
            <h1>
                <a href="<?php echo get_option('home'); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
        <?php else: ?>
            <a href="<?php echo get_option('home'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>
    </header>
