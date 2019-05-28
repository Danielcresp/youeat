<?php
//pode integra mis propias Tablas  Personalizadas
function lapizzeria_database(){ 
    //WPDB metodos para agregar en las tablas
    global $wpdb;
    //agregar version
    global $lapizzeria_dbversion;
    $lapizzeria_dbversion = '1.0';
    //obtener Predix
    $tabla = $wpdb->prefix.'reservaciones';
    //obtener  el collation de la instalacion
    $charset_collate = $wpdb->get_charset_collate();
    //agregar la estructura a la DB
    $sql = "CREATE TABLE $tabla (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nombre varchar(50) NOT NULL,
        fecha datetime NOT NULL,
        correo varchar(50) DEFAULT '' NOT NULL,
        telefono varchar(10) NOT NULL,
        mensaje longtext NOT NULL,
        PRIMARY KEY(id)
    )$charset_collate; ";
    // achivo que incluye dbDelta para ejecutar el SQL 
    //dbDelta: funcion que examina la tabla y su registro
    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    //Agregar la version de la DB para comparar con futuras actualizaciones
    add_option('lapizzeria_dbversion',$lapizzeria_dbversion);

   // ACTUALIZAR DE SER NECESARIO version 0.2
   $version_actual = get_option('lapizzeria_dbversion');

   // guarda si no es la primera version  COMPARA VESIONES
   if($lapizzeria_dbversion != $version_actual){
       
        $charset_collate = $wpdb->get_charset_collate();
        //realizar actualizacion
        $sql = "CREATE TABLE $tabla (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            nombre varchar(50) NOT NULL,
            fecha datetime NOT NULL,
            correo varchar(50) DEFAULT '' NOT NULL,
            telefono varchar(10) NOT NULL,
            telefono2 varchar(10) NOT NULL,
            mensaje longtext NOT NULL,
            PRIMARY KEY(id)
        )$charset_collate; ";
        
        // achivo que incluye dbDelta
        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        //dbDelta: funcion que examina la tabla y su registro
        dbDelta($sql);
        update_option('lapizzeria_dbversion',$lapizzeria_dbversion);
   }
}

add_action('after_setup_theme','lapizzeria_database');
//Funcion pra comprovar que la version instalada es igual a la DB new
function lapizeria_dbrevisar(){
    global $lapizzeria_dbversion;
    if(get_site_option('lapizzeria_dbversion') != $lapizzeria_dbversion){
        lapizzeria_database();
    }

}
add_action('plugins_loaded','lapizzeriadb_revisar');

