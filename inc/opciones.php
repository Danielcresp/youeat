<?php

function lapizzeria_ajustes(){
  add_menu_page('La Pizzeria','La Pizzeria Ajustes','administrator','lapizzeria_ajustes','lapizzeria_opciones','',20);
  add_submenu_page('lapizzeria_ajustes','Reservaciones','Reservaciones','administrator','lapizzeria_reservaciones','lapizzeria_reservaciones');
}

add_action('admin_menu','lapizzeria_ajustes');

function lapizzeria_opciones(){

}
function lapizzeria_reservaciones(){

}