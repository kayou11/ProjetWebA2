<?php

/* SyliusShopBundle:Account:requestPasswordReset.html.twig */
class __TwigTemplate_dda6d5d56c93e32608c069d8d60e09b594abc5adef76ce2d240e49cf9ebfca40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Account:requestPasswordReset.html.twig", 1);
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
        $__internal_1c3244e00ad5343f6948a9caed97817f233acf4f3d52bd013e2fd6283cfab9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3244e00ad5343f6948a9caed97817f233acf4f3d52bd013e2fd6283cfab9c4->enter($__internal_1c3244e00ad5343f6948a9caed97817f233acf4f3d52bd013e2fd6283cfab9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:requestPasswordReset.html.twig"));

        $__internal_b197115343e446b7e7a29da5239fb8c3f25a848fb33e37f83808e19720eb5863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b197115343e446b7e7a29da5239fb8c3f25a848fb33e37f83808e19720eb5863->enter($__internal_b197115343e446b7e7a29da5239fb8c3f25a848fb33e37f83808e19720eb5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:requestPasswordReset.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3244e00ad5343f6948a9caed97817f233acf4f3d52bd013e2fd6283cfab9c4->leave($__internal_1c3244e00ad5343f6948a9caed97817f233acf4f3d52bd013e2fd6283cfab9c4_prof);

        
        $__internal_b197115343e446b7e7a29da5239fb8c3f25a848fb33e37f83808e19720eb5863->leave($__internal_b197115343e446b7e7a29da5239fb8c3f25a848fb33e37f83808e19720eb5863_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_45900adcf5687b3e8eb145cb0603d26d267d04d94f40b272d9d2185aefcc8289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45900adcf5687b3e8eb145cb0603d26d267d04d94f40b272d9d2185aefcc8289->enter($__internal_45900adcf5687b3e8eb145cb0603d26d267d04d94f40b272d9d2185aefcc8289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a209e0a162079a4449ebcc903e3cdc84e6061265f9cbaa92632b3c7da22e1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a209e0a162079a4449ebcc903e3cdc84e6061265f9cbaa92632b3c7da22e1e1->enter($__internal_2a209e0a162079a4449ebcc903e3cdc84e6061265f9cbaa92632b3c7da22e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui three column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular lock icon\"></i>
                <div class=\"content\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset_password"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
                </div>

                ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.request_password_reset_token.after_content_header"));
        echo "
            </h1>
            <div class=\"ui segment\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_request_password_reset_token"), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "

                ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.request_password_reset_token.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset"), "html", null, true);
        echo "</button>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2a209e0a162079a4449ebcc903e3cdc84e6061265f9cbaa92632b3c7da22e1e1->leave($__internal_2a209e0a162079a4449ebcc903e3cdc84e6061265f9cbaa92632b3c7da22e1e1_prof);

        
        $__internal_45900adcf5687b3e8eb145cb0603d26d267d04d94f40b272d9d2185aefcc8289->leave($__internal_45900adcf5687b3e8eb145cb0603d26d267d04d94f40b272d9d2185aefcc8289_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:requestPasswordReset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  94 => 25,  90 => 24,  85 => 22,  80 => 20,  76 => 19,  70 => 16,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui three column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular lock icon\"></i>
                <div class=\"content\">
                    {{ 'sylius.ui.reset_password'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.set_a_new_password_for_your_account'|trans }}</div>
                </div>

                {{ sonata_block_render_event('sylius.shop.request_password_reset_token.after_content_header') }}
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_request_password_reset_token'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.email) }}

                {{ sonata_block_render_event('sylius.shop.request_password_reset_token.form', {'form': form}) }}

                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.reset'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Account:requestPasswordReset.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/requestPasswordReset.html.twig");
    }
}
