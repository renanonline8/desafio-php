<?php

/* clientes-cadastro.twig */
class __TwigTemplate_c340e73c9e96148581c2d5b07628f8a3caf743c070f1a6c2062e9246d5924309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "clientes-cadastro.twig", 1);
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
        echo "Desafio PHP - Cadastro de cliente";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Cadastro de cliente</h1>
    <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("clientes-novo"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"nome\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"nome\" name=\"nome\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email:</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"ativo\">Ativo:</label>
            <select class=\"form-control\" id=\"ativo\" name=\"ativo\">
                <option value=\"S\">Sim</option>
                <option value=\"N\">Não</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "clientes-cadastro.twig";
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

{% block title %}Desafio PHP - Cadastro de cliente{% endblock title %}

{% block content %}
    <h1>Cadastro de cliente</h1>
    <form method=\"post\" action=\"{{ path_for('clientes-novo') }}\">
        <div class=\"form-group\">
            <label for=\"nome\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"nome\" name=\"nome\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email:</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"ativo\">Ativo:</label>
            <select class=\"form-control\" id=\"ativo\" name=\"ativo\">
                <option value=\"S\">Sim</option>
                <option value=\"N\">Não</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
    </form>
{% endblock content %}", "clientes-cadastro.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\clientes-cadastro.twig");
    }
}
