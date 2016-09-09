<?php
/*
Template Name: Events_back
 */
get_header(); 
$upcoming_events = get_field('upcoming_events');
$past_events = get_field('past_events');
$upcoming_header = get_field('upcoming_header');

//$event_up = get_field('event_up');
?>

<section class="journalism">
	
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
	
			<?php	if($upcoming_events){					
			$event_up = get_sub_field('event_up'); 
					foreach($upcoming_events as $event){
						//echo '<a href="'. $event['event_url'] .'" target="_blank"><p class="event">' . $event['event_title'] . '</p></a><br/>';
						foreach($event_up as $foo){ ?>


							<p class="event"><?php echo $foo['line']; ?></p>
						<?php }
						echo '<p class="event"><a class="event" target="_blank" href="' . $event['event_url'] . '">' . $event['link_txt'] . '</a></p>';


					}
				}	else {
					echo '<p class="event">No events to display.</p>';
				}		
			?>	
	
		</div>	
	
		<div class="past upco-hide hide events">
			
			<?php	if($past_events){					
	
					foreach($past_events as $event){
						//echo '<a href="'. $event['event_url'] .'" target="_blank"><p class="event">' . $event['event_title'] . '</p></a>';

						echo '<p class="event"><a class="event" target="_blank" href="' . $event['event_url'] . '">' . $event['event_title'] . '</a></p>';
					}
				}	


			?>

	
		</div>
</div>	<!-- row -->



		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>