<?php

use Alura\Cursos\Controller\{Exclusao, FormularioEdicao, FormularioInsercao, ListarCursos, Persistencia};

return [
  '' => ListarCursos::class,
  '/' => ListarCursos::class,
  '/listar-cursos' => ListarCursos::class,
  '/novo-curso' => FormularioInsercao::class,
  '/salvar-curso' => Persistencia::class,
  '/excluir-curso' => Exclusao::class,
  '/alterar-curso' => FormularioEdicao::class,
];