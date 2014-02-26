<?php get_header(); ?>

<div class="row">
<div class="span8">
<div class="well-content">
<div class="alert">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'wpstrapblogger'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'wpstrapblogger'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'wpstrapblogger'); ?></li>
  <li><?php _e('an out-of-date link', 'wpstrapblogger'); ?></li>
</ul>
<p><?php _e('You try searching again for what you were looking for...', 'wpstrapblogger'); ?></p>
<?php get_search_form(); ?>
</div>
</div>
<div class="span4">
    <?php if ( is_active_sidebar( 'wpstrapblogger-sidebar-blog' ) ) : ?>
	    <div class="well-sidebar">
		    <?php dynamic_sidebar( 'wpstrapblogger-sidebar-blog' ); ?>
		</div>
    <?php endif; // end sidebar widget area ?> 
</div>
</div>
<?php get_header(); ?>