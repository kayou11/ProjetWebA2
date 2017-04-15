<?php

/* SyliusShopBundle:Checkout:complete.html.twig */
class __TwigTemplate_14eba150451a2f5aff208fef7365b8dbc2abeb61fd817a291d900edf11ead952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e19cadc7ceecc10b95afaabf79d275cfc6a3413fc591f1ed9779346effeffd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e19cadc7ceecc10b95afaabf79d275cfc6a3413fc591f1ed9779346effeffd8->enter($__internal_1e19cadc7ceecc10b95afaabf79d275cfc6a3413fc591f1ed9779346effeffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        $__internal_39a5062c577b4a5f0b306fdae412d108be913d6e14567619d71b8eea94a08843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a5062c577b4a5f0b306fdae412d108be913d6e14567619d71b8eea94a08843->enter($__internal_39a5062c577b4a5f0b306fdae412d108be913d6e14567619d71b8eea94a08843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e19cadc7ceecc10b95afaabf79d275cfc6a3413fc591f1ed9779346effeffd8->leave($__internal_1e19cadc7ceecc10b95afaabf79d275cfc6a3413fc591f1ed9779346effeffd8_prof);

        
        $__internal_39a5062c577b4a5f0b306fdae412d108be913d6e14567619d71b8eea94a08843->leave($__internal_39a5062c577b4a5f0b306fdae412d108be913d6e14567619d71b8eea94a08843_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_df3d3f0310666dd6ea505b3ba792d3906246d72ae4b3f69e7cd658db625e143e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3d3f0310666dd6ea505b3ba792d3906246d72ae4b3f69e7cd658db625e143e->enter($__internal_df3d3f0310666dd6ea505b3ba792d3906246d72ae4b3f69e7cd658db625e143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cde430b184259ada897b82d3c7bc042ba6e084cac6f4afc36ee851586e9a2537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde430b184259ada897b82d3c7bc042ba6e084cac6f4afc36ee851586e9a2537->enter($__internal_cde430b184259ada897b82d3c7bc042ba6e084cac6f4afc36ee851586e9a2537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 6)->display(array_merge($context, array("active" => "complete", "orderTotal" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "total", array()))));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_steps", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_header.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_content_header", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

        ";
        // line 15
        $this->loadTemplate("SyliusUiBundle::_flashes.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 15)->display($context);
        // line 16
        echo "
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_complete"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_summary", array("order" => ($context["order"] ?? $this->getContext($context, "order")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

            ";
        // line 23
        $this->loadTemplate("SyliusShopBundle:Common/Order:_summary.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 23)->display($context);
        // line 24
        echo "
            ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_summary", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            <div class=\"ui hidden divider\"></div>
            ";
        // line 28
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_form.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 28)->display($context);
        // line 29
        echo "
            ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_navigation", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 32
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_navigation.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 32)->display($context);
        // line 33
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_cde430b184259ada897b82d3c7bc042ba6e084cac6f4afc36ee851586e9a2537->leave($__internal_cde430b184259ada897b82d3c7bc042ba6e084cac6f4afc36ee851586e9a2537_prof);

        
        $__internal_df3d3f0310666dd6ea505b3ba792d3906246d72ae4b3f69e7cd658db625e143e->leave($__internal_df3d3f0310666dd6ea505b3ba792d3906246d72ae4b3f69e7cd658db625e143e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  120 => 34,  117 => 33,  115 => 32,  110 => 30,  107 => 29,  105 => 28,  99 => 25,  96 => 24,  94 => 23,  89 => 21,  83 => 18,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  66 => 12,  64 => 11,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'complete', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.complete.after_steps', {'order': order}) }}

    <div class=\"ui padded segment\">
        {% include '@SyliusShop/Checkout/Complete/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.checkout.complete.after_content_header', {'order': order}) }}

        {% include 'SyliusUiBundle::_flashes.html.twig' %}

        {{ form_start(form, {'action': path('sylius_shop_checkout_complete'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {{ form_errors(form) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_summary', {'order': order, 'form': form}) }}

            {% include 'SyliusShopBundle:Common/Order:_summary.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.after_summary', {'order': order}) }}

            <div class=\"ui hidden divider\"></div>
            {% include '@SyliusShop/Checkout/Complete/_form.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_navigation', {'order': order}) }}

            {% include '@SyliusShop/Checkout/Complete/_navigation.html.twig' %}

            {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:complete.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/complete.html.twig");
    }
}
