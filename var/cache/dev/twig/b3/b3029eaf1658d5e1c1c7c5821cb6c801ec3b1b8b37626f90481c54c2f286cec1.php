<?php

/* SyliusShopBundle:Account:resetPassword.html.twig */
class __TwigTemplate_e6dca180a51ff410fd38d03a8db3668a4468fb4cd65a632bef9a82b264b379f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Account:resetPassword.html.twig", 1);
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
        $__internal_375459a7abba9bb89ce89e6bc3da37cd08dbf44777526035b4a523b0cb91cdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375459a7abba9bb89ce89e6bc3da37cd08dbf44777526035b4a523b0cb91cdb6->enter($__internal_375459a7abba9bb89ce89e6bc3da37cd08dbf44777526035b4a523b0cb91cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:resetPassword.html.twig"));

        $__internal_8b85f57ea5fc16f921016123bdc777039580f5f88cc321528d38e86da0df1aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b85f57ea5fc16f921016123bdc777039580f5f88cc321528d38e86da0df1aa0->enter($__internal_8b85f57ea5fc16f921016123bdc777039580f5f88cc321528d38e86da0df1aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:resetPassword.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375459a7abba9bb89ce89e6bc3da37cd08dbf44777526035b4a523b0cb91cdb6->leave($__internal_375459a7abba9bb89ce89e6bc3da37cd08dbf44777526035b4a523b0cb91cdb6_prof);

        
        $__internal_8b85f57ea5fc16f921016123bdc777039580f5f88cc321528d38e86da0df1aa0->leave($__internal_8b85f57ea5fc16f921016123bdc777039580f5f88cc321528d38e86da0df1aa0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5dc99c195807620b331c7fb36cb204abe5afde12b4f3591716b1fe3431635ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc99c195807620b331c7fb36cb204abe5afde12b4f3591716b1fe3431635ad1->enter($__internal_5dc99c195807620b331c7fb36cb204abe5afde12b4f3591716b1fe3431635ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_431595804d9507f2cfc4b6e026ef03c4740466951c2f780a5facb047cf6aa1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431595804d9507f2cfc4b6e026ef03c4740466951c2f780a5facb047cf6aa1ed->enter($__internal_431595804d9507f2cfc4b6e026ef03c4740466951c2f780a5facb047cf6aa1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            </h1>
            <div class=\"ui segment\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_password_reset", array("token" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "passwordResetToken", array()))), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.form.user_reset_password.new")));
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.form.user_reset_password.confirmation")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset"), "html", null, true);
        echo "</button>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_431595804d9507f2cfc4b6e026ef03c4740466951c2f780a5facb047cf6aa1ed->leave($__internal_431595804d9507f2cfc4b6e026ef03c4740466951c2f780a5facb047cf6aa1ed_prof);

        
        $__internal_5dc99c195807620b331c7fb36cb204abe5afde12b4f3591716b1fe3431635ad1->leave($__internal_5dc99c195807620b331c7fb36cb204abe5afde12b4f3591716b1fe3431635ad1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_password_reset', {'token' : user.passwordResetToken}), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.password.first, {'label': 'sylius.form.user_reset_password.new'|trans}) }}
                {{ form_row(form.password.second, {'label': 'sylius.form.user_reset_password.confirmation'|trans}) }}
                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.reset'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Account:resetPassword.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/resetPassword.html.twig");
    }
}
