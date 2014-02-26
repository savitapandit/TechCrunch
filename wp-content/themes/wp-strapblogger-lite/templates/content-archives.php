<?php

 if (!have_posts()) : ?>
   <!--<div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'wpstrapblogger'); ?></p>
  </div>-->

<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

<div class="well-content">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-thumbnail">
	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php if (has_post_thumbnail()) {
			$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
			$imgsrc = $imgsrc[0];
		} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
			foreach($postimages as $postimage) {
			$imgsrc = wp_get_attachment_image_src($postimage->ID, 'medium');
			$imgsrc = $imgsrc[0];
		}
			} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
			$imgsrc = $match[1];
		} else {
			$imgsrc = get_template_directory_uri() . '/assets/img/wpstrapblogger.png';
		}
		?>
		<img src="<?php echo $imgsrc; $imgsrc = ''; ?>" alt="<?php the_title_attribute(); ?>" />
		</a>
	</div>

	<div class="entry-title">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	
    <div class="entry-meta">
		<?php wpstrapblogger_entry_meta(); ?>
	</div><!-- .entry-meta -->

	  <?php wpstrapblogger_clearboth(); ?>	  
	<div class="entry-content">
	    <?php the_excerpt(); ?>
	    <?php wpstrapblogger_clearboth(); ?>
	</div><!-- .entry-content -->
	
    <footer class="entry-meta">
		<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'wpstrapblogger' ) . '</span>', __( 'One comment so far', 'wpstrapblogger' ), __( 'View all % comments', 'wpstrapblogger' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
      
	  <?php wpstrapblogger_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpstrapblogger' ), 'after' => '</div>' ) ); ?>
	<!--<div class="separator"></div>-->
	</footer>
 </article>	
</div>

<?php endwhile; ?>