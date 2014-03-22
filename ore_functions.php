<?php
// Remove classes from menu generator except current items and parents
// From http://wordpress.stackexchange.com/questions/30417/removing-all-classes-from-nav-menu-except-current-menu-item-and-current-menu-par
// Put this in functions.php: add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);

function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        create_function( '$class', 
                 'return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) );' )
        );
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
    );
}

?>