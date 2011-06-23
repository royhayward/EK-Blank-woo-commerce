<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
    <?php 
    if (is_home()) {
        echo bloginfo('name');
    } elseif (is_category()) {
        echo __('Category &raquo; ', 'blank'); wp_title('&laquo; - ', TRUE, 'right');
        echo bloginfo('name');
    } elseif (is_tag()) {
        echo __('Tag &raquo; ', 'blank'); wp_title('&laquo; - ', TRUE, 'right');
        echo bloginfo('name');
    } elseif (is_search()) {
        echo __('Search results &raquo; ', 'blank');
        echo the_search_query();
        echo '&laquo; - ';
        echo bloginfo('name');
    } elseif (is_404()) {
        echo '404 '; wp_title(' - ', TRUE, 'right');
        echo bloginfo('name');
    } else {
        echo wp_title(' - ', TRUE, 'right');
        echo bloginfo('name');
    }
    ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body>
<div class="wrapper"> <!-- wrapper, ends in footer.php -->
    <div class="header">
        <h1>
            <a href="<?php echo get_option('home'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>
