<?php
/*
Template Name: Home Page
 */
get_header(); 
$name = get_field('name');
$skills = get_field('skills');
get_template_part('content', 'sidebar');
?>

<section class="home">

</section>
	
<div class="hero">
	<!-- <h1>Barry Livingston</h1> -->
	<h1><?php echo $name ?></h1>
	<br/>
	<!-- <h2>Pianist &bull; Composer &bull; Educator &bull; Broadcaster &amp; Journalist</h2> -->
	<h2><?php echo $skills ?></h2>
</div>

<?php 
//get_template_part('content', 'footer');
get_footer(); ?>


