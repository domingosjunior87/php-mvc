<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

require_once '../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit;
}

/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $rotas[$caminho];
$controlador->processaRequisicao();
