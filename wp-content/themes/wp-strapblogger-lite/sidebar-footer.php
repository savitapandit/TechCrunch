    <?php if ( is_active_sidebar( 'wpstrapblogger-footer-left' ) ) : ?>
		<div class="span3">
            <?php dynamic_sidebar( 'wpstrapblogger-footer-left' ); ?>
        </div>
	<?php endif; // end sidebar widget area ?>
        
    <?php if ( is_active_sidebar( 'wpstrapblogger-footer-middlel' ) ) : ?>
		<div class="span3">
            <?php dynamic_sidebar( 'wpstrapblogger-footer-middlel' ); ?>
        </div>
	<?php endif; // end sidebar widget area ?>	
        
	<?php if ( is_active_sidebar( 'wpstrapblogger-footer-middler' ) ) : ?>
		<div class="span3">
	        <?php dynamic_sidebar( 'wpstrapblogger-footer-middler' ); ?>
        </div>
	<?php endif; // end sidebar widget area ?>	
        
	<?php if ( is_active_sidebar( 'wpstrapblogger-footer-right' ) ) : ?>
		<div class="span3">
	        <?php dynamic_sidebar( 'wpstrapblogger-footer-right' ); ?>
        </div>
	<?php endif; // end sidebar widget area ?>