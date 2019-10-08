<?php
function get_news( $number = 2 ) {
    return get_posts( array(
        'numberposts' => $number,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'news',
    ) );
}