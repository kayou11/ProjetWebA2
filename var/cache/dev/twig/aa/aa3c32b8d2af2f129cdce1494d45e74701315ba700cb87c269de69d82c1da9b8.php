<?php

/* SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig */
class __TwigTemplate_433edccc9db18dc1fdf5352c1a14d02a34b91ea63b52bdcfa93524bf2dbfe8fa extends Twig_Template
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
        $__internal_0a7589cb5cee1540601c5a42895f3fa58c6c3e66fe4c327216877032da94202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7589cb5cee1540601c5a42895f3fa58c6c3e66fe4c327216877032da94202b->enter($__internal_0a7589cb5cee1540601c5a42895f3fa58c6c3e66fe4c327216877032da94202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig"));

        $__internal_ba9e19c6a1193bdcafc391ce356f26a364925d8db2c579dbba55f9c97ca3775f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e19c6a1193bdcafc391ce356f26a364925d8db2c579dbba55f9c97ca3775f->enter($__internal_ba9e19c6a1193bdcafc391ce356f26a364925d8db2c579dbba55f9c97ca3775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 5
($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 2 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 9
        echo "
";
        // line 10
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_0a7589cb5cee1540601c5a42895f3fa58c6c3e66fe4c327216877032da94202b->leave($__internal_0a7589cb5cee1540601c5a42895f3fa58c6c3e66fe4c327216877032da94202b_prof);

        
        $__internal_ba9e19c6a1193bdcafc391ce356f26a364925d8db2c579dbba55f9c97ca3775f->leave($__internal_ba9e19c6a1193bdcafc391ce356f26a364925d8db2c579dbba55f9c97ca3775f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  33 => 9,  31 => 5,  30 => 3,  27 => 2,  25 => 1,);
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
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Crud/Create:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Create/_breadcrumb.html.twig");
    }
}
