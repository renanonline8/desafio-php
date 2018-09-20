<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Others\ModelResult;
use App\Model\Cliente;
use App\Model\Categoria;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'index.twig');
})->setName('home');

$app->get('/clientes', function (Request $request, Response $response, array $args) {
    $clientes = Cliente::all();
    $modelResult = new ModelResult($clientes);
    /*$listaClientes = [];
    foreach ($clientes as $key => $value) {
        array_push($listaClientes, $value->to_array());
    }
    $mostra = ['clientes' => $listaClientes];*/
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

$app->get('/produtos/categorias/cadastro', function(Request $request, Response $response, array $args) {

});

$app->post('/produtos/categorias/cadastro/enviar', function(Request $request, Response $response, array $args) {

});
