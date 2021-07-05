<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/g20_conexion_p':
        require 'g20_conexion_p.php';
        break;
    case '/g20_conexion_p.php':
        require 'g20_conexion_p.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
?>
