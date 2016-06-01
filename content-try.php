<!-- HEADER -->
<header id="masthead" class="site-header" role="banner">

  <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container responsive-size">

          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
             
            
            </button>
            <!-- <a class="navbar-brand pull-left" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/header.jpg" alt="SEX T-REX"></a> -->
            <div class="my-brand">
              <a class="my-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="header image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" class=""/></a>
            </div><!-- my-brand -->
              
             
            
            <!-- <img alt="header image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" class=""/> -->
          </div><!-- navbar-header -->
          


    <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
     <div class="my-menu">    
    <?php
      wp_nav_menu( array(
        
        'theme_location'  => 'primary',
        'depth' => 2,
        'container'     => 'nav',
        'container_class' => 'navbar-collapse collapse',
        'menu_class'    => 'nav navbar-nav navbar-inverse navbar-right'
        
        
      ) );
    ?>
      </div> <!-- my-menu -->



        </div><!-- container -->
      </div><!-- navbar -->

    </div><!-- navbar wrapper -->

</header><!-- #masthead -->