<?php

/* SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig */
class __TwigTemplate_d4dd309f41d06d0850362833cd881acfef893126faef7d3b187d84bc46936af3 extends Twig_Template
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
        $__internal_52373b9b1c2aab4274c5dfb78a008bf990f37a3b38f6e97422bf0e6924081614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52373b9b1c2aab4274c5dfb78a008bf990f37a3b38f6e97422bf0e6924081614->enter($__internal_52373b9b1c2aab4274c5dfb78a008bf990f37a3b38f6e97422bf0e6924081614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig"));

        $__internal_8afb7d4a4d37fb83a0b70dc4cdfab2a4d0119ee9b233c0990871d9166d445dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afb7d4a4d37fb83a0b70dc4cdfab2a4d0119ee9b233c0990871d9166d445dbf->enter($__internal_8afb7d4a4d37fb83a0b70dc4cdfab2a4d0119ee9b233c0990871d9166d445dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_order_index");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " <span id=\"number\">#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo "</span></div>
</div>
";
        
        $__internal_52373b9b1c2aab4274c5dfb78a008bf990f37a3b38f6e97422bf0e6924081614->leave($__internal_52373b9b1c2aab4274c5dfb78a008bf990f37a3b38f6e97422bf0e6924081614_prof);

        
        $__internal_8afb7d4a4d37fb83a0b70dc4cdfab2a4d0119ee9b233c0990871d9166d445dbf->leave($__internal_8afb7d4a4d37fb83a0b70dc4cdfab2a4d0119ee9b233c0990871d9166d445dbf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  42 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_order_index') }}\" class=\"section\">{{ 'sylius.ui.order_history'|trans }}</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">{{ 'sylius.ui.order'|trans }} <span id=\"number\">#{{ order.number }}</span></div>
</div>
", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Show/_breadcrumb.html.twig");
    }
}
