<?php

/* clientes-listar.twig */
class __TwigTemplate_ab575dad7c6c6b66bb179c5cafac6a570b6e3aa9bd100b8d2c76fe63e7cd0d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "clientes-listar.twig", 1);
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
        echo "<h2>Lista de clientes</h2>
<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("clientes-cadastro"), "html", null, true);
        echo "\">Cadastrar Cliente</a>
<ul class=\"list-group\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 10
            echo "        <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nome", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "clientes-listar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  50 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
<h2>Lista de clientes</h2>
<a class=\"btn btn-primary\" href=\"{{ path_for('clientes-cadastro') }}\">Cadastrar Cliente</a>
<ul class=\"list-group\">
    {% for cliente in clientes %}
        <li class=\"list-group-item\">{{ cliente.nome }}</li>
    {% endfor %}
</ul>
{% endblock content %}", "clientes-listar.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\clientes-listar.twig");
    }
}
