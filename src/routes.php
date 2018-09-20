<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Others\ModelResult;
use App\Model\Cliente;
use App\Model\Categoria;
use App\Model\Produto;
use App\Model\Venda;
use App\Model\VendaItem;

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
    $allCategoria = Categoria::all();
    $resultCategoria = new ModelResult($allCategoria);
    $twigVar = ['categorias' => $resultCategoria->toArray()];
    return $this->view->render($response, 'produtos-form-cadastro.twig', $twigVar);
})->setName('produtos-formcadastro');

$app->post('/produtos/cadastrar', function(Request $request, Response $response, array $args) {
    $v = $request->getParams();
    
    $produto = new Produto();
    $produto->produto = $v['produto'];
    $produto->preco = $v['preco'];
    $produto->idcategoria = $v['id_categoria'];
    $produto->saldo = $v['saldo'];
    $produto->save();

    return $this->response->withRedirect($this->router->pathFor('produtos-listar'));
})->setName('produtos-cadastrar');

$app->get('/vendas/listar', function(Request $request, Response $response, array $args) {
    $allVendas = Venda::all();
    $resultVenda = new ModelResult($allVendas);
    $twigVar = ['vendas' => $resultVenda->toArray()];
    return $this->view->render($response, 'vendas-listar.twig', $twigVar);
})->setName('vendas-listar');

$app->get('/vendas/formescolhacliente', function(Request $request, Response $response, array $args) {
    $clientes = Cliente::all();
    $modelResult = new ModelResult($clientes);
    $twigVar = ['clientes' => $modelResult->toArray()];
    return $this->view->render($response, 'vendas-formcadastro-escolhacliente.twig', $twigVar);
})->setName('vendas-formescolhacliente');

$app->get('/vendas/escolhacliente/{id_cliente}', function(Request $request, Response $response, array $args) {
    $venda = new Venda();
    $venda->data = new \DateTime('now');
    $venda->idcliente = $args['id_cliente'];
    $venda->status = 'A';
    $venda->idusuario = 1;
    $venda->save();
    return $this->response->withRedirect($this->router->pathFor(
        'vendas-formescolhaprodutos', ['id_pedido' => $venda->idvenda ]
    ));
})->setName('vendas-escolhacliente');

$app->get('/vendas/formescolhaproduto/{id_pedido}', function(Request $request, Response $response, array $args) {
    $allProdutos = Produto::all();
    $resultProdutos = new ModelResult($allProdutos);
    $twigVar['produtos'] = $resultProdutos->toArray();

    $produtosIncluidos = VendaItem::all(
        array('conditions' => array('idvenda = ?',$args['id_pedido']))
    );
    $resultProdutosIncluidos = new ModelResult($produtosIncluidos);
    $twigVar['produtos_incluidos'] = $resultProdutosIncluidos->toArray();
    
    $twigVar['pedido']['idvenda'] = $args['id_pedido'];

    return $this->view->render($response, 'vendas-formcadastro-escolhaprodutos.twig', $twigVar);
})->setName('vendas-formescolhaprodutos');

$app->post('/vendas/escolhaproduto', function(Request $request, Response $response, array $args) {
    $postData = $request->getParams();
    
    $itemVenda = new VendaItem();
    $itemVenda->idproduto = $postData['idproduto'];
    $itemVenda->qtd = $postData['qtd'];
    $itemVenda->preco = $postData['preco'];
    $itemVenda->precopago = $postData['precopago'];
    $itemVenda->idvenda = $postData['idvenda'];

    $itemVenda->save();

    return $this->response->withredirect(
        $this->router->pathFor('vendas-formescolhaprodutos', ['id_pedido' => $postData['idvenda']])
    );
})->setName('vendas-escolhaprodutos');