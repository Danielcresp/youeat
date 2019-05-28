<?php
function lapizzeria_guardada(){
    //WPDB metodos para agregar en las tablas
    global $wpdb;
    //Obtener los datos y capturar los datos del formulario
    if(isset($_POST['Enviar']) && $_POST['oculto'] == "1"):

        //Sanitizanda en caso de que se inyecte SQL Proteccion de Hacking
        $nombre = sanitize_text_field($_POST['nombre']);
        $fecha = sanitize_text_field($_POST['fecha']);
        $correo = sanitize_text_field($_POST['correo']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $mensaje = sanitize_text_field($_POST['mensaje']);
        $tabla = $wpdb->prefix . "reservaciones";   
        $datos = array(
            'nombre' => $nombre,
            'fecha' => $fecha,
            'correo' => $correo,
            'telefono' => $telefono,
            'mensaje' => $mensaje
        );
        $formato = array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
        );
        $wpdb->insert($tabla,$datos,$formato); //registrar los datos en la tabla

        //redirigir despues de hacer la reserva
        $url = get_page_by_title("Gracias por su reserva");
        wp_redirect(get_permalink($url->ID));
        exit();
    endif;

}

add_action('init','lapizzeria_guardada');
?>