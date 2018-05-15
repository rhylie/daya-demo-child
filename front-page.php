<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daya_Demo
 */

get_header();
?>

	<!-- Banner -->
	<section id="banner">
		<?php the_field('main_heading'); ?>
	</section><!-- /.ends #banner -->

	<!-- Main -->
	<section id="main" class="container">

		<?php display_home_intro_content(); ?><!-- Display featured intro post -->

			<?php 
				if( have_posts() ) : ?>
					<?php
					if ( is_front_page() && ! is_home() ) :
						while ( have_posts() ) :
							the_post();
							the_content();
						endwhile;
					endif; 
					?>
			<?php endif; ?>

		<?php display_home_featured_posts(); ?>

	</section><!-- /.ends #main -->

<?php

get_footer();
