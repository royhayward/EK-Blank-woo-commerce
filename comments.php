<?php // Do not delete these lines
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
?>
<?php if(!empty($post->post_password)): ?>
    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password): ?>
        <p class="nocomments">
            <?php _e('This post is password protected. Enter the password to view comments', 'blank') ?>.
        </p>
        <?php return; ?>
    <?php endif; ?>
<?php endif; ?>
<div id="comments">
    <?php if (have_comments()): ?>
        <?php comments_form(); ?>
        <?php $comments_by_type = &separate_comments($comments); ?>
        <?php if(!empty($comments_by_type['comment']) ): ?>
            <h3 class="comments"><?php comments_number();?></h3>
            <ul class="commentlist">
                <?php wp_list_comments('callback=custom_comment&type=comment'); ?>
            </ul>
            <div class="navigation comment-nav">
                <div class="nav-prev"><?php previous_comments_link() ?></div>
                <div class="nav-next"><?php next_comments_link() ?></div>
            </div>
        <?php endif; ?>
        <ul class="pinglist">
            <?php if(!empty($comments_by_type['pings'])): ?>
            <li>
                <h3 class="pings"><?php _e('Trackbacks', 'blank') ?></h3>
            </li>
            <?php wp_list_comments('callback=custom_pings&type=pings'); ?>
        </ul>
        <div class="navigation comment-nav"> 
            <div class="nav-prev"><?php previous_comments_link() ?></div>
            <div class="nav-next"><?php next_comments_link() ?></div>
        </div>
    <?php else : ?>
        <?php if ('open' == $post->comment_status): ?>
            <?php comments_form(); ?>
            <p>No comments yet</p>
        <?php else: ?>
            <!-- if comments are closed display this -->
        <?php endif; ?>
    <?php endif; ?>
</div>
