<?php

	// Register Theme Features
	function broody_theme()  {
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'bg', 1680, 900, array( 'center', 'center') );
		add_image_size( 'card', 400, 200, array( 'center', 'center') );
		add_image_size( 'wwww', 840, 580, array( 'center', 'center') );
		add_theme_support( 'custom-logo', array(
			'height'			=> 250,
			'width'			 => 250,
			'flex-width' => true,
		) );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'title-tag' );
		show_admin_bar( false );
	}
	add_action( 'after_setup_theme', 'broody_theme' );

	// Register Style
	function broody_css() {
		wp_register_style( 'grid', get_template_directory_uri() . '/css/foundation.min.css', false, '6.3.1' );
		wp_register_style( 'quicksand', get_template_directory_uri() . '/css/quicksand.css', false, '6.3.1' );
		wp_register_style( 'animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', false, '6.3.1' );
		wp_enqueue_style( 'grid' );
		wp_enqueue_style( 'animate' );
		wp_enqueue_style( 'quicksand' );
	}
	add_action( 'wp_enqueue_scripts', 'broody_css' );

	// Register JS
	function broody_js() {
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/vendor/jquery.js', false, '6.3.1', true );
		wp_enqueue_script( 'what', get_template_directory_uri() . '/js/vendor/what-input.js', false, '6.3.1', true );
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', false, '6.3.1', true );
		wp_enqueue_script( 'fontawesome', '//use.fontawesome.com/bfa003177d.js', false, '4.7.0', false );
		wp_enqueue_script( 'imgLoaded', '//unpkg.com/imagesloaded@4.1.3/imagesloaded.pkgd.min.js', false, '4.0', false );
		wp_enqueue_script( 'broody', get_template_directory_uri() . '/js/app.js', false, '1', true );
		wp_enqueue_script( 'jq' );
		wp_enqueue_script( 'what' );
		wp_enqueue_script( 'fontawesome' );
		wp_enqueue_script( 'imgLoaded' );
		wp_enqueue_script( 'broody' );
	}
	add_action( 'wp_enqueue_scripts', 'broody_js' );

	function google_maps() {
		if ( is_page(array('contact'))) {
			wp_enqueue_script( 'gma', '//maps.googleapis.com/maps/api/js?key=AIzaSyC_dYgBSH7jnkTCwaSmecREhr8DW5WBcSw&callback=initMap', false, '1', true );
			wp_enqueue_script('gma');
		}
	}
	add_action( 'wp_enqueue_scripts', 'google_maps' );

	// Register Navigation Menus
	function broody_menus() {
		$locations = array(
			'header' => __( 'Header Menu Right', 'broody' )
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'broody_menus' );

	function broody_sidebars() {
		$args = array(
			'id'			=> 'footer1',
			'class'		 => 'menu vertical',
			'name'		  => __( 'Footer Widgets 1', 'broody' ),
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		);
		register_sidebar( $args );
		$args = array(
			'id'			=> 'footer2',
			'class'		 => 'menu vertical',
			'name'		  => __( 'Footer Widgets 2', 'broody' ),
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		);
		register_sidebar( $args );
		$args = array(
			'id'			=> 'footer3',
			'class'		 => 'menu vertical',
			'name'		  => __( 'Footer Widgets 3', 'broody' ),
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		);
		register_sidebar( $args );
	}
	add_action( 'widgets_init', 'broody_sidebars' );

	class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
	        $indent = str_repeat("\t", $depth);
	        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	    }
	}

	function f6_topbar_menu_fallback($args) {
	    $walker_page = new Walker_Page();
	    $fallback = $walker_page->walk(get_pages(), 0);
	    $fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

	    echo '<ul class="dropdown menu" data-dropdown-menu>'.$fallback.'</ul>';
	}

	class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
	        $indent = str_repeat("\t", $depth);
	        $output .= "\n$indent<ul class=\"vertical menu\">\n";
	    }
	}
	function f6_drill_menu_fallback($args) {
	    $walker_page = new Walker_Page();
	    $fallback = $walker_page->walk(get_pages(), 0);
	    $fallback = str_replace("children", "children vertical menu", $fallback);
	    echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
	}

	function foundation_pagination($before = '', $after = '') {
		global $wpdb, $wp_query;
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
		if ( $numposts <= $posts_per_page ) { return; }
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = 7;
		$pages_to_show_minus_1 = $pages_to_show-1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		echo $before.'<nav class="page-navigation"><ul class="pagination">'."";
		if ($start_page >= 2 && $pages_to_show < $max_page) {
			$first_page_text = __( 'First' );
			echo '<li><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
		}
		echo '<li>';
		previous_posts_link( __('Previous') );
		echo '</li>';
		for($i = $start_page; $i  <= $end_page; $i++) {
			if($i == $paged) {
				echo '<li class="current"> '.$i.' </li>';
			} else {
				echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
			}
		}
		echo '<li>';
		next_posts_link( __('Next'), 0 );
		echo '</li>';
		if ($end_page < $max_page) {
			$last_page_text = __('Last');
			echo '<li><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
		}
		echo '</ul></nav>'.$after."";
	}