<?php

function ser_baccu_init(){
    $labels = array(
		'name'                  =>    _x( 'Colegios', 'post type general name', 'ser_baccu' ),
		'singular_name'         =>    _x( 'Colegio', 'post type singular name', 'ser_baccu' ),
		'menu_name'             =>    _x( 'Colegios', 'admin menu', 'ser_baccu' ),
		'name_admin_bar'        =>    _x( 'Colegio', 'Agregar nuevo en la admin bar', 'ser_baccu' ),
		'add_new'               =>    _x( 'Agregar Nuevo', 'colegio', 'ser_baccu' ),
		'add_new_item'          =>    __( 'Agregar nuevo colegio', 'ser_baccu' ),
		'new_item'              =>    __( 'Nuevo Colegio', 'ser_baccu' ),
		'edit_item'             =>    __( 'Editar Colegio', 'ser_baccu' ),
		'view_item'             =>    __( 'Ver Colegio', 'ser_baccu' ),
		'all_items'             =>    __( 'Todos los colegios', 'ser_baccu' ),
		'search_items'          =>    __( 'Buscar Colegios', 'ser_baccu' ),
		'parent_item_colon'     =>    __( 'Colegios Principal:', 'ser_baccu' ),
		'not_found'             =>    __( 'Colegio no encontrado.', 'ser_baccu' ),
		'not_found_in_trash'    =>    __( 'No hay colegios en la papelera.', 'ser_baccu' )
	);

	$args = array(
		'labels'                =>  $labels,
		'description'           =>  __( 'Post type para colegios.', 'ser_baccu' ),
		'public'                =>  true,
		'publicly_queryable'    =>  true,
		'show_ui'               =>  true,
		'show_in_menu'          =>  true,
		'query_var'             =>  true,
		'rewrite'               =>  array( 'slug' => 'colegio' ),
		'capability_type'       =>  'post',
		'has_archive'           =>  true,
		'hierarchical'          =>  false,
		'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag'],
        'show_in_rest'          =>  true
	);

	register_post_type( 'Colegios', $args );
}