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
		
		<?php 
			if( have_posts() ) :
				if ( is_front_page() && ! is_home() ) :
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
				else :
					// display content for home.php
				endif;
			?>
		<?php endif; ?>

	</section><!-- /.ends #banner -->

	<!-- Main -->
	<section id="main" class="container">

		<?php 
			// Display featured intro post
			display_home_intro_content(); ?>

		<!-- This content should be ideally generated 
			 via a page builder such as Visual Composer -->
		<section class="box special features">
			<div class="features-row">
				<section>
					<span class="icon major fa-bolt accent2"></span>
					<h3>Magna etiam</h3>
					<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim 
					rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
				</section>
				<section>
					<span class="icon major fa-area-chart accent3"></span>
					<h3>Ipsum dolor</h3>
					<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim 
					rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
				</section>
			</div>
			<div class="features-row">
				<section>
					<span class="icon major fa-cloud accent4"></span>
					<h3>Sed feugiat</h3>
					<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim 
					rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
				</section>
				<section>
					<span class="icon major fa-lock accent5"></span>
					<h3>Enim phasellus</h3>
					<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim 
					rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
				</section>
			</div>
		</section><!-- /.ends special-features -->

		<div class="row">
			
			<?php display_home_featured_posts(); ?>

		</div>

	</section><!-- /.ends #main -->

<?php

get_footer();
