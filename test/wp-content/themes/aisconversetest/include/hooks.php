<?php
add_filter('nav_menu_link_attributes','change_top_menu_class_a',20,4);
function change_top_menu_class_a($atts, $item, $args, $depth){
    if($args->theme_location != 'top' || $depth > 0) return $atts;

    if( array_search( 'current_page_item', $item->classes ) ) {
        $atts['class'] = 'active';
    }
    if( $item->title == 'Contact' ) {
        $atts['class'] = 'contact_btn';
    }

    return $atts;
}