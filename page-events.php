<?php
/*
Template Name: Events
 */
get_header(); 

?>

<section class="events">
	
</section>

<div class="container-main">

	<!-- Buttons 2 -->
	<div class="row">
		<div class="col-md-2">

			<?php echo '<h1 class="events-header">' . $upcoming_header . ' </h1>'; ?>
		</div><!-- col-md -->	
	</div><!-- row -->

	<div class="btn-group" role="group">
  <button type="button" class="btn btn-default event-choose" id="upco">Upcoming</button>
  <button type="button" class="btn btn-default event-choose" id="past">Past</button>
	</div>

	<div class="row">
		<div class="upco past-hide events">
	
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
			else:
				echo '<p class="event">No events to display.</p>';
			endif;
			?>
	
		</div>	
	
		<div class="past upco-hide hide events">
			
			<?php
			if(have_rows('past')): 
				while(have_rows('past')): the_row(); ?>					
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
			else:
				echo '<p class="event">No events to display.</p>';
			endif;
			?>

	
		</div>
</div>	<!-- row -->



		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>