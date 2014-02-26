<?php
// My Custom Slider For WP Strap Code themes
?>

<!-- slideshow -->

    <div id="myCarousel" class="carousel <?php echo (get_theme_mod( 'wpstrapblogger_slider_transition' )); ?>">
        <div class="carousel-inner">
		
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>
          
		<?php $wpstrapblogger_query = new WP_Query(array(
		'category_name'  => get_theme_mod( 'wpstrapblogger_slide_cat' ), 
		'posts_per_page' => get_theme_mod( 'wpstrapblogger_slide_number' )
		)); ?>
	
    	<?php while ($wpstrapblogger_query->have_posts()) : $wpstrapblogger_query->the_post(); ?>
        
        <div class="item <?php echo $firstClass; ?>">
            <?php $firstClass = ""; ?>
			
            <?php the_post_thumbnail('wpstrapblogger-page-feature'); ?>
            <div class="carousel-caption">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="lead"><?php the_excerpt(); ?></p>
            </div>
			
        </div>
			
      	<?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>       
        </div>    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #myCarousel -->