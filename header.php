<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div class="off-canvas-wrapper">
	<div class="off-canvas position-left" id="broodyMenu" data-off-canvas>
		<ul id="homeMenu" class="vertical menu drilldown" data-drilldown="">
			<li><a href="/">Home</a></li>
		</ul>
		<?php
			wp_nav_menu(array(
	            'container' => false,
	            'menu' => __( 'Top Bar Menu', 'textdomain' ),
	            'menu_class' => 'vertical menu',
	            'theme_location' => 'header',
	            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s<li class="my-static-link"><a data-open="searchForm"><i class="fa fa-search"></i></a></li></ul>',
	            'fallback_cb' => 'f6_drill_menu_fallback',
	            'walker' => new F6_DRILL_MENU_WALKER(),
	        ));
		?>
	</div>
	<div class="off-canvas-content" data-off-canvas-content>
		<div class="container">
			<div class="title-bar" data-responsive-toggle="broodyMenu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle="broodyMenu">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						echo '<img src="' . $image[0] . '">';
					?>
				</button>
			</div>
			<div class="row expanded align-middle" id="topBar">
				<div class="small-2 columns logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="small-10 columns">
					<div class="top-bar" id="responsive-menu">
						<div class="top-bar-right">
							<?php
								wp_nav_menu(array(
						            'container' => false,
						            'menu' => __( 'Top Bar Menu', 'textdomain' ),
						            'menu_class' => 'dropdown menu',
						            'theme_location' => 'header',
						            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu data-menu-underline-from-center>%3$s<li class="my-static-link"><a data-open="searchForm"><i class="fa fa-search"></i></a></li></ul>',
						            'fallback_cb' => 'f6_topbar_menu_fallback',
						            'walker' => new F6_TOPBAR_MENU_WALKER(),
						        ));
							?>
						</div>
					</div>
				</div>
			</div>