<?php
/*
Template Name: About-xxx
 */
get_header(); 

$heading1 = get_field('heading1');
$bio1 = get_field('bio1');
$image1 = get_field('image1');

$heading2 = get_field('heading2');
$sub2 = get_field('sub2');
$bio2 = get_field('bio2');
$image2 = get_field('image2');

$heading3 = get_field('heading3');
$sub3 = get_field('sub3');
$bio3 = get_field('bio3');
$image3 = get_field('image3');
$website3 = get_field('website3');

get_template_part('content', 'sidebar'); 
?>

<section class="about"></section>

<div class="container-main">

  <div class="row featurette">
    <div class="col-md-8">
    	
      <h2 class="featurette-heading"><?php echo $heading1; ?></h2>
      <p class="lead"><?php echo $bio1; ?></p>
    </div>
    <div class="col-md-4">
      <img class="featurette-image img-responsive center-block" alt="<?php echo $image1['alt']?>" src="<?php echo $image1['url']?>">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 col-md-push-5">
      <h2 class="featurette-heading"><?php echo $heading2; ?> <span class="text-muted"><?php echo $sub2; ?></span></h2>
      <p class="lead"><?php echo $bio2; ?></p> 
    </div>
    <div class="col-md-5 col-md-pull-7">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/barry.jpg" alt="Barry">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Suba Sankaran <span class="text-muted">vocals</span></h2>
      <p class="lead">DORA award-winning, twice JUNO-nominated world/fusion vocalist Suba Sankaran has effortlessly combined musical worlds, performing across North America, Europe, Asia and Africa with Autorickshaw, master drummer Trichy Sankaran, FreePlay Duo and Retrocity (80s a cappella revue). Suba is in demand as a choral director, arranger, educator and composer. She has composed and produced music for theatre, film, radio and dance. Highlights include collaborations with Deepa Mehta and the CBC.</p>
      <p><a href="http://www.subasankaran.com/" class="web" target="_blank">www.subasankaran.com</a></p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/4-suba.jpg" alt="Suba">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 col-md-push-5">
      <h2 class="featurette-heading">George Koller <span class="text-muted">bass</span></h2>
      <p class="lead">Bassist, composer, producer, promoter, and multi-instrumentalist George Koller has toured/performed/recorded with an array of prominent artists: Peter Gabriel, Holly Cole, Loreena McKennitt, the Shuffle Demons, and Bruce Cockburn. George was presented with the 2007 National Jazz Award for Bassist of the Year, and he is the producer of the International Divas concert series.</p>
      <p><a href="http://www.georgekoller.com/" class="web" target="_blank">www.georgekoller.com</a></p> 
    </div>
    <div class="col-md-5 col-md-pull-7">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/12-george.jpg" alt="George">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Colleen Allen <span class="text-muted">soprano saxophone, flute</span></h2>
      <p class="lead">A multi-talented musician, Colleen Allen makes her magic on alto, tenor and soprano sax, as well as the flute, clarinet and accordion. Known for her skill and presence on stage, she is currently a member of Molly Johnson's band and has performed with a diverse array of artists such as Anne Murray, Holly Cole, Heavy Weather, Rita MacNeil, Gino Vanelli, Ani DiFranco and Cirque de Soleil.</p>
      <p><a href="http://www.colleenallen.ca/" class="web" target="_blank">www.colleenallen.ca</a></p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/13-colleen.jpg" alt="Colleen">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 col-md-push-5">
      <h2 class="featurette-heading">Paul Fitterer <span class="text-muted">drums</span></h2>
      <p class="lead">Drummer and percussionist Paul Fitterer has performed, toured, and recorded in many musical settings, including work with Space Trio, Bob Mover, Lorne Lofsky, Kim Ratcliffe, Brian Katz, Paul Cram, and The May Trio w/ George McFetridge &amp; James Young. Paul also co-leads the group One Big Song.</p> 
      <p><a href="http://www.onebigsong.com/" class="web" target="_blank">www.onebigsong.com</a></p>
    </div>
    <div class="col-md-5 col-md-pull-7">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/paul.jpg" alt="Paul ">
    </div>
  </div>

	<hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Kobi Hass <span class="text-muted">bass</span></h2>
      <p class="lead">Bassist Kobi Hass, who hails from Tel Aviv, is a respected an in-demand musician who has worked with both global and jazz artists. He has played with award-winning musicians, including the band Jaffa Road, and vocalist Vandana Vishwas.</p>
      <p><a href="http://www.kobihass.com/" class="web" target="_blank">www.kobihass.com</a></p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="<?php bloginfo ('template_url'); ?>/assets/img/16-kobi-2.jpeg" alt="Kobi">
    </div>
  </div>

	<!-- /END THE FEATURETTES -->
	<br/>
	<br/>
	<br/>
	<br/>

	

</div><!-- .container-main -->
 
<?php
//get_template_part('content', 'footer');
get_footer(); ?>



















