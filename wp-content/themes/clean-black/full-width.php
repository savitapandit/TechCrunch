<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

<div id="onebar-content">
	<div id="onebar-postarea">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
				
		</div>
</div>
<!-- The main column ends  -->

<?php get_footer(); ?>