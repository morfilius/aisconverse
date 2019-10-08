<?
add_shortcode( 'hello', 'other_property' );
function other_property( $atts ){
   return '<div class="test-shortcode">Hello World!</div>';
};
