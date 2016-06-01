<?php
/*
Template Name: Music
 */
get_header(); 
$videos = get_field('videos');
$mp3 = get_field('mp3');
?>

<section class="music">	
	
</section>


<div class="container-main">
<!-- <h1 class="center">Music</h1> -->
	<div class="row">		
		
		<div class="col-md-4 col-md-offset-1">

			<img src="<?php bloginfo ('template_url'); ?>/assets/img/CD-cover.jpg" alt="CD Cover">
		</div>
		<div class="col-md-5 col-md-offset-1 mp3">
			<div class="music-box">
			<?php while ( have_posts() ) : the_post(); ?>
						
			<?php the_content(); ?>
			
			<?php endwhile; // end of the loop ?>
			</div>
		</div>
	</div><!-- row -->
	<div class="padder"></div>
	<hr class="featurette-divider"> 
	
	<?php 
    if($videos){ 
      $length = count($videos);        

      for ($i=0; $i < $length; $i++) { 
        //if($i%2==0){ ?>
          
          <div class="row featurette">
            
            <div class="col-md-8 col-md-offset-2">
            	<div class="padder"></div>
            	<div class="embed-container"><?php echo $videos[$i]['youtube']; ?></div>
              
            </div>

            <!-- <div class="col-md-3 yt-caption">  -->
              <?php //echo $videos[$i]['caption']; ?> 
            <!-- </div> -->


            

            
          </div>
          <hr class="featurette-divider">
          <!-- <div class="padder"></div> -->
          

        <?php //}

        //if($i%2==1){ ?>

 
					<!-- <div class="padder"></div>
          <div class="row featurette">


          	                     
           

						<div class="col-md-5 col-md-push-7 yt-caption right">
              <?php //echo $videos[$i]['caption']; ?> 
              
            </div>

             <div class="col-md-7 col-md-pull-5 ">
             	<div class="embed-container"><?php //echo $videos[$i]['youtube']; ?></div>
                                         
            </div>
            
          </div>
          <hr class="featurette-divider"> -->
					
        <?php //}                             
      }
    }	
	?>
	<div class="alt-foot">
		<?php echo date('Y'); ?> Barry Livingston &bull; Site by <a href="https://twitter.com/Sammy_Potato" target="_blank">Sammy_Potato</a>
	</div>
</div><!-- .container-main -->

<?php get_template_part('content', 'sidebar');?>
<?php get_footer(); ?>