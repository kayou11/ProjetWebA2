<?php

/* SyliusShopBundle:Account:changePassword.html.twig */
class __TwigTemplate_9e8338fa0f73d42605d5f4d8efc54c61bd8444439f2a7e82898a17a07870bc2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:changePassword.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf4fb8555b154195afa209574a24df1d0c4a6ffcb03b13827122ac308e3fe72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf4fb8555b154195afa209574a24df1d0c4a6ffcb03b13827122ac308e3fe72->enter($__internal_4bf4fb8555b154195afa209574a24df1d0c4a6ffcb03b13827122ac308e3fe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:changePassword.html.twig"));

        $__internal_52c98181ed0d1690ffbad869de8b0aba40b09e6e5fe275fde721f20fc284495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c98181ed0d1690ffbad869de8b0aba40b09e6e5fe275fde721f20fc284495b->enter($__internal_52c98181ed0d1690ffbad869de8b0aba40b09e6e5fe275fde721f20fc284495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:changePassword.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf4fb8555b154195afa209574a24df1d0c4a6ffcb03b13827122ac308e3fe72->leave($__internal_4bf4fb8555b154195afa209574a24df1d0c4a6ffcb03b13827122ac308e3fe72_prof);

        
        $__internal_52c98181ed0d1690ffbad869de8b0aba40b09e6e5fe275fde721f20fc284495b->leave($__internal_52c98181ed0d1690ffbad869de8b0aba40b09e6e5fe275fde721f20fc284495b_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_847618c50312c6720ff26f9f6154eb7906d69eaf315daac36f958cae5e1f3739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847618c50312c6720ff26f9f6154eb7906d69eaf315daac36f958cae5e1f3739->enter($__internal_847618c50312c6720ff26f9f6154eb7906d69eaf315daac36f958cae5e1f3739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_bb3e9b9af54c06a8cf953982bf28df5ca46481e395936548551530d8b4ab39df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3e9b9af54c06a8cf953982bf28df5ca46481e395936548551530d8b4ab39df->enter($__internal_bb3e9b9af54c06a8cf953982bf28df5ca46481e395936548551530d8b4ab39df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_bb3e9b9af54c06a8cf953982bf28df5ca46481e395936548551530d8b4ab39df->leave($__internal_bb3e9b9af54c06a8cf953982bf28df5ca46481e395936548551530d8b4ab39df_prof);

        
        $__internal_847618c50312c6720ff26f9f6154eb7906d69eaf315daac36f958cae5e1f3739->leave($__internal_847618c50312c6720ff26f9f6154eb7906d69eaf315daac36f958cae5e1f3739_prof);

    }

    // line 15
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_a91360579d48f0d8e06d2c474e24e6f91ba7a7a410f1ed70967b807240b8dd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91360579d48f0d8e06d2c474e24e6f91ba7a7a410f1ed70967b807240b8dd41->enter($__internal_a91360579d48f0d8e06d2c474e24e6f91ba7a7a410f1ed70967b807240b8dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_aa06378f142c849cfd6d180e253da7ea14043c26ea06d5713207c64ad3c83d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa06378f142c849cfd6d180e253da7ea14043c26ea06d5713207c64ad3c83d7f->enter($__internal_aa06378f142c849cfd6d180e253da7ea14043c26ea06d5713207c64ad3c83d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 16
        echo "    <div class=\"ui segment\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_change_password"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.change_password.after_content_header", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "currentPassword", array()), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newPassword", array()), "second", array()), 'row');
        echo "

        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.change_password.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        <button type=\"submit\" class=\"ui large primary button\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_aa06378f142c849cfd6d180e253da7ea14043c26ea06d5713207c64ad3c83d7f->leave($__internal_aa06378f142c849cfd6d180e253da7ea14043c26ea06d5713207c64ad3c83d7f_prof);

        
        $__internal_a91360579d48f0d8e06d2c474e24e6f91ba7a7a410f1ed70967b807240b8dd41->leave($__internal_a91360579d48f0d8e06d2c474e24e6f91ba7a7a410f1ed70967b807240b8dd41_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  137 => 32,  133 => 31,  128 => 29,  123 => 27,  119 => 26,  115 => 25,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  92 => 16,  83 => 15,  70 => 11,  63 => 9,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.change_password'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        {{ form_start(form, {'action': path('sylius_shop_account_change_password'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.change_password'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.set_a_new_password_for_your_account'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.change_password.after_content_header', {'form': form}) }}

        {{ form_row(form.currentPassword) }}
        {{ form_row(form.newPassword.first) }}
        {{ form_row(form.newPassword.second) }}

        {{ sonata_block_render_event('sylius.shop.account.change_password.form', {'form': form}) }}

        <button type=\"submit\" class=\"ui large primary button\">{{ 'sylius.ui.save_changes'|trans }}</button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account:changePassword.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/changePassword.html.twig");
    }
}
