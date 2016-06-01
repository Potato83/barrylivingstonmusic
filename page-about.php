<?php
/*
Template Name: About
 */
get_header(); 

$bios = get_field('bios');

get_template_part('content', 'sidebar'); 
?>

<section class="about"></section>

<div class="container-main">
  <?php 
    if($bios){ 
      $length = count($bios);        

      for ($i=0; $i < $length; $i++) { 
        if($i%2==1){ ?>
          <div class="row featurette">
            
            <div class="col-md-4">
              <img class="featurette-image img-responsive center-block" alt="<?php echo $bios[$i]['image']['alt']?>" src="<?php echo $bios[$i]['image']['url']?>">
            </div>

            <div class="col-md-8"> 
              <h2 class="featurette-heading"><?php echo $bios[$i]['heading']; ?> <span class="text-muted"><?php echo $bios[$i]['sub_heading']; ?></span></h2>
              <p class="lead"><?php echo $bios[$i]['bio']; ?></p>
              <p><a href="<?php echo $bios[$i]['website']; ?>" class="web" target="_blank"><?php echo substr($bios[$i]['website'],7,-1); ?></a></p>
            </div>

          </div>
          <hr class="featurette-divider">
        <?php }

        if($i%2==0){ ?>
          <div class="row featurette">
            
            <div class="col-md-5 col-md-push-7">
              <img class="featurette-image img-responsive center-block" src="<?php echo $bios[$i]['image']['url']?>" alt="<?php echo $bios[$i]['image']['alt']?>">
            </div>

            <div class="col-md-7 col-md-pull-5">
              <h2 class="featurette-heading"><?php echo $bios[$i]['heading']; ?> <span class="text-muted"><?php echo $bios[$i]['sub_heading']; ?></span></h2>
              <p class="lead"><?php echo $bios[$i]['bio']; ?></p> 
              <p><a href="<?php echo $bios[$i]['website']; ?>" class="web" target="_blank"><?php echo substr($bios[$i]['website'],7,-1); ?></a></p>
            </div>
          </div>
          <hr class="featurette-divider">
        <?php }                             
      }
    }
  ?>
    <!-- /END THE FEATURETTES -->

  <div class="alt-foot">
    <?php echo date('Y'); ?> Barry Livingston &bull; Site by <a href="https://twitter.com/Sammy_Potato" target="_blank">Sammy_Potato</a>
  </div>
    	
      
      
    
      
    

  

  



	

</div><!-- .container-main -->
 
<?php
//get_template_part('content', 'footer');
get_footer(); ?>



















