<?php 

function ser_activate_plugin(){

    if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
        wp_die(__('debes actualizar wordpress para usar este plugin', 'ser_baccu'));
    }

}