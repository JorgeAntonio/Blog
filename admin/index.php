<?php

session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

//COMPROBAR SESION
comprobarSesion();

if (!$conexion){
    header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

if (!$posts){
    echo 'Todavía no hay artículos publicados';
}

require '../views/admin_index.view.php';