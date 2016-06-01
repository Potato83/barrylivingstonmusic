<?php
/*
Template Name: Contact
 */
get_header(); 

?>

<section class="contact">
	<?php //dynamic_sidebar('sidebar-2'); ?>
	
</section>

<div class="container-main">
<!-- <a href="http://www.facebook.com/thebarrylivingstongroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/fb.png ?>" alt="Facebook" id="fb"></a> -->
<h1 class="contact-info">Contact: <a href="mailto:barry.r.livingston@gmail.com">barry.r.livingston@gmail.com</a></h1>
<h1 class="contact-info"></h1>
<h1 id="facebook" class="contact-info"><a href="http://www.facebook.com/thebarrylivingstongroup" target="_blank">Facebook</a></h1>
<h1 id="join" class="contact-info"><a href="#">Join Mailing List</a></h1>


<div class="foo">
	
	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php endwhile; // end of the loop ?>

</div>		

	
</div><!-- .container-main -->

<?php get_template_part('content', 'footer');?>
<?php get_template_part('content', 'sidebar');?>
<?php get_footer(); ?>