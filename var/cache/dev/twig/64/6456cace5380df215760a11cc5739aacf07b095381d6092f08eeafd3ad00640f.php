<?php

/* SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig */
class __TwigTemplate_408b83ee2043085a837f0ae37febcfe12a856832f93ae0c0a8c8a3697d65f2aa extends Twig_Template
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
        $__internal_1a0a4eeb2d3da113d237376da4b5267802e69863894c13989ffcde04e91adddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0a4eeb2d3da113d237376da4b5267802e69863894c13989ffcde04e91adddd->enter($__internal_1a0a4eeb2d3da113d237376da4b5267802e69863894c13989ffcde04e91adddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig"));

        $__internal_8000e835c151655c968548d2e45860d67f7e32074bdf79536c3db01f3a685bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8000e835c151655c968548d2e45860d67f7e32074bdf79536c3db01f3a685bbb->enter($__internal_8000e835c151655c968548d2e45860d67f7e32074bdf79536c3db01f3a685bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => $this->getAttribute(        // line 6
($context["product"] ?? $this->getContext($context, "product")), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_index", array("productId" => $this->getAttribute(        // line 7
($context["product"] ?? $this->getContext($context, "product")), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_1a0a4eeb2d3da113d237376da4b5267802e69863894c13989ffcde04e91adddd->leave($__internal_1a0a4eeb2d3da113d237376da4b5267802e69863894c13989ffcde04e91adddd_prof);

        
        $__internal_8000e835c151655c968548d2e45860d67f7e32074bdf79536c3db01f3a685bbb->leave($__internal_8000e835c151655c968548d2e45860d67f7e32074bdf79536c3db01f3a685bbb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig";
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
        { label: product.code, url: path('sylius_admin_product_update', {'id': product.id}) },
        { label: 'sylius.ui.variants'|trans, url: path('sylius_admin_product_variant_index', {'productId': product.id}) },
        { label: 'sylius.ui.generate'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Generate/_breadcrumb.html.twig");
    }
}
