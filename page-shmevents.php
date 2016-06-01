<?php
/*
Template Name: Events
 */
get_header(); 
$upcoming_events = get_field('upcoming_events');
$past_events = get_field('past_events');
$upcoming_header = get_field('upcoming_header');
?>

<section class="events">

</section>

<div class="container-main" id="events-main">
	<div class="row">
		<div class="col-md-2">
			<?php echo '<h1 class="events-header">' . $upcoming_header . ' </h1>'; ?>
		</div><!-- col-md -->	
	</div><!-- row -->
	<div class="row">
				<div class="col-md-7">
					<h1 class="event-choose hi-light past-x" id="upcoxxx">Upcoming </h1>
				</div>
				<div class="col-md-7">
					<h1 class="event-choose upco-x" id="pastxxx">Past</h1>
				</div>
				
	</div><!-- row -->
	<div class="row">
				<div class="upco past-hide col-md-6 events">
			
					<?php	if($upcoming_events){					
			
							foreach($upcoming_events as $event){
								echo '<a href="'. $event['event_url'] .'" target="_blank"><p class="event">' . $event['event_title'] . '</p></a>';
							}
						}	else {
							echo '<p class="event">No events to display.</p>';
						}		
					?>	
			
				</div>	
			
				<div class="past upco-hide events">
					
					<?php	if($past_events){					
			
							foreach($past_events as $event){
								echo '<a href="'. $event['event_url'] .'" target="_blank"><p class="event">' . $event['event_title'] . '</p></a>';
							}
						}			
					?>	
			
				</div>
			</div><!-- row -->


		
	 

		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>