<?php

/* SyliusUiBundle:Grid:_history.html.twig */
class __TwigTemplate_b8906c813a6d20d7f65f8fd4bd4d049b6b82f4af1b9f4b1f0337ed266079406c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_458e4d1399a0c343c1bd4d03f9aa4f97abcfbd6abe713db666abc6b1831388db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458e4d1399a0c343c1bd4d03f9aa4f97abcfbd6abe713db666abc6b1831388db->enter($__internal_458e4d1399a0c343c1bd4d03f9aa4f97abcfbd6abe713db666abc6b1831388db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_history.html.twig"));

        $__internal_20fddf49966c78d12f65ceb1e4e74cedb19a721c842ca985692194656348f928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fddf49966c78d12f65ceb1e4e74cedb19a721c842ca985692194656348f928->enter($__internal_20fddf49966c78d12f65ceb1e4e74cedb19a721c842ca985692194656348f928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_history.html.twig"));

        // line 1
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 1);
        // line 2
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
        // line 5
        $context["data"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array());
        // line 6
        echo "
";
        // line 7
        if ((twig_length_filter($this->env, ($context["data"] ?? $this->getContext($context, "data"))) > 0)) {
            // line 8
            echo "    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                ";
            // line 11
            echo $context["table"]->getheaders(($context["resources"] ?? $this->getContext($context, "resources")), ($context["definition"] ?? $this->getContext($context, "definition")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()));
            echo "
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                ";
                echo $context["table"]->getrow(($context["resources"] ?? $this->getContext($context, "resources")), ($context["definition"] ?? $this->getContext($context, "definition")), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </tbody>
    </table>
";
        } else {
            // line 21
            echo "    ";
            echo $context["messages"]->getinfo("sylius.ui.no_results_to_display");
            echo "
";
        }
        // line 23
        echo "
";
        
        $__internal_458e4d1399a0c343c1bd4d03f9aa4f97abcfbd6abe713db666abc6b1831388db->leave($__internal_458e4d1399a0c343c1bd4d03f9aa4f97abcfbd6abe713db666abc6b1831388db_prof);

        
        $__internal_20fddf49966c78d12f65ceb1e4e74cedb19a721c842ca985692194656348f928->leave($__internal_20fddf49966c78d12f65ceb1e4e74cedb19a721c842ca985692194656348f928_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid:_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  71 => 21,  66 => 18,  57 => 16,  53 => 15,  46 => 11,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/table.html.twig' as table %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% if data|length > 0 %}
    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                {{ table.headers(resources, definition, app.request.attributes) }}
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
                {{ table.row(resources, definition, row) }}
            {% endfor %}
        </tbody>
    </table>
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}

", "SyliusUiBundle:Grid:_history.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_history.html.twig");
    }
}
