<?php

/* produtos-listar.twig */
class __TwigTemplate_acc7b6a7905227f10d4202a2f29470177821c2230232e611f7664a5776bc68cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "produtos-listar.twig", 1);
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
        echo "Desafio PHP - Lista de Produtos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Lista de Produtos</h2>
<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("produtos-formcadastro"), "html", null, true);
        echo "\">Cadastrar</a>
<ul class=\"list-group\">
    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["produtos"]) ? $context["produtos"] : null)) > 0)) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) ? $context["produtos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
                // line 11
                echo "            <li class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produto"], "produto", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        <li class=\"list-group-item\">Não existem produtos cadastrados...</li>
    ";
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "produtos-listar.twig";
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

{% block title %}Desafio PHP - Lista de Produtos{% endblock title %}

{% block content %}
<h2>Lista de Produtos</h2>
<a class=\"btn btn-primary\" href=\"{{ path_for('produtos-formcadastro') }}\">Cadastrar</a>
<ul class=\"list-group\">
    {% if produtos|length > 0 %}
        {% for produto in produtos %}
            <li class=\"list-group-item\">{{ produto.produto }}</li>
        {% endfor %}
    {% else %}
        <li class=\"list-group-item\">Não existem produtos cadastrados...</li>
    {% endif %}
</ul>
{% endblock content %}", "produtos-listar.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\produtos-listar.twig");
    }
}
