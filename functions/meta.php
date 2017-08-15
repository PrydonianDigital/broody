<?php

	add_action( 'cmb2_init', 'wwd_page' );
	function wwd_page() {
		$prefix = '_wwd_';
		$cmb_home = new_cmb2_box( array(
			'id'			=> 'home',
			'title'		 => 'Page Sections',
			'object_types'  => array( 'page' ),
			'show_on'	  => array( 'key' => 'page-template', 'value' => 'page-what-we-do.php' ),
		) );

		$home_group = $cmb_home->add_field( array(
			'id' => $prefix . 'home',
			'type' => 'group',
			'options'	 => array(
				'group_title'   => __( 'Section {#}', 'bci' ),
				'add_button'	=> __( 'Add New Section', 'bci' ),
				'remove_button' => __( 'Remove Section', 'bci' ),
				'sortable'	  => true,
			),
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name' => 'Icon',
			'id'   => $prefix . '_icon',
			'type' => 'fontawesome_icon',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name' => 'Text Section',
			'id'   => $prefix . '_title',
			'type' => 'text',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name' => 'Text Section',
			'id'   => $prefix . '_text',
			'type' => 'wysiwyg',
		) );
	}

	add_action( 'cmb2_admin_init', 'people_info' );
	function people_info() {
		$prefix = '_wwa_';
		$cmb_people = new_cmb2_box( array(
			'id'			=> 'person',
			'title'		 => 'Person Info',
			'object_types'  => array( 'people' ),
		) );
		$cmb_people->add_field(array(
			'name' => 'Title',
			'id'   => $prefix . '_title',
			'type' => 'text',
		) );
		$cmb_people->add_field(array(
			'name' => 'LinkedIn',
			'id'   => $prefix . '_linkedin',
			'type' => 'text_url',
		) );
		$cmb_people->add_field(array(
			'name' => 'Facebook',
			'id'   => $prefix . '_facebook',
			'type' => 'text_url',
		) );
		$cmb_people->add_field(array(
			'name' => 'Twitter',
			'id'   => $prefix . '_twitter',
			'type' => 'text_url',
		) );
		$cmb_people->add_field(array(
			'name' => 'YouTube',
			'id'   => $prefix . '_youtube',
			'type' => 'text_url',
		) );
		$cmb_people->add_field(array(
			'name' => 'Instagram',
			'id'   => $prefix . '_instagram',
			'type' => 'text_url',
		) );
	}

	class KS_FontAwesome_IconPicker {
		const VERSION = '1.0.0';
		public function __construct() {
			add_action( 'cmb2_render_fontawesome_icon', array( $this, 'render' ), 10, 5 );
			add_action( 'cmb2_sanitize_fontawesome_icon', array( $this, 'sanitize' ), 10, 2 );
		}
		public function render( $field, $escaped_value, $object_id, $object_type, $field_type ) {
			$this->setup_admin_scripts();
	    echo $field_type->input( array( 'type' => 'text', 'class' => 'fontawesome-icon-select regular-text' ) );
		}
		public function sanitize( $sanitized_val, $val ) {
		    if ( ! empty( $val ) ) {
		      return  sanitize_html_class( $val );
		    }
		    return $sanitized_val;
		}
		protected function setup_admin_scripts() {
			$dir = trailingslashit( dirname( __FILE__ ) );
			if ( 'WIN' === strtoupper( substr( PHP_OS, 0, 3 ) ) ) {
				// Windows
				$content_dir = str_replace( '/', DIRECTORY_SEPARATOR, WP_CONTENT_DIR );
				$content_url = str_replace( $content_dir, WP_CONTENT_URL, $dir );
				$url = str_replace( DIRECTORY_SEPARATOR, '/', $content_url );
			} else {
				$url = str_replace(
					array( WP_CONTENT_DIR, WP_PLUGIN_DIR ),
					array( WP_CONTENT_URL, WP_PLUGIN_URL ),
					$dir
				);
			}
			$url = set_url_scheme( $url );
			$requirements = array(
				'jquery',
			);
			wp_enqueue_script( 'cmb2-fontawesome-picker', $url . 'assets/js/fontawesome-iconpicker.min.js', array('jquery'), self::VERSION, true );
			wp_enqueue_script( 'cmb2-fontawesome-picker-init', $url . 'assets/js/fontawesome-picker-init.js', array('cmb2-fontawesome-picker'), self::VERSION, true );
			wp_enqueue_style( 'cmb2-fontawesome-css', $url . 'assets/css/font-awesome.min.css', array(), self::VERSION );
			wp_enqueue_style( 'cmb2-fontawesome-picker', $url . 'assets/css/fontawesome-iconpicker.min.css', array('cmb2-fontawesome-css'), self::VERSION );
		}
	}
	new KS_FontAwesome_IconPicker();

remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'pre_link_description', 'wp_filter_kses' );
remove_filter( 'pre_link_notes', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );