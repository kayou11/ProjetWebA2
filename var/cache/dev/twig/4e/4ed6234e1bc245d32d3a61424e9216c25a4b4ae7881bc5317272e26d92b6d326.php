<?php

/* SyliusShopBundle:Product/Index:_sorting.html.twig */
class __TwigTemplate_47ed4ed7b22e07ec50a92c51725f4073feb79faed2c01eee9f85a027ff323201 extends Twig_Template
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
        $__internal_ccfe2b3a8d8f1e0104eda5a82fc955d8a75d6acbca5ce6f5d35ccc7ee60bd683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe2b3a8d8f1e0104eda5a82fc955d8a75d6acbca5ce6f5d35ccc7ee60bd683->enter($__internal_ccfe2b3a8d8f1e0104eda5a82fc955d8a75d6acbca5ce6f5d35ccc7ee60bd683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sorting.html.twig"));

        $__internal_3df4cc0106b45e863b7312e2550eda1417ac031075b1f0cf33acc13b6ce73ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df4cc0106b45e863b7312e2550eda1417ac031075b1f0cf33acc13b6ce73ca7->enter($__internal_3df4cc0106b45e863b7312e2550eda1417ac031075b1f0cf33acc13b6ce73ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sorting.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array()), "nbResults", array()) > 0)) {
            // line 2
            echo "
";
            // line 3
            $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
            // line 4
            echo "
";
            // line 5
            $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 6
            $context["route_parameters"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 7
            echo "
";
            // line 8
            $context["criteria"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "criteria", 1 => array()), "method");
            // line 9
            echo "
";
            // line 10
            $context["default_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 11
            $context["from_a_to_z_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("name" => "asc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 12
            $context["from_z_to_a_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("name" => "desc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 13
            $context["oldest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("createdAt" => "asc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 14
            $context["newest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("createdAt" => "desc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 15
            $context["cheapest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("price" => "asc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 16
            $context["most_expensive_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(array("sorting" => array("price" => "desc"), "criteria" => ($context["criteria"] ?? $this->getContext($context, "criteria"))), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))));
            // line 17
            echo "
";
            // line 18
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"))) {
                // line 19
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "asc"))) {
                // line 21
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "desc"))) {
                // line 23
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "desc"))) {
                // line 25
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 26
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "asc"))) {
                // line 27
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 28
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "asc"))) {
                // line 29
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first"));
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 30
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "desc"))) {
                // line 31
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first"));
            }
            // line 33
            echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.display"), "html", null, true);
            echo "
        <div class=\"ui inline dropdown\">
            <div class=\"text\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["current_sorting_label"] ?? $this->getContext($context, "current_sorting_label")), "html", null, true);
            echo "</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["default_path"] ?? $this->getContext($context, "default_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["from_a_to_z_path"] ?? $this->getContext($context, "from_a_to_z_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["from_z_to_a_path"] ?? $this->getContext($context, "from_z_to_a_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["newest_first_path"] ?? $this->getContext($context, "newest_first_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["oldest_first_path"] ?? $this->getContext($context, "oldest_first_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["cheapest_first_path"] ?? $this->getContext($context, "cheapest_first_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["most_expensive_first_path"] ?? $this->getContext($context, "most_expensive_first_path")), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_ccfe2b3a8d8f1e0104eda5a82fc955d8a75d6acbca5ce6f5d35ccc7ee60bd683->leave($__internal_ccfe2b3a8d8f1e0104eda5a82fc955d8a75d6acbca5ce6f5d35ccc7ee60bd683_prof);

        
        $__internal_3df4cc0106b45e863b7312e2550eda1417ac031075b1f0cf33acc13b6ce73ca7->leave($__internal_3df4cc0106b45e863b7312e2550eda1417ac031075b1f0cf33acc13b6ce73ca7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  156 => 46,  148 => 45,  140 => 44,  132 => 43,  124 => 42,  116 => 41,  110 => 38,  105 => 36,  100 => 33,  96 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  79 => 24,  76 => 23,  74 => 22,  71 => 21,  69 => 20,  66 => 19,  64 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if resources.data.nbResults > 0 %}

{% set definition = resources.definition %}

{% set route = app.request.attributes.get('_route') %}
{% set route_parameters = app.request.attributes.get('_route_params') %}

{% set criteria = app.request.query.get('criteria', {}) %}

{% set default_path = path(route, {'criteria': criteria}|merge(route_parameters)) %}
{% set from_a_to_z_path = path(route, {'sorting': {'name': 'asc'}, 'criteria': criteria}|merge(route_parameters)) %}
{% set from_z_to_a_path = path(route, {'sorting': {'name': 'desc'}, 'criteria': criteria}|merge(route_parameters)) %}
{% set oldest_first_path = path(route, {'sorting': {'createdAt': 'asc'}, 'criteria': criteria}|merge(route_parameters)) %}
{% set newest_first_path = path(route, {'sorting': {'createdAt': 'desc'}, 'criteria': criteria}|merge(route_parameters)) %}
{% set cheapest_first_path = path(route, {'sorting': {'price': 'asc'}, 'criteria': criteria}|merge(route_parameters)) %}
{% set most_expensive_first_path = path(route, {'sorting': {'price': 'desc'}, 'criteria': criteria}|merge(route_parameters)) %}

{% if app.request.query.get('sorting') is empty %}
    {% set current_sorting_label = 'sylius.ui.by_position'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.from_a_to_z'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.from_z_to_a'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.newest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.oldest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.cheapest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'desc' %}
    {% set current_sorting_label = 'sylius.ui.most_expensive_first'|trans|lower %}
{% endif %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        {{ 'sylius.ui.display'|trans }}
        <div class=\"ui inline dropdown\">
            <div class=\"text\">{{ current_sorting_label }}</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"{{ default_path }}\" data-text=\"{{ 'sylius.ui.by_position'|trans|lower }}\">{{ 'sylius.ui.by_position'|trans }}</a>
                <a class=\"item\" href=\"{{ from_a_to_z_path }}\" data-text=\"{{ 'sylius.ui.from_a_to_z'|trans|lower }}\">{{ 'sylius.ui.from_a_to_z'|trans }}</a>
                <a class=\"item\" href=\"{{ from_z_to_a_path }}\" data-text=\"{{ 'sylius.ui.from_z_to_a'|trans|lower }}\">{{ 'sylius.ui.from_z_to_a'|trans }}</a>
                <a class=\"item\" href=\"{{ newest_first_path }}\" data-text=\"{{ 'sylius.ui.newest_first'|trans|lower }}\">{{ 'sylius.ui.newest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ oldest_first_path }}\" data-text=\"{{ 'sylius.ui.oldest_first'|trans|lower }}\">{{ 'sylius.ui.oldest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ cheapest_first_path }}\" data-text=\"{{ 'sylius.ui.cheapest_first'|trans|lower }}\">{{ 'sylius.ui.cheapest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ most_expensive_first_path }}\" data-text=\"{{ 'sylius.ui.most_expensive_first'|trans|lower }}\">{{ 'sylius.ui.most_expensive_first'|trans }}</a>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "SyliusShopBundle:Product/Index:_sorting.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_sorting.html.twig");
    }
}
