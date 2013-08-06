<?php // Do not delete these lines
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
?>
<?php if(!empty($post->post_password)): ?>
    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password): ?>
        <p class="nocomments">
            This post is password protected. Enter the password to view comments
        </p>
        <?php return; ?>
    <?php endif; ?>
<?php endif; ?>
<div id="comments">
    <?php if(have_comments()): ?>
        <?php comment_form(); ?>
        <?php wp_list_comments(); ?>
        <div class="navigation"> 
            <div class="nav-prev"><?php previous_comments_link() ?></div>
            <div class="nav-next"><?php next_comments_link() ?></div>
        </div>
    <?php else : ?>
        <?php if ('open' == $post->comment_status): ?>
            <?php comment_form(); ?>
            <p>No comments yet</p>
        <?php else: ?>
            <!-- if comments are closed display this -->
        <?php endif; ?>
    <?php endif; ?>
</div>
