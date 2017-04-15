<?php

/* SyliusUiBundle:Grid/Action:create.html.twig */
class __TwigTemplate_98801cc5a89fda8fa89ceaa41665b4046a91597131fb6b98ed7d0c4b2001a3c2 extends Twig_Template
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
        $__internal_25523e8d10fe5645fe9a8d988684aea50c9e2a4e9df073720aafeea713d6cf62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25523e8d10fe5645fe9a8d988684aea50c9e2a4e9df073720aafeea713d6cf62->enter($__internal_25523e8d10fe5645fe9a8d988684aea50c9e2a4e9df073720aafeea713d6cf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:create.html.twig"));

        $__internal_1bd6fd14554987c0a1ad9ef46ad01a994363bd96265df272273906634bbf6c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd6fd14554987c0a1ad9ef46ad01a994363bd96265df272273906634bbf6c5a->enter($__internal_1bd6fd14554987c0a1ad9ef46ad01a994363bd96265df272273906634bbf6c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:create.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:create.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array())) : (array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))) : ($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))), (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array())) : (array())))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->getcreate(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()));
        echo "
";
        
        $__internal_25523e8d10fe5645fe9a8d988684aea50c9e2a4e9df073720aafeea713d6cf62->leave($__internal_25523e8d10fe5645fe9a8d988684aea50c9e2a4e9df073720aafeea713d6cf62_prof);

        
        $__internal_1bd6fd14554987c0a1ad9ef46ad01a994363bd96265df272273906634bbf6c5a->leave($__internal_1bd6fd14554987c0a1ad9ef46ad01a994363bd96265df272273906634bbf6c5a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:create.html.twig";
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

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('create')), options.link.parameters|default([]))) %}

{{ buttons.create(path, action.label) }}
", "SyliusUiBundle:Grid/Action:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/create.html.twig");
    }
}
