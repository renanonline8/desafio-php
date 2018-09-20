<?php

/* vendas-listar.twig */
class __TwigTemplate_80a7140ae833ed9adfb862377edb5e86c7ec054f911e94afed87af5f937e3b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "vendas-listar.twig", 1);
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
        echo "Desafio PHP - Listar Vendas";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Lista de Vendas</h2>
<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("vendas-formescolhacliente"), "html", null, true);
        echo "\">Cadastrar Venda</a>
<ul class=\"list-group\">
    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["vendas"]) ? $context["vendas"] : null)) > 0)) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendas"]) ? $context["vendas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["venda"]) {
                // line 11
                echo "            <li class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["venda"], "idvenda", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venda'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        <li class=\"list-group-item\">Não existem vendas cadastradas...</li>
    ";
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "vendas-listar.twig";
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

{% block title %}Desafio PHP - Listar Vendas{% endblock title %}

{% block content %}
<h2>Lista de Vendas</h2>
<a class=\"btn btn-primary\" href=\"{{ path_for('vendas-formescolhacliente') }}\">Cadastrar Venda</a>
<ul class=\"list-group\">
    {% if vendas|length > 0 %}
        {% for venda in vendas %}
            <li class=\"list-group-item\">{{ venda.idvenda }}</li>
        {% endfor %}
    {% else %}
        <li class=\"list-group-item\">Não existem vendas cadastradas...</li>
    {% endif %}
</ul>
{% endblock content %}", "vendas-listar.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\vendas-listar.twig");
    }
}
