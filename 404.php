<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Barry_Livingston_Music
 */

get_header(); ?>



<section class="error-404 not-found">
	
</section><!-- .error-404 -->

<div class="container-main">

	<div class="col-md-8 col-md-offset-2">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'barry_livingstone_music' ); ?></h1>
		</header><!-- .page-header -->
			<h1 class="return-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return to site</a></h1>
		<div class="page-content">
			
		
		</div><!-- .page-content -->
	</div>

</div><!-- .container-main -->

			


<?php
get_template_part('content', 'sidebar');
get_footer();
