<?php

/* SyliusUiBundle:Grid/Action:update.html.twig */
class __TwigTemplate_1d5a3fba00dc7d70afa61ef49d7d4963af61b3c0d79af9466334fa621e0715e9 extends Twig_Template
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
        $__internal_6114c2d7532467c202ca57136938da6106c81109a33c90da17a9783736d65bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6114c2d7532467c202ca57136938da6106c81109a33c90da17a9783736d65bb7->enter($__internal_6114c2d7532467c202ca57136938da6106c81109a33c90da17a9783736d65bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:update.html.twig"));

        $__internal_d13b65a48431b28c86c16793125a230eedab7d755c73a6209cb463ccd936501f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13b65a48431b28c86c16793125a230eedab7d755c73a6209cb463ccd936501f->enter($__internal_d13b65a48431b28c86c16793125a230eedab7d755c73a6209cb463ccd936501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:update.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:update.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))) : (array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())))))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->getedit(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()));
        echo "
";
        
        $__internal_6114c2d7532467c202ca57136938da6106c81109a33c90da17a9783736d65bb7->leave($__internal_6114c2d7532467c202ca57136938da6106c81109a33c90da17a9783736d65bb7_prof);

        
        $__internal_d13b65a48431b28c86c16793125a230eedab7d755c73a6209cb463ccd936501f->leave($__internal_d13b65a48431b28c86c16793125a230eedab7d755c73a6209cb463ccd936501f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:update.html.twig";
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

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('update')), options.link.parameters|default({'id': data.id}))) %}

{{ buttons.edit(path, action.label) }}
", "SyliusUiBundle:Grid/Action:update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/update.html.twig");
    }
}
