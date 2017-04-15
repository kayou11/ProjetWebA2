<?php

/* SyliusShopBundle::error404.html.twig */
class __TwigTemplate_4fabe9f56b864b5b0888ec3545d651d525338287b2560d9da969a34400001a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error404.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abbd1a6faf746cb9a7bc427cbf7efef21d79d1dd50a3de7a0104e5eafde5829a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbd1a6faf746cb9a7bc427cbf7efef21d79d1dd50a3de7a0104e5eafde5829a->enter($__internal_abbd1a6faf746cb9a7bc427cbf7efef21d79d1dd50a3de7a0104e5eafde5829a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error404.html.twig"));

        $__internal_aa8dbf42eef018e9eeeef4b45a2548ec3081f310f6120eb50147b47ecc1279c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8dbf42eef018e9eeeef4b45a2548ec3081f310f6120eb50147b47ecc1279c4->enter($__internal_aa8dbf42eef018e9eeeef4b45a2548ec3081f310f6120eb50147b47ecc1279c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbd1a6faf746cb9a7bc427cbf7efef21d79d1dd50a3de7a0104e5eafde5829a->leave($__internal_abbd1a6faf746cb9a7bc427cbf7efef21d79d1dd50a3de7a0104e5eafde5829a_prof);

        
        $__internal_aa8dbf42eef018e9eeeef4b45a2548ec3081f310f6120eb50147b47ecc1279c4->leave($__internal_aa8dbf42eef018e9eeeef4b45a2548ec3081f310f6120eb50147b47ecc1279c4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a348138705e4c4fbb61e19e72a26567556d753b9b67a31a248844dc1eaa4dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a348138705e4c4fbb61e19e72a26567556d753b9b67a31a248844dc1eaa4dc7->enter($__internal_9a348138705e4c4fbb61e19e72a26567556d753b9b67a31a248844dc1eaa4dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3e1269d50a9e0ad26a8148a1d168b99b67e6925880bb1e55315ff8953f826ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1269d50a9e0ad26a8148a1d168b99b67e6925880bb1e55315ff8953f826ab7->enter($__internal_3e1269d50a9e0ad26a8148a1d168b99b67e6925880bb1e55315ff8953f826ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.the_page_you_are_looking_for_does_not_exist"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_3e1269d50a9e0ad26a8148a1d168b99b67e6925880bb1e55315ff8953f826ab7->leave($__internal_3e1269d50a9e0ad26a8148a1d168b99b67e6925880bb1e55315ff8953f826ab7_prof);

        
        $__internal_9a348138705e4c4fbb61e19e72a26567556d753b9b67a31a248844dc1eaa4dc7->leave($__internal_9a348138705e4c4fbb61e19e72a26567556d753b9b67a31a248844dc1eaa4dc7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <h2 class=\"ui center aligned icon header\">
        <img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        {{ 'sylius.ui.the_page_you_are_looking_for_does_not_exist'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error404.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/error404.html.twig");
    }
}
