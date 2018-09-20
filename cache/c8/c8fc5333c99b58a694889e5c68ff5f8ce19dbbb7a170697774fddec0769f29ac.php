<?php

/* vendas-formcadastro-escolhaprodutos.twig */
class __TwigTemplate_05f13a9f882fac4a91c115feb0122705fb97d40a2dff0b740bba6fc2022b5f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "vendas-formcadastro-escolhaprodutos.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Desafio PHP - Escolha Produtos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Escolha de produtos</h1>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("vendas-listar"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Finalizar Venda</a>
    <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("vendas-escolhaprodutos"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"idproduto\">Produto:</label>
            <select class=\"form-control\" id=\"idproduto\" name=\"idproduto\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) ? $context["produtos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 13
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produto"], "idproduto", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produto"], "produto", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"qtd\">Qtd:</label>
            <input type=\"number\" class=\"form-control\" id=\"qtd\" name=\"qtd\">
        </div>
        <div class=\"form-group\">
            <label for=\"preco\">Preço:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"preco\" name=\"preco\">
        </div>
        <div class=\"form-group\">
            <label for=\"precopago\">Preço Pago:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"precopago\" name=\"precopago\">
        </div>
        <input type=\"hidden\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : null), "idvenda", array()), "html", null, true);
        echo "\" id=\"idvenda\" name=\"idvenda\">
        <button type=\"submit\" class=\"btn btn-primary\">Adicionar Produto</button>
        <h2>Produtos Inclusos</h2>
        <ul class=\"list-group\">
            ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["produtos_incluidos"]) ? $context["produtos_incluidos"] : null)) > 0)) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produtos_incluidos"]) ? $context["produtos_incluidos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["incluido"]) {
                // line 35
                echo "                    <li class=\"list-group-item\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["incluido"], "idproduto", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["incluido"], "qtd", array()), "html", null, true);
                echo "x R\$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["incluido"], "preco", array()), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incluido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        } else {
            // line 40
            echo "                <li class=\"list-group-item\">Não existem produtos inclusos...</li>
            ";
        }
        // line 42
        echo "        </ul>
    </form>
";
    }

    public function getTemplateName()
    {
        return "vendas-formcadastro-escolhaprodutos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  116 => 40,  113 => 39,  100 => 36,  97 => 35,  92 => 34,  90 => 33,  83 => 29,  67 => 15,  56 => 13,  52 => 12,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block title %}Desafio PHP - Escolha Produtos{% endblock title %}

{% block content %}
    <h1>Escolha de produtos</h1>
    <a href=\"{{ path_for('vendas-listar')}}\" class=\"btn btn-primary\">Finalizar Venda</a>
    <form method=\"post\" action=\"{{ path_for('vendas-escolhaprodutos') }}\">
        <div class=\"form-group\">
            <label for=\"idproduto\">Produto:</label>
            <select class=\"form-control\" id=\"idproduto\" name=\"idproduto\">
                {% for produto in produtos %}
                    <option value=\"{{ produto.idproduto }}\">{{ produto.produto }}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"qtd\">Qtd:</label>
            <input type=\"number\" class=\"form-control\" id=\"qtd\" name=\"qtd\">
        </div>
        <div class=\"form-group\">
            <label for=\"preco\">Preço:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"preco\" name=\"preco\">
        </div>
        <div class=\"form-group\">
            <label for=\"precopago\">Preço Pago:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"precopago\" name=\"precopago\">
        </div>
        <input type=\"hidden\" value=\"{{ pedido.idvenda }}\" id=\"idvenda\" name=\"idvenda\">
        <button type=\"submit\" class=\"btn btn-primary\">Adicionar Produto</button>
        <h2>Produtos Inclusos</h2>
        <ul class=\"list-group\">
            {% if produtos_incluidos|length > 0 %}
                {% for incluido in produtos_incluidos %}
                    <li class=\"list-group-item\">
                        {{ incluido.idproduto }} - {{ incluido.qtd }}x R\$ {{ incluido.preco }}
                    </li>
                {% endfor %}
            {% else %}
                <li class=\"list-group-item\">Não existem produtos inclusos...</li>
            {% endif %}
        </ul>
    </form>
{% endblock content %}", "vendas-formcadastro-escolhaprodutos.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\vendas-formcadastro-escolhaprodutos.twig");
    }
}
