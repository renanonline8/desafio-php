<?php

/* produtos-categorias-listar.twig */
class __TwigTemplate_19060b1ab698f56c4baa062436d4c141440e71758cee0cd98b87547a82c70342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "produtos-categorias-listar.twig", 1);
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
        echo "Desafio PHP - Listar Clientes";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Lista de categorias de produtos</h2>
<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("clientes-cadastro"), "html", null, true);
        echo "\">Cadastrar</a>
<ul class=\"list-group\">
    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["categorias"]) ? $context["categorias"] : null)) > 0)) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 11
                echo "            <li class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nome", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        <li class=\"list-group-item\">Não existem categorias cadastradas...</li>
    ";
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "produtos-categorias-listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 14,  62 => 13,  53 => 11,  48 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig\" %}

{% block title %}Desafio PHP - Listar Clientes{% endblock title %}

{% block content %}
<h2>Lista de categorias de produtos</h2>
<a class=\"btn btn-primary\" href=\"{{ path_for('clientes-cadastro') }}\">Cadastrar</a>
<ul class=\"list-group\">
    {% if categorias|length > 0 %}
        {% for categoria in categorias %}
            <li class=\"list-group-item\">{{ categoria.nome }}</li>
        {% endfor %}
    {% else %}
        <li class=\"list-group-item\">Não existem categorias cadastradas...</li>
    {% endif %}
</ul>
{% endblock content %}", "produtos-categorias-listar.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\produtos-categorias-listar.twig");
    }
}
