<?php

/**Carrusel de colegios */
function ser_section_carrusel_clientes( $atts = '') {
    
    // Genero los valores por defecto de los parámetros
    $params = shortcode_atts( array(
        'LIMIT'        => 12  
    ), $atts );

    global $wpdb;
    
    $consulta   =    'SELECT * FROM  `'.$wpdb->prefix.'posts` WHERE (`post_type` = "colegios" AND `post_status` = "publish") ORDER BY ID DESC LIMIT '.$params['LIMIT'].'';
    $colegios   =   $wpdb->get_results($consulta);
   
    $itemsCarrusel = '';

    foreach ($colegios as $key => $value) {
                
        $urlImg = get_the_post_thumbnail_url( $value->ID);
        $itemsCarrusel .= '<div class="swiper-slide"><img src="'.$urlImg.'" class="img-responsive" alt=""
        style="max-height: 60px"></div>';

    }
    
    return '<!-- Partners Slider -->
            <section class="section">
                <div class="container py-5 border-bottom">
                    <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500"
                        data-sw-loop="true">
                        <div class="swiper-wrapper align-items-center">
                          '.$itemsCarrusel.'  
                        </div>
                    </div>
                </div>
            </section>';

}

/**Seccion de precios */
function ser_section_price_container( $atts = '', $content) {
    
    // Genero los valores por defecto de los parámetros
    $params = shortcode_atts( array(
        'animaciones'       =>  __('activar', 'ser-baccu'),
        'titulo'            =>  __('Titulo Sección', 'ser-baccu'),
        'descripcion_top'   =>  __('planes accesibles', 'ser-baccu')    
    ), $atts );    

    $html = '<section class="section pricing-plans" id="pricing">';
    if($params['animaciones'] == 'activar'){

        $html .='
        
        <div class="shapes-container overflow-clear">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div><i class="icon pe pe-7s-cash pe-3x" data-aos="fade-down"></i> <i
                class="icon fas fa-dollar-sign fa-3x" data-aos="fade-up"></i> <i class="icon pe pe-7s-piggy pe-3x"
                data-aos="fade-up"></i> <i class="icon pe pe-7s-cart pe-3x" data-aos="fade-left"></i> <i
                class="icon far fa-credit-card fa-3x" data-aos="fade-down"></i> <i
                class="icon far fa-money-bill-alt fa-3x" data-aos="fade-up"></i>
        </div>';

    }

    $html .='
        
            <div class="container">
                <div class="section-heading text-center"><span class="rounded-pill shadow-box bold py-2 px-4"><i class="far fa-lightbulb text-primary mr-2"></i> <span class="text-primary">'.$params['descripcion_top'].'</span></span>
                    <h2 class="mt-3 heading-line">'.$params['titulo'].'</h2>
                    <p class="lead text-muted">'.$content.'</p>
                    <div id="pricing-basis-options" class="btn-group btn-group-toggle mt-5" data-toggle="buttons"><label
                            class="btn btn-secondary active"><input type="radio" name="pricing-basis" value="monthly"
                                checked="checked"> Monthly</label> <label class="btn btn-secondary">
                            <input type="radio" name="pricing-basis" value="yearly"> Yearly</label>
                    </div>
                </div>
                <div class="row no-gutters align-items-center pricing-plans-options">';

        return $html;
}

/**cerrar seccion de precios */
function ser_section_price_container_end( $atts = '') {
    
    // Genero los valores por defecto de los parámetros
    $params = shortcode_atts( array(
        'titular'       =>  'Not sure what \'s better for you?',
        'parrafo'       =>  'You can start for free, as long as you fell in love with our App you can
                                decide what plan better suites your needs. By picking any of
                                    the pay plans you\'ll sdfsdfsdfget 30 days free trial.',
        'enlace'        =>  '#!'
    ), $atts );

    if ($params['enlace'] !== '#!'){
        $attrsLink = vc_build_link($params['enlace']);
    }else{
        $attrsLink = [title => 'sin titulo', url => '#!', rel => 'nofollow', target => ''];
    }
    
    
    $html ='
        
                </div>
            </div>
            <div class="container pt-0 border-bottom">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="text-center text-md-left">
                            <h4 class="bold accent">'.$params['titular'].'</h4>
                            <p class="mt-0">'.$params['parrafo'].'</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-right"><a href="'.$attrsLink['url'].'" rel="'.$attrsLink['rel'].'" target="'.$attrsLink['target'].'" title="'.$attrsLink['title'].'"
                            class="btn btn-alternate btn-lg text-contrast p-4 more-link ml-md-auto">'.$attrsLink['title'].'</a></div>
                </div>
            </div>
        </section>';

        return $html;
}

function ser_section_price_item( $atts = '', $content = '') {
    
    // Genero los valores por defecto de los parámetros
    $params = shortcode_atts( array(
        'year'          =>  20000,
        'month'         =>  3000,
        'li'            =>  'Contenido del plan',
        'titulo'        =>  'Titulo del plan',
        'descripcion'   =>  'Descripción del plan',
        'buy-link'      =>  '#!' 
    ), $atts );

    if ($params['buy-link'] !== '#!'){
        $attrsLink = vc_build_link($params['buy-link']);
    }else{
        $attrsLink = [title => 'sin titulo', url => '#!', rel => 'nofollow', target => ''];
    }
    
    $html ='
            <div class="col-lg-4 pricing-plan">'.$link.'
            <div class="p-5 ">
                <div class="text-center">
                    <h4 class="text-alternate bold text-capitalize">'.$params['titulo'].'</h4>
                    <p>'.$params['descripción'].'</p>
                    <div class="pricing-details"><span class="pricing-value"><span class="odometer price"
                                data-monthly="'.$params['month'].'" data-yearly="'.$params['year'].'">'.$params['month'].'</span></span></div><a
                        href="'.$attrsLink['url'].'" rel="'.$attrsLink['rel'].'" target="'.$attrsLink['target'].'" title="'.$attrsLink['title'].'" class="more-link btn btn-alternate mb-3">'.$attrsLink['title'].'</a>
                </div>
                <hr>
                <div class="d-none d-md-flex ser-list-group">
                    '.$content.'
                </div>
                <div class=""><button type="button"
                        class="more-link btn btn-alternate d-flex align-items-center mx-auto" data-toggle="modal"
                        data-target="#basic-plan-modal-business">'.__('Ver detalles', 'ser').'</button>
                    <div class="modal" id="basic-plan-modal-business">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title bold text-capitalize">'.$params['titulo'].'</h5><button
                                        type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body plan-features">
                                   '.$content.'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

    return $html;
}