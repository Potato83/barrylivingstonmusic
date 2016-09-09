<?php
/*
Template Name: Journalism
 */
get_header(); 

?>

<section class="journalism">
	
</section>

<div class="container-main">
	
		
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; // end of the loop ?>
	
	
		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>