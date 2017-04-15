<?php

/* SyliusShopBundle:Account:profileUpdate.html.twig */
class __TwigTemplate_55eb6559903eb2b87029fa12601acf4faf8acfc6a0d8d4a2b061af754d3337d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:profileUpdate.html.twig", 1);
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
        $__internal_d51cebb9807f8fd299af129961ff5d4b5f867d2a7242adc7de955e594e58674b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51cebb9807f8fd299af129961ff5d4b5f867d2a7242adc7de955e594e58674b->enter($__internal_d51cebb9807f8fd299af129961ff5d4b5f867d2a7242adc7de955e594e58674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:profileUpdate.html.twig"));

        $__internal_b687623ddcea98b4990dc54f50dab2153d6ef0ed2d7ab02400f61282ae4145ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b687623ddcea98b4990dc54f50dab2153d6ef0ed2d7ab02400f61282ae4145ab->enter($__internal_b687623ddcea98b4990dc54f50dab2153d6ef0ed2d7ab02400f61282ae4145ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:profileUpdate.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51cebb9807f8fd299af129961ff5d4b5f867d2a7242adc7de955e594e58674b->leave($__internal_d51cebb9807f8fd299af129961ff5d4b5f867d2a7242adc7de955e594e58674b_prof);

        
        $__internal_b687623ddcea98b4990dc54f50dab2153d6ef0ed2d7ab02400f61282ae4145ab->leave($__internal_b687623ddcea98b4990dc54f50dab2153d6ef0ed2d7ab02400f61282ae4145ab_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_04c15c5b0bdfc48d25494195a2e7c6ba8e3f7974f00c8f4e654c1a09fd9a14ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c15c5b0bdfc48d25494195a2e7c6ba8e3f7974f00c8f4e654c1a09fd9a14ed->enter($__internal_04c15c5b0bdfc48d25494195a2e7c6ba8e3f7974f00c8f4e654c1a09fd9a14ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0ecdf42bdfac5d14a97926df07f986c7f93127f21d7a33c1a7718a3a4ef24d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecdf42bdfac5d14a97926df07f986c7f93127f21d7a33c1a7718a3a4ef24d94->enter($__internal_0ecdf42bdfac5d14a97926df07f986c7f93127f21d7a33c1a7718a3a4ef24d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_0ecdf42bdfac5d14a97926df07f986c7f93127f21d7a33c1a7718a3a4ef24d94->leave($__internal_0ecdf42bdfac5d14a97926df07f986c7f93127f21d7a33c1a7718a3a4ef24d94_prof);

        
        $__internal_04c15c5b0bdfc48d25494195a2e7c6ba8e3f7974f00c8f4e654c1a09fd9a14ed->leave($__internal_04c15c5b0bdfc48d25494195a2e7c6ba8e3f7974f00c8f4e654c1a09fd9a14ed_prof);

    }

    // line 15
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_4ac5e30ecd60849bf84cf79986ddccdb5349b43e46a470fa8666bc1bd0850fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac5e30ecd60849bf84cf79986ddccdb5349b43e46a470fa8666bc1bd0850fa6->enter($__internal_4ac5e30ecd60849bf84cf79986ddccdb5349b43e46a470fa8666bc1bd0850fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_667fd1668ed32d1cdca4c4bf2b97e1583ecfa356adce39b9747a2826e615f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667fd1668ed32d1cdca4c4bf2b97e1583ecfa356adce39b9747a2826e615f81b->enter($__internal_667fd1668ed32d1cdca4c4bf2b97e1583ecfa356adce39b9747a2826e615f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 16
        echo "    <div class=\"ui segment\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_profile_update"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_profile"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_your_personal_information"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.profile.update.after_content_header", array("customer" => ($context["customer"] ?? $this->getContext($context, "customer")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"two fields\">
            <div class=\"field\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "</div>
            <div class=\"field\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "</div>
        </div>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        <div class=\"two fields\">
            <div class=\"field\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'row');
        echo "</div>
            <div class=\"field\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'row');
        echo "</div>
        </div>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subscribedToNewsletter", array()), 'row');
        echo "

        ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.profile.update.form", array("customer" => ($context["customer"] ?? $this->getContext($context, "customer")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        <button type=\"submit\" class=\"ui large primary button\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_667fd1668ed32d1cdca4c4bf2b97e1583ecfa356adce39b9747a2826e615f81b->leave($__internal_667fd1668ed32d1cdca4c4bf2b97e1583ecfa356adce39b9747a2826e615f81b_prof);

        
        $__internal_4ac5e30ecd60849bf84cf79986ddccdb5349b43e46a470fa8666bc1bd0850fa6->leave($__internal_4ac5e30ecd60849bf84cf79986ddccdb5349b43e46a470fa8666bc1bd0850fa6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:profileUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  159 => 42,  155 => 41,  150 => 39,  145 => 37,  141 => 36,  136 => 34,  132 => 33,  127 => 31,  122 => 29,  118 => 28,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  92 => 16,  83 => 15,  70 => 11,  63 => 9,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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
        <div class=\"active section\">{{ 'sylius.ui.personal_information'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        {{ form_start(form, {'action': path('sylius_shop_account_profile_update'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.your_profile'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_your_personal_information'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.profile.update.after_content_header', {'customer': customer, 'form': form}) }}

        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"two fields\">
            <div class=\"field\">{{ form_row(form.firstName) }}</div>
            <div class=\"field\">{{ form_row(form.lastName) }}</div>
        </div>
        {{ form_row(form.email) }}
        <div class=\"two fields\">
            <div class=\"field\">{{ form_row(form.birthday) }}</div>
            <div class=\"field\">{{ form_row(form.gender) }}</div>
        </div>
        {{ form_row(form.phoneNumber) }}
        {{ form_row(form.subscribedToNewsletter) }}

        {{ sonata_block_render_event('sylius.shop.account.profile.update.form', {'customer': customer, 'form': form}) }}

        <button type=\"submit\" class=\"ui large primary button\">{{ 'sylius.ui.save_changes'|trans }}</button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account:profileUpdate.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/profileUpdate.html.twig");
    }
}
