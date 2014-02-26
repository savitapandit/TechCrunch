<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<div class="container">
<div class="row">
<div class="span8">
        	

			<?php if ( have_posts() ) : ?>

				<header class="span7">
					<h1 class="page-title">
						<?php
							if ( is_category() ) {
								printf( __( 'Category Archives: %s', 'wpstrapblogger' ), '<span>' . single_cat_title( '', false ) . '</span>' );

							} elseif ( is_tag() ) {
								printf( __( 'Tag Archives: %s', 'wpstrapblogger' ), '<span>' . single_tag_title( '', false ) . '</span>' );

							} elseif ( is_author() ) {
								/* Queue the first post, that way we know
								 * what author we're dealing with (if that is the case).
								*/
								the_post();
								printf( __( 'Author Archives: %s', 'wpstrapblogger' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
								/* Since we called the_post() above, we need to
								 * rewind the loop back to the beginning that way
								 * we can run the loop properly, in full.
								 */
								rewind_posts();

							} elseif ( is_day() ) {
								printf( __( 'Daily Archives: %s', 'wpstrapblogger' ), '<span>' . get_the_date() . '</span>' );

							} elseif ( is_month() ) {
								printf( __( 'Monthly Archives: %s', 'wpstrapblogger' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							} elseif ( is_year() ) {
								printf( __( 'Yearly Archives: %s', 'wpstrapblogger' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							} else {
								_e( 'Archives', 'wpstrapblogger' );

							}
						?>
					</h1>
					
				</header><!-- .page-header -->

				
           
				<?php /* Start the Loop */ ?>
					<?php get_template_part( 'templates/content', 'archives' ); ?>

			<?php endif; ?>

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