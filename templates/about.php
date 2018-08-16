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
// get_sidebar();
get_footer();
