<?php

/* SyliusShopBundle::login.html.twig */
class __TwigTemplate_7c7c65869e39e08886a775d04fccc498b56fa6b2e28b5951fdb87578c607521b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::login.html.twig", 1);
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
        $__internal_cbb6b576627f0731e6560032e0ca9997959775420bb820a144331627f0fd655a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb6b576627f0731e6560032e0ca9997959775420bb820a144331627f0fd655a->enter($__internal_cbb6b576627f0731e6560032e0ca9997959775420bb820a144331627f0fd655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::login.html.twig"));

        $__internal_4171642f6895de2d29a7b4e38637c93756509df4ced02e270faef85be87a945f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4171642f6895de2d29a7b4e38637c93756509df4ced02e270faef85be87a945f->enter($__internal_4171642f6895de2d29a7b4e38637c93756509df4ced02e270faef85be87a945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::login.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 5
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "SyliusShopBundle::login.html.twig", 5);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb6b576627f0731e6560032e0ca9997959775420bb820a144331627f0fd655a->leave($__internal_cbb6b576627f0731e6560032e0ca9997959775420bb820a144331627f0fd655a_prof);

        
        $__internal_4171642f6895de2d29a7b4e38637c93756509df4ced02e270faef85be87a945f->leave($__internal_4171642f6895de2d29a7b4e38637c93756509df4ced02e270faef85be87a945f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_46db72df134ba0fdff5fed45b730f8b5157971a0eb3f6ee5b8f9f73b2079ca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46db72df134ba0fdff5fed45b730f8b5157971a0eb3f6ee5b8f9f73b2079ca22->enter($__internal_46db72df134ba0fdff5fed45b730f8b5157971a0eb3f6ee5b8f9f73b2079ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a23920418d828109dc0fffddd7e73984a6395ae9b8d3f9e9b3ffd82ffe36b1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23920418d828109dc0fffddd7e73984a6395ae9b8d3f9e9b3ffd82ffe36b1ec->enter($__internal_a23920418d828109dc0fffddd7e73984a6395ae9b8d3f9e9b3ffd82ffe36b1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Login/_header.html.twig", "SyliusShopBundle::login.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_content_header"));
        echo "

    <div class=\"ui padded segment\">
        <div class=\"ui two column very relaxed stackable grid\">
            <div class=\"column\">
                ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_login"));
        echo "

                <h4 class=\"ui dividing header\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.registered_customers"), "html", null, true);
        echo "</h4>
                <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        echo ".</p>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login_check"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 20
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "SyliusShopBundle::login.html.twig", 20)->display($context);
        // line 21
        echo "
                    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

                    <button type=\"submit\" class=\"ui blue submit button\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.login"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_request_password_reset_token");
        echo "\" class=\"ui right floated button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.forgot_password"), "html", null, true);
        echo "</a>
                    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

                ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_login"));
        echo "
            </div>
            <div class=\"ui hidden vertical divider\">
            </div>
            <div class=\"column\">
                ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_register"));
        echo "

                ";
        // line 36
        $this->loadTemplate("@SyliusShop/Login/_register.html.twig", "SyliusShopBundle::login.html.twig", 36)->display($context);
        // line 37
        echo "
                ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_register"));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a23920418d828109dc0fffddd7e73984a6395ae9b8d3f9e9b3ffd82ffe36b1ec->leave($__internal_a23920418d828109dc0fffddd7e73984a6395ae9b8d3f9e9b3ffd82ffe36b1ec_prof);

        
        $__internal_46db72df134ba0fdff5fed45b730f8b5157971a0eb3f6ee5b8f9f73b2079ca22->leave($__internal_46db72df134ba0fdff5fed45b730f8b5157971a0eb3f6ee5b8f9f73b2079ca22_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  129 => 37,  127 => 36,  122 => 34,  114 => 29,  109 => 27,  105 => 26,  99 => 25,  95 => 24,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  68 => 15,  60 => 10,  57 => 9,  54 => 8,  45 => 7,  35 => 1,  33 => 5,  31 => 3,  11 => 1,);
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

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}

{% block content %}
    {% include '@SyliusShop/Login/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.login.after_content_header') }}

    <div class=\"ui padded segment\">
        <div class=\"ui two column very relaxed stackable grid\">
            <div class=\"column\">
                {{ sonata_block_render_event('sylius.shop.login.before_login') }}

                <h4 class=\"ui dividing header\">{{ 'sylius.ui.registered_customers'|trans }}</h4>
                <p>{{ 'sylius.ui.if_you_have_an_account_sign_in_with_your_email_address'|trans }}.</p>
                {{ form_start(form, {'action': path('sylius_shop_login_check'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {% include '@SyliusShop/Login/_form.html.twig' %}

                    {{ sonata_block_render_event('sylius.shop.login.form', {'form': form}) }}

                    <button type=\"submit\" class=\"ui blue submit button\">{{ 'sylius.ui.login'|trans }}</button>
                    <a href=\"{{ path('sylius_shop_request_password_reset_token') }}\" class=\"ui right floated button\">{{ 'sylius.ui.forgot_password'|trans }}</a>
                    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
                {{ form_end(form, {'render_rest': false}) }}

                {{ sonata_block_render_event('sylius.shop.login.after_login') }}
            </div>
            <div class=\"ui hidden vertical divider\">
            </div>
            <div class=\"column\">
                {{ sonata_block_render_event('sylius.shop.login.before_register') }}

                {% include '@SyliusShop/Login/_register.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.login.after_register') }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle::login.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/login.html.twig");
    }
}
