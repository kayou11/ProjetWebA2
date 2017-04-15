<?php

/* SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig */
class __TwigTemplate_005fecfde9f36f616a18b453071c23ca82834d39578e74630dcdc2416eafcd5b extends Twig_Template
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
        $__internal_f2e891a14158af56f59488757c3fe0092bce99bfec1d3df5adcd92095d9fe5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e891a14158af56f59488757c3fe0092bce99bfec1d3df5adcd92095d9fe5e2->enter($__internal_f2e891a14158af56f59488757c3fe0092bce99bfec1d3df5adcd92095d9fe5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig"));

        $__internal_81b030a690aba8de0a1ce1a8807005d772cd30bd2ea2265d390cee023a545090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b030a690aba8de0a1ce1a8807005d772cd30bd2ea2265d390cee023a545090->enter($__internal_81b030a690aba8de0a1ce1a8807005d772cd30bd2ea2265d390cee023a545090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))))));
        // line 4
        echo "
";
        // line 5
        if (twig_in_filter($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 6
            echo "    ";
            echo $context["buttons"]->getdefault(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), null, (($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array(), "any", false, true), "icon", array()), "credit card alternative")) : ("credit card alternative")), "blue");
            echo "
";
        }
        
        $__internal_f2e891a14158af56f59488757c3fe0092bce99bfec1d3df5adcd92095d9fe5e2->leave($__internal_f2e891a14158af56f59488757c3fe0092bce99bfec1d3df5adcd92095d9fe5e2_prof);

        
        $__internal_81b030a690aba8de0a1ce1a8807005d772cd30bd2ea2265d390cee023a545090->leave($__internal_81b030a690aba8de0a1ce1a8807005d772cd30bd2ea2265d390cee023a545090_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('show')), options.link.parameters|default({'id': data.id}))) %}

{% if data.paymentState in ['awaiting_payment'] %}
    {{ buttons.default(path, action.label, null, action.options.icon|default('credit card alternative'), 'blue') }}
{% endif %}
", "SyliusShopBundle:Account/Order/Grid/Action:pay.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Action/pay.html.twig");
    }
}
