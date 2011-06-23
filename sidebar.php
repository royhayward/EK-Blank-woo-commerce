<div class="sidebar">
    <div class="block-1">        
        <?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>    
            You don't seem to have any widgets active yet... <a href="<?php echo get_option('home'); ?>/wp-admin/widgets.php" title="Add some widgets">Add some!</a>
        <?php endif; /* End of widgetized sidebar */ ?>
    </div>
    <?php if(is_single()) : ?>
        <div class="block-2">        
            <?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>    
                <!--
                widgets in this sidebar will only show on single post pages 
                http://codex.wordpress.org/Conditional_Tags
                -->
            <?php endif; /* End of widgetized sidebar */ ?>
        </div>
    <?php endif; ?>
</div>

