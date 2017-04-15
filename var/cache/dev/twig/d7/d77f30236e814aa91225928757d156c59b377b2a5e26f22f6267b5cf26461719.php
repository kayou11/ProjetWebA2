<?php

/* SyliusUiBundle:Grid/Action:delete.html.twig */
class __TwigTemplate_a6b354a8e41e433dc46a6d6bf7dc7680a60253510460e113a8fc6a4f12b0ba10 extends Twig_Template
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
        $__internal_0acd1b203dd3f018d3fd8ec48026a4aba3a85bf6886f9f456997aec4f49c87fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acd1b203dd3f018d3fd8ec48026a4aba3a85bf6886f9f456997aec4f49c87fa->enter($__internal_0acd1b203dd3f018d3fd8ec48026a4aba3a85bf6886f9f456997aec4f49c87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:delete.html.twig"));

        $__internal_24f7543c79320b1374810436946f6b07023db57b985cd88664de8da214e420de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f7543c79320b1374810436946f6b07023db57b985cd88664de8da214e420de->enter($__internal_24f7543c79320b1374810436946f6b07023db57b985cd88664de8da214e420de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:delete.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:delete.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "delete"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "delete"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "delete"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "delete"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->getdelete(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), true, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()));
        echo "
";
        
        $__internal_0acd1b203dd3f018d3fd8ec48026a4aba3a85bf6886f9f456997aec4f49c87fa->leave($__internal_0acd1b203dd3f018d3fd8ec48026a4aba3a85bf6886f9f456997aec4f49c87fa_prof);

        
        $__internal_24f7543c79320b1374810436946f6b07023db57b985cd88664de8da214e420de->leave($__internal_24f7543c79320b1374810436946f6b07023db57b985cd88664de8da214e420de_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('delete')), options.link.parameters|default({'id': data.id}))) %}

{{ buttons.delete(path, action.label, true, data.id) }}
", "SyliusUiBundle:Grid/Action:delete.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/delete.html.twig");
    }
}
