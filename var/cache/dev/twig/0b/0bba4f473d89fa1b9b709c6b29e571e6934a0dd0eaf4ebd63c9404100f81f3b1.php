<?php

/* SyliusAdminBundle:Customer:show.html.twig */
class __TwigTemplate_f046c9de13b406ea50adfad4a1695e449140d06b534bb08885cc7a2bda980452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ecc085c068302c949df6e7624bb9b5ace9013ae28cdc5b80f2b903cc8072c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ecc085c068302c949df6e7624bb9b5ace9013ae28cdc5b80f2b903cc8072c7->enter($__internal_c0ecc085c068302c949df6e7624bb9b5ace9013ae28cdc5b80f2b903cc8072c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:show.html.twig"));

        $__internal_71fa9c33451d4be59ed72a790a92158ae07bfb262cbd801872fe39c72ef28394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fa9c33451d4be59ed72a790a92158ae07bfb262cbd801872fe39c72ef28394->enter($__internal_71fa9c33451d4be59ed72a790a92158ae07bfb262cbd801872fe39c72ef28394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:show.html.twig"));

        // line 3
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 4);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ecc085c068302c949df6e7624bb9b5ace9013ae28cdc5b80f2b903cc8072c7->leave($__internal_c0ecc085c068302c949df6e7624bb9b5ace9013ae28cdc5b80f2b903cc8072c7_prof);

        
        $__internal_71fa9c33451d4be59ed72a790a92158ae07bfb262cbd801872fe39c72ef28394->leave($__internal_71fa9c33451d4be59ed72a790a92158ae07bfb262cbd801872fe39c72ef28394_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2959e6b57d2657310834768e3f3ffbbe8a53a1a1dc1758f0e695d6ec6099bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2959e6b57d2657310834768e3f3ffbbe8a53a1a1dc1758f0e695d6ec6099bd->enter($__internal_aa2959e6b57d2657310834768e3f3ffbbe8a53a1a1dc1758f0e695d6ec6099bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cda87d79ebc5c953c13c13c8fc802e35a44d2e93b700464192371245bcb478c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cda87d79ebc5c953c13c13c8fc802e35a44d2e93b700464192371245bcb478c->enter($__internal_5cda87d79ebc5c953c13c13c8fc802e35a44d2e93b700464192371245bcb478c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer") . " ") . $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array())), "html", null, true);
        
        $__internal_5cda87d79ebc5c953c13c13c8fc802e35a44d2e93b700464192371245bcb478c->leave($__internal_5cda87d79ebc5c953c13c13c8fc802e35a44d2e93b700464192371245bcb478c_prof);

        
        $__internal_aa2959e6b57d2657310834768e3f3ffbbe8a53a1a1dc1758f0e695d6ec6099bd->leave($__internal_aa2959e6b57d2657310834768e3f3ffbbe8a53a1a1dc1758f0e695d6ec6099bd_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f80e0b7986e2a911d5b64adbd7b96cccc185344b5dbc10e08c28f6ae50992796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80e0b7986e2a911d5b64adbd7b96cccc185344b5dbc10e08c28f6ae50992796->enter($__internal_f80e0b7986e2a911d5b64adbd7b96cccc185344b5dbc10e08c28f6ae50992796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f895d152904057af4fbfee770d08219af1e23a5a13d4efb562cd2625c15c1cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f895d152904057af4fbfee770d08219af1e23a5a13d4efb562cd2625c15c1cd3->enter($__internal_f895d152904057af4fbfee770d08219af1e23a5a13d4efb562cd2625c15c1cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_header.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 16
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.customer.show", array(), array("customer" => ($context["customer"] ?? $this->getContext($context, "customer"))));
        // line 17
        echo "        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <div class=\"ui divider\"></div>
    ";
        // line 23
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 23)->display($context);
        // line 24
        echo "
    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_breadcrumb", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_orders_statistics", array("customerId" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))));
        echo "

    ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_statistics", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <div class=\"ui stackable grid\">
        ";
        // line 32
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_content.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 32)->display($context);
        // line 33
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_address.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 33)->display($context);
        // line 34
        echo "    </div>

    ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_f895d152904057af4fbfee770d08219af1e23a5a13d4efb562cd2625c15c1cd3->leave($__internal_f895d152904057af4fbfee770d08219af1e23a5a13d4efb562cd2625c15c1cd3_prof);

        
        $__internal_f80e0b7986e2a911d5b64adbd7b96cccc185344b5dbc10e08c28f6ae50992796->leave($__internal_f80e0b7986e2a911d5b64adbd7b96cccc185344b5dbc10e08c28f6ae50992796_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  133 => 34,  130 => 33,  128 => 32,  122 => 29,  117 => 27,  112 => 25,  109 => 24,  107 => 23,  101 => 20,  94 => 17,  92 => 16,  87 => 14,  84 => 13,  82 => 12,  75 => 9,  66 => 8,  46 => 6,  36 => 1,  34 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% block title %}{{ parent() }} {{ 'sylius.ui.customer'|trans ~' '~ customer.email }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.customer.show.before_header', {'resource': resource}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/Customer/Show/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.customer.show.header', {'resource': resource}) }}

        {% set menu = knp_menu_get('sylius.admin.customer.show', [], {'customer': customer}) %}
        {{ knp_menu_render(menu, {'template': '@SyliusUi/Menu/top.html.twig'}) }}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_header', {'resource': resource}) }}

    <div class=\"ui divider\"></div>
    {% include '@SyliusAdmin/Customer/Show/_breadcrumb.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.customer.show.after_breadcrumb', {'resource': resource}) }}

    {{ render(path('sylius_admin_customer_orders_statistics', {'customerId': customer.id})) }}

    {{ sonata_block_render_event('sylius.admin.customer.show.after_statistics', {'resource': resource}) }}

    <div class=\"ui stackable grid\">
        {% include '@SyliusAdmin/Customer/Show/_content.html.twig' %}
        {% include '@SyliusAdmin/Customer/Show/_address.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Customer:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/show.html.twig");
    }
}
