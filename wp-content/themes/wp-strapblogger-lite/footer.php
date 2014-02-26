<!-- FOOTER -->
<div class="container-fluid">
      
      <footer class="well-intro">
	  <div class="row-fluid">
	  <?php get_sidebar ('footer'); ?>
	  </div>
        <p class="scroll-top pull-right"><a href="#scroll-top" class="top">Return to the top</a></p>
        <p class="copyright"><?php if ( get_theme_mod( 'wpstrapblogger_copyright_textbox' ) ) { esc_html_e(get_theme_mod( 'wpstrapblogger_copyright_textbox' )); } else { echo 'Copyright &copy; ' . date( 'Y' ); ?> <?php bloginfo( 'name' ); } ?></p>
		<?php if ( get_theme_mod( 'wpstrapblogger_credits_visibility' ) == '' ) { ?>
	    <p class="powered-by"><a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpstrapblogger' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpstrapblogger' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'wpstrapblogger' ), 'WP StrapBlogger', '<a href="http://www.wpstrapcode.com/" rel="designer">WP Strap Code</a>' ); ?></p>
	    <?php } ?>
		
	  </footer>
</div>
</div><!-- /.container -->

    <?php wp_footer(); ?>
  </body>
</html>