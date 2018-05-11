<?php


	if ( !function_exists() ) {
		// Display 1 post from certain category.
		function display_home_intro_content() {
			//$catquery = new WP_Query( 'cat=32&posts_per_page=3' );
			$catquery = new WP_Query( 
				array( 
					'category_name'       => 'intro-home',
					'post_type'           => 'post',
					'ignore_sticky_posts' => true,
					'posts_per_page'      => 1,
				)
			);
			if ( $catquery->have_posts() ) {
				// The loop
				while ( $catquery->have_posts() ) :
					$catquery->the_post();
					?>
					<?php get_template_part( 'template-parts/content-home-intro' ); ?> 
				<?php
				endwhile;
			}
			else {
				// Nothing found..
			}
			// Reset Post Data
			wp_reset_postdata();
		}
	}// Ends !function_exists()



?>