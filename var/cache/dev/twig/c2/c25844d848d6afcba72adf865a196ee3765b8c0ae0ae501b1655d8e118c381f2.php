<?php

/* SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig */
class __TwigTemplate_95b2d7dd3c88fc4453d180b8bc6aca2128c0a5a6a238f553d50a9d570bd3d42d extends Twig_Template
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
        $__internal_54597e8b5d9453f1fd30b0d736c52310cc2b11390322fbce97afaa1297e4bfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54597e8b5d9453f1fd30b0d736c52310cc2b11390322fbce97afaa1297e4bfb4->enter($__internal_54597e8b5d9453f1fd30b0d736c52310cc2b11390322fbce97afaa1297e4bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig"));

        $__internal_7999506521fc44b2d3163a4757a6890445a89db6e5d1f51b6ea43a94a3d41efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7999506521fc44b2d3163a4757a6890445a89db6e5d1f51b6ea43a94a3d41efd->enter($__internal_7999506521fc44b2d3163a4757a6890445a89db6e5d1f51b6ea43a94a3d41efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 5
($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 2 => array("label" => (($this->getAttribute(        // line 6
($context["resource"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["resource"] ?? null), "code", array()), $this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array()))) : ($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_54597e8b5d9453f1fd30b0d736c52310cc2b11390322fbce97afaa1297e4bfb4->leave($__internal_54597e8b5d9453f1fd30b0d736c52310cc2b11390322fbce97afaa1297e4bfb4_prof);

        
        $__internal_7999506521fc44b2d3163a4757a6890445a89db6e5d1f51b6ea43a94a3d41efd->leave($__internal_7999506521fc44b2d3163a4757a6890445a89db6e5d1f51b6ea43a94a3d41efd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  34 => 10,  32 => 6,  31 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans, url: path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({})) },
        { label: resource.code|default(resource.id)},
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Crud/Update:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_breadcrumb.html.twig");
    }
}
