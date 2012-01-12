<div class="sidebar">
    <div class="block-1">        
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)): ?>    
            You don't seem to have any widgets active yet... 
            <a 
                href="<?php echo get_option('home'); ?>/wp-admin/widgets.php"
                title="Add some widgets">
                Add some!
            </a>
        <?php endif; ?>
    </div>
    <?php if(is_single()): ?>
        <div class="block-2">        
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(2)): ?>    
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

