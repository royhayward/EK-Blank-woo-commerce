<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
    <input class="text" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input class="submit" type="submit" value="<?php _e('Search'); ?>" />
</form>
