<?php

/* produtos-categorias-form-cadastro.twig */
class __TwigTemplate_e2cb055aeb70a22bd8aef1bc9731bfd103a98815b70772229d8aef8b11269a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "produtos-categorias-form-cadastro.twig", 1);
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
        echo "Desafio PHP - Cadastro de Categoria de Produtos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Cadastro de Categoria de Produtos</h1>
    <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("produtos-categorias-cadastrar"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"categoria\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"categoria\" name=\"categoria\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "produtos-categorias-form-cadastro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Desafio PHP - Cadastro de Categoria de Produtos{% endblock title %}

{% block content %}
    <h1>Cadastro de Categoria de Produtos</h1>
    <form method=\"post\" action=\"{{ path_for('produtos-categorias-cadastrar') }}\">
        <div class=\"form-group\">
            <label for=\"categoria\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"categoria\" name=\"categoria\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
{% endblock content %}", "produtos-categorias-form-cadastro.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\produtos-categorias-form-cadastro.twig");
    }
}
