<?php
/*
Template Name: Repeater
 */
get_header(); 

?>

<section class="repeater">
	
</section>

<div class="container-main">
	
		<h1>REPEATER EXAMPLE</h1>
		<?php
			if(have_rows('upcoming')): 
				while(have_rows('upcoming')): the_row(); ?>
					
					<?php 
						if(have_rows('events')): ?>
							
							<?php
							while(have_rows('events')): the_row(); ?>
								<p class="event"><?php the_sub_field('details'); ?></p> 
							<?php endwhile; ?>
							
						<?php endif; ?>
					<a href="<?php echo the_sub_field('link'); ?>" target="_blank" class="event"><?php echo the_sub_field('link_txt'); ?></a>
					<hr>
				<?php endwhile;
			endif;

		?>












	<?php //while ( have_posts() ) : the_post(); ?>
						
		<?php //the_content(); ?>
		
	<?php //endwhile;  ?>
	
	
		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>