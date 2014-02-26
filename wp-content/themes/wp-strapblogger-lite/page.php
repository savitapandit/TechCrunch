<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 */

get_header(); ?>

    <div class="container-fluid">
 
    	<div class="row-fluid">
        <div class="span8 well-intro">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Begin the first div -->
	
				
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpstrapblogger' ), 'after' => '</div>' ) ); ?>
				<div class="clearfix"></div>
			</div>
	
		<!-- Closes the first div -->
	<!-- Begin Comments -->
		<?php comments_template('/templates/comments.php'); ?>
	<!-- End Comments -->
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">
			<?php _e('Sorry, no posts matched your criteria.', 'wpstraprid' ); ?>
		</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
        </div>
       
       <?php if ( is_active_sidebar( 'wpstrapblogger-sidebar-page' ) ) : ?>
	        <div class="span4 well-sidebar">
			    <?php dynamic_sidebar( 'wpstrapblogger-sidebar-page' ); ?>
			</div>
        <?php endif; // end sidebar widget area ?> 
       
    </div>
	<!-- end row -->
  </div>    
<!-- end container -->

<?php get_footer(); ?>