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
		}// ends display_home_intro_content();

		// Add new taxonomy, make it hierarchical like categories
		function create_topics_hierarchical_taxonomy() {
			//first do the translations part for GUI
			$labels = array(
				'name' => _x( 'Topics', 'taxonomy general name' ),
				'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Topics' ),
				'all_items' => __( 'All Topics' ),
				'parent_item' => __( 'Parent Topic' ),
				'parent_item_colon' => __( 'Parent Topic:' ),
				'edit_item' => __( 'Edit Topic' ), 
				'update_item' => __( 'Update Topic' ),
				'add_new_item' => __( 'Add New Topic' ),
				'new_item_name' => __( 'New Topic Name' ),
				'menu_name' => __( 'Topics' ),
			);    
			 
			// Now register the taxonomy
			register_taxonomy('topics',array('post'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'topic' ),
			));
			 
		}// ends create_topics_hierarchical_taxonomy

		//hook into the init action and call create_book_taxonomies when it fires
		add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );


		// Display 4 posts from certain category on home page.
		function display_home_featured_posts() {
			//$catquery = new WP_Query( 'cat=32&posts_per_page=3' );
			$catquery = new WP_Query( 
				array( 
					'category_name'       => 'featured-home',
					'post_type'           => 'post',
					'ignore_sticky_posts' => true,
					'posts_per_page'      => 2,
				)
			);
			if ( $catquery->have_posts() ) {
				// The loop
				while ( $catquery->have_posts() ) :
					$catquery->the_post();
					?>
					<?php get_template_part( 'template-parts/content-home-featured' ); ?> 
				<?php
				endwhile;
			}
			else {
				// Nothing found..
			}
			// Reset Post Data
			wp_reset_postdata();
		}// ends display_home_featured_posts();



	}// Ends !function_exists()



?>