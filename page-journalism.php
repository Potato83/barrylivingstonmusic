<?php
/*
Template Name: Journalism
 */
get_header(); 

?>

<section class="journalism">
	
</section>

<div class="container-main">
	<h1 class="events-header">Broadcasting &amp; Journalism</h1>
	<div class="padder"></div>
		
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; // end of the loop ?>
	
	
		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>