<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig */
class __TwigTemplate_ea49d14dc8653f018e580b136919a3976a8d99637632d984b97f86c59e4f12d1 extends Twig_Template
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
        $__internal_1c1bc35a8851ebce34f8a70a3649ffb2b60a9504192a05d290d55356dde7964a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1bc35a8851ebce34f8a70a3649ffb2b60a9504192a05d290d55356dde7964a->enter($__internal_1c1bc35a8851ebce34f8a70a3649ffb2b60a9504192a05d290d55356dde7964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig"));

        $__internal_cc25d4011979ce332393479db6c85e8888ff173d77a2d54d1c6c9a6bb95408c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc25d4011979ce332393479db6c85e8888ff173d77a2d54d1c6c9a6bb95408c9->enter($__internal_cc25d4011979ce332393479db6c85e8888ff173d77a2d54d1c6c9a6bb95408c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => $this->getAttribute(        // line 6
($context["promotion"] ?? $this->getContext($context, "promotion")), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => $this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_1c1bc35a8851ebce34f8a70a3649ffb2b60a9504192a05d290d55356dde7964a->leave($__internal_1c1bc35a8851ebce34f8a70a3649ffb2b60a9504192a05d290d55356dde7964a_prof);

        
        $__internal_cc25d4011979ce332393479db6c85e8888ff173d77a2d54d1c6c9a6bb95408c9->leave($__internal_cc25d4011979ce332393479db6c85e8888ff173d77a2d54d1c6c9a6bb95408c9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.promotions'|trans, url: path('sylius_admin_promotion_index') },
        { label: promotion.code, url: path('sylius_admin_promotion_update', {'id': promotion.id}) },
        { label: 'sylius.ui.coupons'|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Index/_breadcrumb.html.twig");
    }
}
