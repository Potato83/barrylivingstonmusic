<?php
/*
Template Name: Reviews
 */
get_header(); 

$reviews = get_field('reviews');

// $cover = get_field('review_cover');
// $author = get_field('review_author');
// $link = get_field('review_link');
// $link_text = get_field('link_text');
// $date = get_field('date');
?>

<section class="reviews">
	
</section>

<div class="container-main reviews">
	<h1 class="events-header">Reviews</h1>
	<div class="padder"></div>

	<?php

	foreach($reviews as $review){ ?>
		
	<img src="<?php echo $review['review_cover']['url']; ?>" alt="<?php echo $review['review_cover']['alt']; ?>" class="review-cover">

	<h3><?php echo $review['review_author']; ?> &bull; <a href="<?php echo $review['review_link']; ?>" target="_blank" class="white"><?php echo $review['link_text'];?></a></h3><p><?php echo $review['date']; ?></p>
	<h4 class="review-title"><?php echo $review['review_title']; ?></h4>
	<div class="review-content">
		<?php echo $review['review_content']; ?>
	</div>
	<hr>
	<div class="padder"></div>
	<?php }




	?>




<!-- 	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile;  ?> -->
	
	
		
</div><!-- .container-main -->


<?php get_template_part('content', 'sidebar'); ?>

<?php get_footer(); ?>