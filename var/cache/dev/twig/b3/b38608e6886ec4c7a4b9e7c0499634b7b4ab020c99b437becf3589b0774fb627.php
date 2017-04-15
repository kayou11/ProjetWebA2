<?php

/* SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig */
class __TwigTemplate_9a0ae6b417af3ae60aafe564da360bcf6c541dd6ed010697f86549d871885f9c extends Twig_Template
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
        $__internal_2b28fbaf478f4011468ddb1a130ebe5b9b91d5f0a4ed69f9904a3fb1fe27346d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b28fbaf478f4011468ddb1a130ebe5b9b91d5f0a4ed69f9904a3fb1fe27346d->enter($__internal_2b28fbaf478f4011468ddb1a130ebe5b9b91d5f0a4ed69f9904a3fb1fe27346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig"));

        $__internal_0e4d98e02cf691c70f22216d9f5b9d01e33a973efb819e301138abcb2d7528f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4d98e02cf691c70f22216d9f5b9d01e33a973efb819e301138abcb2d7528f0->enter($__internal_0e4d98e02cf691c70f22216d9f5b9d01e33a973efb819e301138abcb2d7528f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => $this->getAttribute(        // line 6
($context["product"] ?? $this->getContext($context, "product")), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_2b28fbaf478f4011468ddb1a130ebe5b9b91d5f0a4ed69f9904a3fb1fe27346d->leave($__internal_2b28fbaf478f4011468ddb1a130ebe5b9b91d5f0a4ed69f9904a3fb1fe27346d_prof);

        
        $__internal_0e4d98e02cf691c70f22216d9f5b9d01e33a973efb819e301138abcb2d7528f0->leave($__internal_0e4d98e02cf691c70f22216d9f5b9d01e33a973efb819e301138abcb2d7528f0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  33 => 10,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
        { label: product.code, url: path('sylius_admin_product_update', {'id': product.id}) },
        { label: 'sylius.ui.variants'|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Index/_breadcrumb.html.twig");
    }
}
