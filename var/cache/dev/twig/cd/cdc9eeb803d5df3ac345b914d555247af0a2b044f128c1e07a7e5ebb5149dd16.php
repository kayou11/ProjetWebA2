<?php

/* SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig */
class __TwigTemplate_2509f26893612ac9832480692dc10b6e1d5c32e14860c5b3ba4400397e23490d extends Twig_Template
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
        $__internal_7f7f046cd24d0f0e7c13e02b390f2ab7a15bbba9af9fbb7f2bfe81d231a8987b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7f046cd24d0f0e7c13e02b390f2ab7a15bbba9af9fbb7f2bfe81d231a8987b->enter($__internal_7f7f046cd24d0f0e7c13e02b390f2ab7a15bbba9af9fbb7f2bfe81d231a8987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig"));

        $__internal_dad741f90c72ffb9a9583870aa07a19317987b57eb997bf92884d7d98c23c1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad741f90c72ffb9a9583870aa07a19317987b57eb997bf92884d7d98c23c1a8->enter($__internal_dad741f90c72ffb9a9583870aa07a19317987b57eb997bf92884d7d98c23c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => $this->getAttribute(        // line 6
($context["promotion"] ?? $this->getContext($context, "promotion")), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => $this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_coupon_index", array("promotionId" => $this->getAttribute(        // line 7
($context["promotion"] ?? $this->getContext($context, "promotion")), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_7f7f046cd24d0f0e7c13e02b390f2ab7a15bbba9af9fbb7f2bfe81d231a8987b->leave($__internal_7f7f046cd24d0f0e7c13e02b390f2ab7a15bbba9af9fbb7f2bfe81d231a8987b_prof);

        
        $__internal_dad741f90c72ffb9a9583870aa07a19317987b57eb997bf92884d7d98c23c1a8->leave($__internal_dad741f90c72ffb9a9583870aa07a19317987b57eb997bf92884d7d98c23c1a8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.promotions'|trans, url: path('sylius_admin_promotion_index') },
        { label: promotion.code, url: path('sylius_admin_promotion_update', {'id': promotion.id}) },
        { label: 'sylius.ui.coupons'|trans, url: path('sylius_admin_promotion_coupon_index', {'promotionId': promotion.id}) },
        { label: 'sylius.ui.generate'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Generate/_breadcrumb.html.twig");
    }
}
