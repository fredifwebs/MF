<?php
/* WIDGETS */
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="boxSidebar">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1><div class="contSide">',
    ));
}
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 180, 180 );
register_nav_menu('menu-topo','Menu Topo');

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 140; //Nova quantidade de caracteres do excerpt
}
add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="descPost"', $excerpt);
}
?>