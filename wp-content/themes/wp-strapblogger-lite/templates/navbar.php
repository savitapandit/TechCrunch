<div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed within .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
            <!-- Our menu needs to go here -->
			<?php wp_nav_menu( array(
	           'theme_location'		 => 'main-menu',
	           'menu_class'		=>	'nav nav-pills',
	           'depth'				=>	0,
	           'fallback_cb'		=>	false,
	           'walker'			=>	new WPStrapBlogger_Nav_Walker,
	           )); 
            ?>
			</div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->