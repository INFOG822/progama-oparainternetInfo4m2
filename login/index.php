<?php
session_start();

$controller = $_GET['controller'] ?? 'usuario';
$action     = $_GET['action'] ?? 'index';

if ($controller == 'usuario') {

    require_once 'app/controllers/UsuarioController.php';
    $ctrl = new UsuarioController();

    if ($action == 'login') {
        $ctrl->login();
    } elseif ($action == 'painel') {
        $ctrl->painel();
    } elseif ($action == 'logout') {
        $ctrl->logout();
    } else {
        $ctrl->index();
    }

} elseif ($controller == 'tarefa') {

    require_once 'protect.php';
    require_once 'app/controllers/TarefaController.php';
    $ctrl = new TarefaController();

    if ($action == 'criar') {
        $ctrl->criar();
    } elseif ($action == 'editar') {
        $ctrl->editar();
    } elseif ($action == 'atualizar') {
        $ctrl->atualizar();
    } elseif ($action == 'excluir') {
        $ctrl->excluir();
    } else {
        $ctrl->index();
    }
}
