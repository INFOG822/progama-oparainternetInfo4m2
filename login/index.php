<?php
require_once __DIR__ . '/controllers/tarefacontrollers.php';

if (!isset($_SESSION)) {
    session_start();
}

$controller = new tarefacontrollers();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'logar':
        $controller->logar();
        break;

    case 'painel':
        $controller->painel();
        break;

    default:
        $controller->index();
        break;
}