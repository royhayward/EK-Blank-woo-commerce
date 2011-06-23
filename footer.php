    <div class="footer">	
        <p>
            <?php bloginfo('name'); ?>
            <?php _e('is proudly powered by', 'blank') ?> 
            <a href="http://wordpress.org/">WordPress</a> &#124; 
            <a href="<?php bloginfo('rss2_url'); ?>">
                <?php _e('Entries (RSS)', 'blank'); ?>
            </a> &#124;
            <a href="<?php bloginfo('comments_rss2_url'); ?>">
                <?php _e('Comments (RSS)', 'blank'); ?>
            </a>
        </p>
        <p>
            <?php _e('Page generated in', 'blank'); ?>
            <?php timer_stop(1); ?> 
            <?php _e('seconds', 'blank') ?>.
        </p>
        <?php wp_footer(); ?>
    </div>
</div> <!-- /wrapper, begins in header.php -->
</body>
</html>
