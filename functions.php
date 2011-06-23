<?php 
load_theme_textdomain('blank'); 

if ( function_exists('register_sidebars') )
	register_sidebars(2, array(
		'name'=>'Sidebar %d',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
));

function custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
        <?php comment_author_link() ?> <?php _e('says', 'blank'); ?>:
        <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation', 'blank'); ?>.</em>
        <?php endif; ?>
        <br />
        <small class="commentmetadata">
            <?php comment_date('l, j F, Y') ?> 
            <?php _e('at', 'blank'); ?> 
            <?php comment_date('G:i') ?>
            <?php edit_comment_link( __('Edit', 'blank'),' &nbsp;|&nbsp; ',''); ?>
        </small>
        <br />
        <?php comment_text() ?>
        <div class="reply">
            <?php echo comment_reply_link(array('reply_text' => __('Reply', 'blank'), 'depth' => $depth, 'max_depth' => $args['max_depth']));  ?>
        </div>
<?php } 

function custom_pings($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> class="comment-<?php comment_ID( ); ?>">
        <?php _e('Trackback from', 'blank'); ?> 
        <em><?php comment_author_link() ?></em>
        <br />
        <small><?php comment_date('l, j F, Y') ?></small>
        <br />
        <?php comment_text() ?>
         <?php edit_comment_link( __('Edit', 'blank'),'<br /> &nbsp;|&nbsp; ',''); ?>
<?php } 

add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments_by_type = &separate_comments(get_comments('post_id=' . $id));
	return count($comments_by_type['comment']);
}
?>