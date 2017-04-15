<?php

/* @SyliusShop/Checkout/layout.html.twig */
class __TwigTemplate_c2ecbc21728accd2902a40d92e51450aae2c6a15203ea1c3276a85f4b0209bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Checkout/layout.html.twig", 1);
        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b6c15ea8bf1db5d370523173e746bed8f2d6820216967783817119346659656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6c15ea8bf1db5d370523173e746bed8f2d6820216967783817119346659656->enter($__internal_9b6c15ea8bf1db5d370523173e746bed8f2d6820216967783817119346659656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/layout.html.twig"));

        $__internal_7248198136ffbfe5d72194fcd9f4715a276dffb159d2fc1e72f9f3e73106b98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7248198136ffbfe5d72194fcd9f4715a276dffb159d2fc1e72f9f3e73106b98e->enter($__internal_7248198136ffbfe5d72194fcd9f4715a276dffb159d2fc1e72f9f3e73106b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6c15ea8bf1db5d370523173e746bed8f2d6820216967783817119346659656->leave($__internal_9b6c15ea8bf1db5d370523173e746bed8f2d6820216967783817119346659656_prof);

        
        $__internal_7248198136ffbfe5d72194fcd9f4715a276dffb159d2fc1e72f9f3e73106b98e->leave($__internal_7248198136ffbfe5d72194fcd9f4715a276dffb159d2fc1e72f9f3e73106b98e_prof);

    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        $__internal_0d9e2879c7547e3cd146f887f7d4131069b17f39f9348139fd994fc2a3ef941f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9e2879c7547e3cd146f887f7d4131069b17f39f9348139fd994fc2a3ef941f->enter($__internal_0d9e2879c7547e3cd146f887f7d4131069b17f39f9348139fd994fc2a3ef941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_df21f365288158f1981e541254eff292075d6bedcc79936f27e5272e2dc87cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df21f365288158f1981e541254eff292075d6bedcc79936f27e5272e2dc87cfa->enter($__internal_df21f365288158f1981e541254eff292075d6bedcc79936f27e5272e2dc87cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 4
        echo "    ";
        
        $__internal_df21f365288158f1981e541254eff292075d6bedcc79936f27e5272e2dc87cfa->leave($__internal_df21f365288158f1981e541254eff292075d6bedcc79936f27e5272e2dc87cfa_prof);

        
        $__internal_0d9e2879c7547e3cd146f887f7d4131069b17f39f9348139fd994fc2a3ef941f->leave($__internal_0d9e2879c7547e3cd146f887f7d4131069b17f39f9348139fd994fc2a3ef941f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_26b5f88f482fac8608bb4c608bfe5f8a771c31bbe8b92033a6f5dfd20c10fa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b5f88f482fac8608bb4c608bfe5f8a771c31bbe8b92033a6f5dfd20c10fa20->enter($__internal_26b5f88f482fac8608bb4c608bfe5f8a771c31bbe8b92033a6f5dfd20c10fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_074b9da05528e1c1cbb075bda378cc375b13700b9020986300141a5e7c749302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074b9da05528e1c1cbb075bda378cc375b13700b9020986300141a5e7c749302->enter($__internal_074b9da05528e1c1cbb075bda378cc375b13700b9020986300141a5e7c749302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_header", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

    ";
        // line 11
        $this->loadTemplate("@SyliusShop/Checkout/_header.html.twig", "@SyliusShop/Checkout/layout.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_header", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
";
        
        $__internal_074b9da05528e1c1cbb075bda378cc375b13700b9020986300141a5e7c749302->leave($__internal_074b9da05528e1c1cbb075bda378cc375b13700b9020986300141a5e7c749302_prof);

        
        $__internal_26b5f88f482fac8608bb4c608bfe5f8a771c31bbe8b92033a6f5dfd20c10fa20->leave($__internal_26b5f88f482fac8608bb4c608bfe5f8a771c31bbe8b92033a6f5dfd20c10fa20_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  79 => 12,  77 => 11,  71 => 9,  69 => 8,  60 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block top %}
    {# Clear the topmost section. We do not want it in the checkout.  #}
{% endblock %}

{% block header %}
    {# Override the normal page header with a custom one for all checkout steps. #}
    {{ sonata_block_render_event('sylius.shop.checkout.address.before_header', {'order': order}) }}

    {% include '@SyliusShop/Checkout/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.after_header', {'order': order}) }}
{% endblock %}
", "@SyliusShop/Checkout/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/layout.html.twig");
    }
}
