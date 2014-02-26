<?php

 if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'wpstrapblogger'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-title">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry-meta">
		<?php wpstrapblogger_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'wpstrapblogger' ), '<span class="edit-link">'. __( 'Admin Links', 'wpstrapblogger' ) .': ', '</span>' ); ?>
	</div><!-- .entry-meta -->
    </div>
	
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
	    <?php if ( has_post_thumbnail() && ! is_single() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<?php the_content( wpstrapblogger_read_more() ); ?>
	    <?php wpstrapblogger_clearboth(); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

    <footer class="entry-meta">
		<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'wpstrapblogger' ) . '</span>', __( 'One comment so far', 'wpstrapblogger' ), __( 'View all % comments', 'wpstrapblogger' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part('/templates/author-bio' ); ?>
		<?php endif; ?>
      
	  <?php wpstrapblogger_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpstrapblogger' ), 'after' => '</div>' ) ); ?>
	<div class="separator"></div>
	</footer>
 
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav">
    <ul class="pager">
      <?php if (get_next_posts_link()) : ?>
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'wpstrapblogger')); ?></li>
      <?php else: ?>
        <li class="previous disabled"><a><?php _e('&larr; Older posts', 'wpstrapblogger'); ?></a></li>
      <?php endif; ?>
      <?php if (get_previous_posts_link()) : ?>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'wpstrapblogger')); ?></li>
      <?php else: ?>
        <li class="next disabled"><a><?php _e('Newer posts &rarr;', 'wpstrapblogger'); ?></a></li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>
 </article>