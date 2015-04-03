<?php

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

function get_breadcrumbs() {
	echo '<section class="container">';
    echo '<ul id="breadcrumb">';
	echo '<li><a href="'.esc_url( home_url( '/' ) ).'"><i class="fa fa-home"></i></a></li>';
			$array = array_reverse(get_post_ancestors( $post ));
			foreach($array as $aPost){
				echo '<li><a href="'.get_permalink($aPost).'">'.get_the_title( $aPost).'</a></li>';
		    }
    echo '</ul>';
    echo '</section>';
}


?>