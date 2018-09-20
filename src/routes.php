<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Others\ModelResult;
use App\Model\Cliente;
use App\Model\Categoria;
use App\Model\Produto;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'index.twig');
})->setName('home');

$app->get('/clientes', function (Request $request, Response $response, array $args) {
    $clientes = Cliente::all();
    $modelResult = new ModelResult($clientes);
    $mostra = ['clientes' => $modelResult->toArray()];
    return $this->view->render($response, 'clientes-listar.twig', $mostra);
})->setName('clientes-listar');

$app->get('/clientes/cadastro', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'clientes-cadastro.twig');
})->setName('clientes-cadastro');

$app->post('/clientes/novo', function (Request $request, Response $response, array $args) {
    $cliente = new Cliente();
    $cliente->nome = $request->getParam('nome');
    $cliente->email = $request->getParam('email');
    $cliente->ativo = $request->getParam('ativo');
    $cliente->save();

    return $this->response->withRedirect($this->router->pathFor('clientes-listar'));
})->setName('clientes-novo');

$app->get('/produtos/categorias/listar', function(Request $request, Response $response, array $args) {
    $categorias = Categoria::all();
    $modelResult = new ModelResult($categorias);
    $array = ['categorias' => $modelResult->toArray()];
    return $this->view->render($response, 'produtos-categorias-listar.twig', $array);
})->setName('produtos-categorias-listar');

$app->get('/produtos/categorias/formcadastro', function(Request $request, Response $response, array $args) {
    return $this->view->render($response, 'produtos-categorias-form-cadastro.twig');
})->setName('produtos-categorias-form-cadastro');

$app->post('/produtos/categorias/cadastrar', function(Request $request, Response $response, array $args) {
    $categoriasProdutos = new Categoria();
    $categoriasProdutos->categoria = $request->getParam('categoria');
    $categoriasProdutos->status = 'S';
    $categoriasProdutos->save();

    return $this->response->withRedirect($this->router->pathFor('produtos-categorias-listar'));
})->setName('produtos-categorias-cadastrar');

$app->get('/produtos/listar', function(Request $request, Response $response, array $args) {
    $produtos = Produto::all();
    $modelResult = new ModelResult($produtos);
    $array = ['produtos' => $modelResult->toArray()];
    return $this->view->render($response, 'produtos-listar.twig', $array);
})->setName('produtos-listar');

$app->get('/produtos/formcadastro', function(Request $request, Response $response, array $args) {
    return $this->view->render($response, 'produtos-form-cadastro.twig');
})->setName('produtos-formcadastro');

$app->post('/produtos/cadastrar', function(Request $request, Response $response, array $args) {
    return $this->response->withJson($request->getParams());
})->setName('produtos-cadastrar');