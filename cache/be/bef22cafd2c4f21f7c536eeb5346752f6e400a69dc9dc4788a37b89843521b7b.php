<?php

/* produtos-form-cadastro.twig */
class __TwigTemplate_119ee515e583acd3b61ed01a17b32fc8e5feec8e194743c7cb47b19318b1cf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "produtos-form-cadastro.twig", 1);
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
        echo "Desafio PHP - Cadastro de Produtos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Cadastro de Produtos</h1>
    <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("produtos-cadastrar"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"produto\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"produto\" name=\"produto\">
        </div>
        <div class=\"form-group\">
            <label for=\"preco\">Preço:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"preco\" name=\"preco\">
        </div>
        <div class=\"form-group\">
            <label for=\"id_categoria\">Categoria:</label>
            <select class=\"form-control\" id=\"id_categoria\" name=\"id_categoria\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 20
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "idcategoria", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "categoria", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"saldo\">Saldo:</label>
            <input type=\"number\" class=\"form-control\" id=\"saldo\" name=\"saldo\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "produtos-form-cadastro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  60 => 20,  56 => 19,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Desafio PHP - Cadastro de Produtos{% endblock title %}

{% block content %}
    <h1>Cadastro de Produtos</h1>
    <form method=\"post\" action=\"{{ path_for('produtos-cadastrar') }}\">
        <div class=\"form-group\">
            <label for=\"produto\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"produto\" name=\"produto\">
        </div>
        <div class=\"form-group\">
            <label for=\"preco\">Preço:</label>
            <input type=\"number\" min=\"1\" step=\"any\" class=\"form-control\" id=\"preco\" name=\"preco\">
        </div>
        <div class=\"form-group\">
            <label for=\"id_categoria\">Categoria:</label>
            <select class=\"form-control\" id=\"id_categoria\" name=\"id_categoria\">
                {% for categoria in categorias %}
                    <option value=\"{{ categoria.idcategoria }}\">{{ categoria.categoria }}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"saldo\">Saldo:</label>
            <input type=\"number\" class=\"form-control\" id=\"saldo\" name=\"saldo\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
{% endblock content %}", "produtos-form-cadastro.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\produtos-form-cadastro.twig");
    }
}
