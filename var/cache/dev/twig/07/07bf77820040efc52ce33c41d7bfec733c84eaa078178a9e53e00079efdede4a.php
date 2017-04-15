<?php

/* SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig */
class __TwigTemplate_6f6eb59b2b4e6b5032b30fdf407c5b93c4c5b97f5490df1f5ffbebd63748c13a extends Twig_Template
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
        $__internal_40e571df60e2118b28b5e9df7b1b2c3fc679e6af295cbf1f97d3e132aa3a3539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e571df60e2118b28b5e9df7b1b2c3fc679e6af295cbf1f97d3e132aa3a3539->enter($__internal_40e571df60e2118b28b5e9df7b1b2c3fc679e6af295cbf1f97d3e132aa3a3539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig"));

        $__internal_f0d82a2b0b44a9c0997708ec1baa4d97c6bf7bdfa05acdb43aa13fa6a39e7374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d82a2b0b44a9c0997708ec1baa4d97c6bf7bdfa05acdb43aa13fa6a39e7374->enter($__internal_f0d82a2b0b44a9c0997708ec1baa4d97c6bf7bdfa05acdb43aa13fa6a39e7374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => $this->getAttribute($this->getAttribute(        // line 6
($context["resource"] ?? $this->getContext($context, "resource")), "promotion", array()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "promotion", array()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(        // line 7
($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), array("promotionId" => $this->getAttribute($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "promotion", array()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_40e571df60e2118b28b5e9df7b1b2c3fc679e6af295cbf1f97d3e132aa3a3539->leave($__internal_40e571df60e2118b28b5e9df7b1b2c3fc679e6af295cbf1f97d3e132aa3a3539_prof);

        
        $__internal_f0d82a2b0b44a9c0997708ec1baa4d97c6bf7bdfa05acdb43aa13fa6a39e7374->leave($__internal_f0d82a2b0b44a9c0997708ec1baa4d97c6bf7bdfa05acdb43aa13fa6a39e7374_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig";
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
        { label: resource.promotion.code, url: path('sylius_admin_promotion_update', {'id': resource.promotion.id}) },
        { label: 'sylius.ui.coupons'|trans, url: path(configuration.getRouteName('index'), {'promotionId': resource.promotion.id}) },
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Create/_breadcrumb.html.twig");
    }
}
