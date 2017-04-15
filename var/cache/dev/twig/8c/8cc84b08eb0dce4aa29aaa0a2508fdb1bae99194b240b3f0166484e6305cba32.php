<?php

/* @SyliusShop/Account/AddressBook/layout.html.twig */
class __TwigTemplate_bde7ab79d42ef27592da65fe5a5e97a8db841dc601cb13cb37d40187254b5480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "@SyliusShop/Account/AddressBook/layout.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e9f07f5b89c57f2f02ccdbede5bb9eed73a3cff6e358174e0128de3813a00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e9f07f5b89c57f2f02ccdbede5bb9eed73a3cff6e358174e0128de3813a00e->enter($__internal_44e9f07f5b89c57f2f02ccdbede5bb9eed73a3cff6e358174e0128de3813a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/layout.html.twig"));

        $__internal_74e8f62d086cdc3d18c68a62c53a757ddffefa9c12aef815bce15ccba9d71cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e8f62d086cdc3d18c68a62c53a757ddffefa9c12aef815bce15ccba9d71cbd->enter($__internal_74e8f62d086cdc3d18c68a62c53a757ddffefa9c12aef815bce15ccba9d71cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e9f07f5b89c57f2f02ccdbede5bb9eed73a3cff6e358174e0128de3813a00e->leave($__internal_44e9f07f5b89c57f2f02ccdbede5bb9eed73a3cff6e358174e0128de3813a00e_prof);

        
        $__internal_74e8f62d086cdc3d18c68a62c53a757ddffefa9c12aef815bce15ccba9d71cbd->leave($__internal_74e8f62d086cdc3d18c68a62c53a757ddffefa9c12aef815bce15ccba9d71cbd_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4321908156e6832de41d11c3c89c3aa552092dd823d2f661dedd3a068230c192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4321908156e6832de41d11c3c89c3aa552092dd823d2f661dedd3a068230c192->enter($__internal_4321908156e6832de41d11c3c89c3aa552092dd823d2f661dedd3a068230c192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_3a30351683869ab38d7abb0e340918919a369c8aa8b95d4607266411acf465c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a30351683869ab38d7abb0e340918919a369c8aa8b95d4607266411acf465c8->enter($__internal_3a30351683869ab38d7abb0e340918919a369c8aa8b95d4607266411acf465c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_3a30351683869ab38d7abb0e340918919a369c8aa8b95d4607266411acf465c8->leave($__internal_3a30351683869ab38d7abb0e340918919a369c8aa8b95d4607266411acf465c8_prof);

        
        $__internal_4321908156e6832de41d11c3c89c3aa552092dd823d2f661dedd3a068230c192->leave($__internal_4321908156e6832de41d11c3c89c3aa552092dd823d2f661dedd3a068230c192_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  59 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.address_book'|trans }}</div>
    </div>
{% endblock %}
", "@SyliusShop/Account/AddressBook/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/layout.html.twig");
    }
}
