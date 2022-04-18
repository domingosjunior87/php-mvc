<?php

namespace Alura\Cursos\Controller;

abstract class ControllerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados)
    {
        extract($dados);

        ob_start();
        require __DIR__ . '/../../view/' . $caminhoTemplate;
        return ob_get_clean();
    }
}