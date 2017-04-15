<?php

/* SyliusShopBundle:Product/Index:_pagination.html.twig */
class __TwigTemplate_1721694fe585fda603be0161e524d9079dbc3f54a94dce4f905bfae8b51ad4ba extends Twig_Template
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
        $__internal_7f79197834776dc61a3f93260f7382b16d38474115600b16f05e64f49781ac7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f79197834776dc61a3f93260f7382b16d38474115600b16f05e64f49781ac7e->enter($__internal_7f79197834776dc61a3f93260f7382b16d38474115600b16f05e64f49781ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_pagination.html.twig"));

        $__internal_680c5081784240161c95012d1af0b55b00ed603027b91665f67ea779000194cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680c5081784240161c95012d1af0b55b00ed603027b91665f67ea779000194cb->enter($__internal_680c5081784240161c95012d1af0b55b00ed603027b91665f67ea779000194cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_pagination.html.twig"));

        // line 1
        $context["paginationLimits"] = $this->getAttribute($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array()), "limits", array());
        // line 2
        echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.show"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array()), "maxPerPage", array()), "html", null, true);
        echo "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationLimits"] ?? $this->getContext($context, "paginationLimits")));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            if (($context["limit"] != $this->getAttribute($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array()), "maxPerPage", array()))) {
                // line 10
                echo "                ";
                $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("limit" => $context["limit"])));
                // line 11
                echo "                <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                echo "</a>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7f79197834776dc61a3f93260f7382b16d38474115600b16f05e64f49781ac7e->leave($__internal_7f79197834776dc61a3f93260f7382b16d38474115600b16f05e64f49781ac7e_prof);

        
        $__internal_680c5081784240161c95012d1af0b55b00ed603027b91665f67ea779000194cb->leave($__internal_680c5081784240161c95012d1af0b55b00ed603027b91665f67ea779000194cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  49 => 11,  46 => 10,  41 => 9,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationLimits = (resources.definition.limits) %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            {{ 'sylius.ui.show'|trans }} {{ resources.data.maxPerPage }}
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            {% for limit in paginationLimits if limit != resources.data.maxPerPage %}
                {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge({'limit': limit})) %}
                <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
            {% endfor %}
            </div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Product/Index:_pagination.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_pagination.html.twig");
    }
}
