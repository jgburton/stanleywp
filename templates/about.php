<?php
/**
* Template Name: About
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package StanleyWP
*/

get_header(); ?>

<div class="about">
	<div class="container">
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'about' );



				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->
</div><!-- .about -->

<?php
// Grab the metadata from the database
$leftcol = get_post_meta( get_the_ID(), '_stanleywp_left', true );
$rightcol = get_post_meta( get_the_ID(), '_stanleywp_right', true );

// Echo the metadata
echo esc_html( $text );
?>

<div class="container">
	<div class="row mt-5">
		<div class="col-md-6">
			<!-- <p>text left</p> -->
			<?php echo wp_kses_post( $leftcol ); ?>
		</div><!-- .col-md-6 -->
		<div class="col-md-6">
			<!-- <p>text right</p> -->
			<?php echo wp_kses_post( $rightcol ); ?>
		</div><!-- .col-md-6 -->
	</div><!-- .row -->
</div><!-- .container -->



<?php
// get_sidebar();
get_footer();
