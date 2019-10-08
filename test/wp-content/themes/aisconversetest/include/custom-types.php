<?php
if ( ! function_exists( 'news' ) ) {
	function news() {
		$labels = array(
			'name'               => 'Новости',
			'singular_name'      => 'Новости',
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавить новость',
			'edit_item'          => 'Редактирование новости',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Просмотреть новость',
			'search_items'       => 'Найти нововсть',
			'attributes'         => 'Атрибуты',
			'not_found'          => 'Ничего не найдено',
		);
		$args = array(
			'labels'              => $labels,
			'supports'            => array( 'title','editor','thumbnail'),
			'taxonomies'          => array(''),
			'public'              => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-format-aside',
			'show_in_rest'        => true,
		);
		register_post_type( 'news', $args );
	}
	add_action( 'init', 'news', 0 );
}



