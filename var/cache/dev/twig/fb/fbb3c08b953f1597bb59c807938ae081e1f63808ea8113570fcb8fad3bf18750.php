<?php

/* SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig */
class __TwigTemplate_efdbb8863a3b4c7da89493770c93c11a9337388b538e53fc91f7219f3a500ddd extends Twig_Template
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
        $__internal_e40517be18c54cf60a76373428099d7a25b570247456e2d6e18ec3542dae79c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40517be18c54cf60a76373428099d7a25b570247456e2d6e18ec3542dae79c1->enter($__internal_e40517be18c54cf60a76373428099d7a25b570247456e2d6e18ec3542dae79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig"));

        $__internal_3f4427c96b349cf43703a08179966ce670a6ae28eca3517bb77c91e9fdd85065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4427c96b349cf43703a08179966ce670a6ae28eca3517bb77c91e9fdd85065->enter($__internal_3f4427c96b349cf43703a08179966ce670a6ae28eca3517bb77c91e9fdd85065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "promotionId"), "method")), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 7
($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 4 => array("label" => (($this->getAttribute(        // line 8
($context["resource"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["resource"] ?? null), "code", array()), $this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array()))) : ($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array())))), 5 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")));
        // line 12
        echo "
";
        // line 13
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_e40517be18c54cf60a76373428099d7a25b570247456e2d6e18ec3542dae79c1->leave($__internal_e40517be18c54cf60a76373428099d7a25b570247456e2d6e18ec3542dae79c1_prof);

        
        $__internal_3f4427c96b349cf43703a08179966ce670a6ae28eca3517bb77c91e9fdd85065->leave($__internal_3f4427c96b349cf43703a08179966ce670a6ae28eca3517bb77c91e9fdd85065_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  33 => 8,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
        { label: 'sylius.ui.promotions'|trans, url: path('sylius_admin_promotion_index') },
        { label: app.request.attributes.get('promotionId') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans, url: path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({})) },
        { label: resource.code|default(resource.id) },
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Update:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Update/_breadcrumb.html.twig");
    }
}
