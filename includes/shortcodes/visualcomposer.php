<?php 
/**Colegios Carrusel */
function create_vc_ser_section_carrusel_clientes() {
    vc_map([
        "category" => "SER SHORTCODES",
        "name" => "Carrusel colegios",
        "base" => "carrusel-clientes",
        "description" => "Muestrar los post type colegios en un carrusel swipper",
        "show_settings_on_create" => true,
        "icon" => "icon-wpb-slideshow",
        "params" => array(

                        // Campo para el tamaño del texto
                            array(
                                "heading"           => "Cantidad",
                                "type"              => "textfield",
                                "param_name"        => "LIMIT",
                                "description"       => "Numero de colegios a mostrar",
                                "value"             => "12",
                                "admin_label"       => true
                            )

                        )
   ]);    
 }
 add_action( 'vc_before_init', 'create_vc_ser_section_carrusel_clientes' );

 /**Headers personalizados*/

 
function create_vc_ser_section_price_container() {
    vc_map([
        "category" => "SER SHORTCODES",
        "name" => "Ser price container",
        "base" => "ser-price-container",
        "description" => "contenedor",
        "show_settings_on_create" => true,
        "icon" => "icon-wpb-slideshow",
        "params" => array(

                        // Campo para el tamaño del texto
                            array(
                                "heading"           => "Titulo",
                                "type"              => "textfield",
                                "param_name"        => "titulo",
                                "description"       => "Titulo superior",
                                "value"             => 'Tabla de precios',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => "Desactivar animaciones",
                                "type"              => "checkbox",
                                "param_name"        => "animaciones",
                                "description"       => "Selecciona para desactivar las animaciones",
                                "value"             => 'desactivar',
                                "admin_label"       => true
                            ),                            
                            array(
                                "heading"           => 'Descripción top',
                                "type"              => 'textfield',
                                "param_name"        => 'descripcion_top',
                                "description"       => 'escribe un texto para colocarlo al lado del icono superior',
                                "value"             => 'planes accesibles',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => 'descripción debeajo del titulo de la sección',
                                "type"              => 'textarea_html',
                                "param_name"        => 'content',
                                "description"       => 'Selecciona para desactivar las animaciones',
                                "value"             => 'desactivar',
                                "admin_label"       => true
                            )                  

                        )
   ]);    
 }

add_action( 'vc_before_init', 'create_vc_ser_section_price_container' );

/**Items del price container */
function create_vc_ser_section_price_item() {
    vc_map([
        "category" => "SER SHORTCODES",
        "name" => "Ser price item",
        "base" => "ser-price-item",
        "description" => "item para contenedor de precios",
        "show_settings_on_create" => true,
        "icon" => "icon-wpb-slideshow",
        "params" => array(

                        // Campo para el tamaño del texto
                            array(
                                "heading"           => __('Precio mes', 'ser-baccu'),
                                "type"              => 'textfield',
                                "param_name"        => 'month',
                                "description"       => __('Valor en pesos colombianos','ser_baccu'),
                                "value"             => 3000,
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('Precio año', 'ser_baccu'),
                                "type"              => 'textfield',
                                "param_name"        => 'year',
                                "description"       => __('Valor en pesos colombianos', 'ser_baccu'),
                                "value"             => 20000,
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('Caracteristicas del paquete', 'ser-baccu'),
                                "type"              => 'textarea_html',
                                "param_name"        => 'content',
                                "description"       => __('Colocar elementos de lista' , 'ser-baccu'),
                                "value"             => '',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('link den compra', 'ser-baccu'),
                                "type"              => 'vc_link',
                                "param_name"        => 'buy-link',
                                "description"       => __('Colocar elementos de lista'. 'ser-baccu'),
                                "value"             => '',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('Titulo del plan', 'ser-baccu'),
                                "type"              => 'textfield',
                                "param_name"        => 'titulo',
                                "description"       => __('Colocar elementos de lista', 'ser-baccu'),
                                "value"             => '',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('descripcion', 'ser-baccu'),
                                "type"              => 'textfield',
                                "param_name"        => 'descripcion',
                                "description"       => __('Colocar una descripción corta hacia quienes ba destinado el paquete', 'ser-baccu'),
                                "value"             => '',
                                "admin_label"       => true
                            )


                        )
   ]);    
 }

 add_action( 'vc_before_init', 'create_vc_ser_section_price_item' );

 function create_vc_ser_section_price_container_end() {
    vc_map([
        "category" => "SER SHORTCODES",
        "name" => "Ser price container end",
        "base" => "ser-price-container-end",
        "description" => "cierre del contenedor",
        "show_settings_on_create" => true,
        "icon" => "icon-wpb-slideshow",
        "params" => array(

                        // Campo para el tamaño del texto
                            array(
                                "heading"           => "Titular",
                                "type"              => "textfield",
                                "param_name"        => "LIMIT",
                                "description"       => "Encabezado",
                                "value"             => 'Titular',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => "Parrafo",
                                "type"              => "textarea",
                                "param_name"        => "parrafo",
                                "description"       => "Parrafo despues del encabezado",
                                "value"             => 'You can start for free, as long as you fell in love with our App you can
                                decide what plan better suites your needs. By picking any of
                                    the pay plans you\'ll get 30 days free trial.',
                                "admin_label"       => true
                            ),
                            array(
                                "heading"           => __('enlace', 'ser-baccu'),
                                "type"              => "vc_link",
                                "param_name"        => "enlace",
                                "description"       => __('enlace de pagina interna', 'ser'),
                                "value"             => '#!',
                                "admin_label"       => true
                            )

                        )
   ]);    
 }

add_action( 'vc_before_init', 'create_vc_ser_section_price_container_end' );