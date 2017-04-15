<?php

/* SyliusAdminBundle:Product/Index:_breadcrumb.html.twig */
class __TwigTemplate_3656981db8c49b8c2306f103a1865710ed5ac24b0d6173d66f8b3d28e203a389 extends Twig_Template
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
        $__internal_bfb6f503b86ddb6da8ae5e20ebf1b3a48ee34cfb6f6b4ed6fefdbe68703dbba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb6f503b86ddb6da8ae5e20ebf1b3a48ee34cfb6f6b4ed6fefdbe68703dbba3->enter($__internal_bfb6f503b86ddb6da8ae5e20ebf1b3a48ee34cfb6f6b4ed6fefdbe68703dbba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig"));

        $__internal_f84be2aa38485ea5273b8c24073b72d5cda79f8c80729ac09d39b0dae5128ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84be2aa38485ea5273b8c24073b72d5cda79f8c80729ac09d39b0dae5128ba2->enter($__internal_f84be2aa38485ea5273b8c24073b72d5cda79f8c80729ac09d39b0dae5128ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (array_key_exists("taxon", $context)) {
            // line 4
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => $this->getAttribute(            // line 7
($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array())));
        } else {
            // line 11
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products")));
        }
        // line 17
        echo "
";
        // line 18
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_bfb6f503b86ddb6da8ae5e20ebf1b3a48ee34cfb6f6b4ed6fefdbe68703dbba3->leave($__internal_bfb6f503b86ddb6da8ae5e20ebf1b3a48ee34cfb6f6b4ed6fefdbe68703dbba3_prof);

        
        $__internal_f84be2aa38485ea5273b8c24073b72d5cda79f8c80729ac09d39b0dae5128ba2->leave($__internal_f84be2aa38485ea5273b8c24073b72d5cda79f8c80729ac09d39b0dae5128ba2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 17,  37 => 11,  34 => 7,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% if taxon is defined %}
    {% set breadcrumbs = [
            { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
            { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
            { label: taxon.name },
        ]
    %}
{% else %}
    {% set breadcrumbs = [
            { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
            { label: 'sylius.ui.products'|trans },
        ]
    %}
{% endif %}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Index/_breadcrumb.html.twig");
    }
}
