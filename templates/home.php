<?php
/**
* Template Name: Home
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

<div class="banner">
	<div class="container">
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main text-center" role="main">

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );



				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->
</div><!-- .banner -->



<div class="container text-center">
	<div class="row mt-5">
		<?php

		// the query
		$args = array('post_type' => 'project');
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();

				get_template_part( 'template-parts/content', 'projects' );
 endwhile; ?>
				</div><!--  .post-thumbnail -->


			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->



<?php
// get_sidebar();
get_footer();
