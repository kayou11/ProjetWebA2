<?php

/* @SyliusShop/login.html.twig */
class __TwigTemplate_b3fcc0cb8e4d966a5c2e849faf81139a1a5c4bcb921f18706eb5875db7548342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/login.html.twig", 1);
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
        $__internal_13a149db8d5dc9cddbfbbbe7c4feaa0e33b1b6808d85ba804bb7373ae47a1010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a149db8d5dc9cddbfbbbe7c4feaa0e33b1b6808d85ba804bb7373ae47a1010->enter($__internal_13a149db8d5dc9cddbfbbbe7c4feaa0e33b1b6808d85ba804bb7373ae47a1010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/login.html.twig"));

        $__internal_140962af51d45131376d1c332bebe72b25312e4f4143a1bfb5ac555711592b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140962af51d45131376d1c332bebe72b25312e4f4143a1bfb5ac555711592b4d->enter($__internal_140962af51d45131376d1c332bebe72b25312e4f4143a1bfb5ac555711592b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/login.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 5
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusShop/login.html.twig", 5);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a149db8d5dc9cddbfbbbe7c4feaa0e33b1b6808d85ba804bb7373ae47a1010->leave($__internal_13a149db8d5dc9cddbfbbbe7c4feaa0e33b1b6808d85ba804bb7373ae47a1010_prof);

        
        $__internal_140962af51d45131376d1c332bebe72b25312e4f4143a1bfb5ac555711592b4d->leave($__internal_140962af51d45131376d1c332bebe72b25312e4f4143a1bfb5ac555711592b4d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_787a8ad1c7d12484643f8eb232a259d13adef19dfce723733048962ff390e0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787a8ad1c7d12484643f8eb232a259d13adef19dfce723733048962ff390e0a4->enter($__internal_787a8ad1c7d12484643f8eb232a259d13adef19dfce723733048962ff390e0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0efbaca122e95492880f09136cefc06aed6e88c06e1a62ef1df5b439cbf64dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0efbaca122e95492880f09136cefc06aed6e88c06e1a62ef1df5b439cbf64dd->enter($__internal_d0efbaca122e95492880f09136cefc06aed6e88c06e1a62ef1df5b439cbf64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Login/_header.html.twig", "@SyliusShop/login.html.twig", 8)->display($context);
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
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "@SyliusShop/login.html.twig", 20)->display($context);
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
        $this->loadTemplate("@SyliusShop/Login/_register.html.twig", "@SyliusShop/login.html.twig", 36)->display($context);
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
        
        $__internal_d0efbaca122e95492880f09136cefc06aed6e88c06e1a62ef1df5b439cbf64dd->leave($__internal_d0efbaca122e95492880f09136cefc06aed6e88c06e1a62ef1df5b439cbf64dd_prof);

        
        $__internal_787a8ad1c7d12484643f8eb232a259d13adef19dfce723733048962ff390e0a4->leave($__internal_787a8ad1c7d12484643f8eb232a259d13adef19dfce723733048962ff390e0a4_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/login.html.twig";
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
", "@SyliusShop/login.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/login.html.twig");
    }
}
