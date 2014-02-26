<div class="search-form">
<?php do_action('wpstrapblogger_pre_searchform'); ?>
<form role="search" method="get" id="searchform" class="form-search" action="<?php esc_url(home_url('/')); ?>">
  <label class="hide" for="s"><?php _e('Search for:', 'wpstrapblogger'); ?></label>
  <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="search-query" placeholder="<?php _e('Search', 'wpstrapblogger'); ?> <?php bloginfo('name'); ?>">
  <input type="submit" id="searchsubmit" value="<?php _e('Search', 'wpstrapblogger'); ?>" class="btn">
</form>
<?php do_action('wpstrapblogger_after_searchform'); ?>
</div>