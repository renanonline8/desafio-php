<?php

/* vendas-formcadastro-escolhacliente.twig */
class __TwigTemplate_840959633f933e7eed739b3a221689710316f9a7e8ba660ee591e8e935c60acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "vendas-formcadastro-escolhacliente.twig", 1);
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
        echo "Desafio PHP - Escolher Cliente da venda";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Escolher cliente da venda</h2>
<ul class=\"list-group\">
    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["clientes"]) ? $context["clientes"] : null)) > 0)) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
                // line 10
                echo "            <li class=\"list-group-item\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nome", array()), "html", null, true);
                echo "
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("vendas-escolhacliente", array("id_cliente" => $this->getAttribute($context["cliente"], "idcliente", array()))), "html", null, true);
                echo "\" 
                class=\"btn btn-primary float-right\">
                    Selecionar
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        <li class=\"list-group-item\">Não existem categorias cadastradas...</li>
    ";
        }
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "vendas-formcadastro-escolhacliente.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  71 => 19,  68 => 18,  56 => 12,  52 => 11,  49 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Desafio PHP - Escolher Cliente da venda{% endblock title %}

{% block content %}
<h2>Escolher cliente da venda</h2>
<ul class=\"list-group\">
    {% if clientes|length > 0 %}
        {% for cliente in clientes %}
            <li class=\"list-group-item\">
                {{ cliente.nome }}
                <a href=\"{{ path_for('vendas-escolhacliente', { 'id_cliente' : cliente.idcliente}) }}\" 
                class=\"btn btn-primary float-right\">
                    Selecionar
                </a>
            </li>
        {% endfor %}
    {% else %}
        <li class=\"list-group-item\">Não existem categorias cadastradas...</li>
    {% endif %}
</ul>
{% endblock content %}", "vendas-formcadastro-escolhacliente.twig", "C:\\xampp5_6\\htdocs\\desafio-php\\templates\\vendas-formcadastro-escolhacliente.twig");
    }
}
