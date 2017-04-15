<?php

/* SyliusUiBundle:Grid/Action:show.html.twig */
class __TwigTemplate_8bb4b394a01a0e533b5e2c52dee68e355061155938577e4febafd7a861ef178a extends Twig_Template
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
        $__internal_6234f5914841ba8ac26a0614d0f1c094ed95884c4213d5aff0924bcf1c2cabbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6234f5914841ba8ac26a0614d0f1c094ed95884c4213d5aff0924bcf1c2cabbf->enter($__internal_6234f5914841ba8ac26a0614d0f1c094ed95884c4213d5aff0924bcf1c2cabbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:show.html.twig"));

        $__internal_a4df4631c4818d45a04d19b941a27671d41d86e1f4abf167178203aa07377776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4df4631c4818d45a04d19b941a27671d41d86e1f4abf167178203aa07377776->enter($__internal_a4df4631c4818d45a04d19b941a27671d41d86e1f4abf167178203aa07377776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:show.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:show.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "show"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->getshow(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()));
        echo "
";
        
        $__internal_6234f5914841ba8ac26a0614d0f1c094ed95884c4213d5aff0924bcf1c2cabbf->leave($__internal_6234f5914841ba8ac26a0614d0f1c094ed95884c4213d5aff0924bcf1c2cabbf_prof);

        
        $__internal_a4df4631c4818d45a04d19b941a27671d41d86e1f4abf167178203aa07377776->leave($__internal_a4df4631c4818d45a04d19b941a27671d41d86e1f4abf167178203aa07377776_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:show.html.twig";
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

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('show')), options.link.parameters|default({'id': data.id}))) %}

{{ buttons.show(path, action.label) }}
", "SyliusUiBundle:Grid/Action:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/show.html.twig");
    }
}
