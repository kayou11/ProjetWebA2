<?php

/* SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig */
class __TwigTemplate_f5c57d921028f42b3cd33aa98ac7daf305446cef52885bb4927e9c2ba697873a extends Twig_Template
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
        $__internal_428e360558258ed3f1aa22f60ab9088408418116dbc06aecf8f3f3e56c8a8ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428e360558258ed3f1aa22f60ab9088408418116dbc06aecf8f3f3e56c8a8ef8->enter($__internal_428e360558258ed3f1aa22f60ab9088408418116dbc06aecf8f3f3e56c8a8ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig"));

        $__internal_0a94e404f2e393f089d37fb22c0793e3d50056b68633a9d864597423b1830abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a94e404f2e393f089d37fb22c0793e3d50056b68633a9d864597423b1830abc->enter($__internal_0a94e404f2e393f089d37fb22c0793e3d50056b68633a9d864597423b1830abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => $this->getAttribute($this->getAttribute(        // line 6
($context["resource"] ?? $this->getContext($context, "resource")), "product", array()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "product", array()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(        // line 7
($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), array("productId" => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "product", array()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_428e360558258ed3f1aa22f60ab9088408418116dbc06aecf8f3f3e56c8a8ef8->leave($__internal_428e360558258ed3f1aa22f60ab9088408418116dbc06aecf8f3f3e56c8a8ef8_prof);

        
        $__internal_0a94e404f2e393f089d37fb22c0793e3d50056b68633a9d864597423b1830abc->leave($__internal_0a94e404f2e393f089d37fb22c0793e3d50056b68633a9d864597423b1830abc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  34 => 11,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
        { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
        { label: resource.product.code, url: path('sylius_admin_product_update', {'id': resource.product.id}) },
        { label: 'sylius.ui.variants'|trans, url: path(configuration.getRouteName('index'), {'productId': resource.product.id}) },
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Create/_breadcrumb.html.twig");
    }
}
