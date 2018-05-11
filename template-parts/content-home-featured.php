<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daya_Demo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '6u 12u(narrower)' ); ?>>
	<section class="box special">
		<span class="image featured">
			<?php daya_demo_post_thumbnail(); ?>
		</span>

		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif; 
		?>

		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'daya-demo' ),
			'after'  => '</div>',
		) );
		?>
		<ul class="actions">
			<li><a href="#" class="button alt">Learn More</a></li>
		</ul>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
