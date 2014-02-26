<?php get_header(); ?>

<!-- Start of Home Intro Widget Section - Single Wide -->
<?php if ( is_active_sidebar( 'wpstrapblogger-home-intro' ) ) : ?>
<div class="container">

  <div class="home-intro well-intro">
    <?php dynamic_sidebar( 'wpstrapblogger-home-intro' ); ?>  
  </div>

</div><!-- End of Home Intro -->
<?php endif; ?>
<div class="row">
<div class="span8">
    <!-- Start Of Our Posts -->
        <?php get_template_part('templates/content', 'home'); ?>
    <!-- End Of Our Posts Section -->
</div>
<div class="span4">
    <?php if ( is_active_sidebar( 'wpstrapblogger-sidebar-blog' ) ) : ?>
	    <div class="well-sidebar">
		    <?php dynamic_sidebar( 'wpstrapblogger-sidebar-blog' ); ?>
		</div>
    <?php endif; // end sidebar widget area ?> 
</div>
</div>
<div class="container pagination">
    <?php 
		$big = 999999999; // need an unlikely integer
		echo paginate_links(array(
	    	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
		));
	?>
</div>
<?php get_footer(); ?>