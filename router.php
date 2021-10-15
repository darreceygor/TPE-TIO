<?php
require_once('./content/content.php');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        renderTable();
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}
