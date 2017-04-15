<?php

/* SyliusAdminBundle:Order:show.html.twig */
class __TwigTemplate_1ee48b7d2e769318dac37980965a7f35433b4e2a5a920ee54dbca837ddf094de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:show.html.twig", 1);
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
        $__internal_9c220284cad6835fc3e392256dbbd2366e2d731ac9218b8416fadb1263103a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c220284cad6835fc3e392256dbbd2366e2d731ac9218b8416fadb1263103a97->enter($__internal_9c220284cad6835fc3e392256dbbd2366e2d731ac9218b8416fadb1263103a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        $__internal_15da3dc207b5eb6efe582589454208ad34db6c66594a0d42af8b0d95de284ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15da3dc207b5eb6efe582589454208ad34db6c66594a0d42af8b0d95de284ba4->enter($__internal_15da3dc207b5eb6efe582589454208ad34db6c66594a0d42af8b0d95de284ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        // line 3
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order:show.html.twig", 3);
        // line 7
        $context["customer"] = $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c220284cad6835fc3e392256dbbd2366e2d731ac9218b8416fadb1263103a97->leave($__internal_9c220284cad6835fc3e392256dbbd2366e2d731ac9218b8416fadb1263103a97_prof);

        
        $__internal_15da3dc207b5eb6efe582589454208ad34db6c66594a0d42af8b0d95de284ba4->leave($__internal_15da3dc207b5eb6efe582589454208ad34db6c66594a0d42af8b0d95de284ba4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1e049888d7e4392fd1d71407e64975e58169bec0cee72ffe6d590d6a78ee34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e049888d7e4392fd1d71407e64975e58169bec0cee72ffe6d590d6a78ee34->enter($__internal_6b1e049888d7e4392fd1d71407e64975e58169bec0cee72ffe6d590d6a78ee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96e7d31a3d9d8a0c74f45c02671e454acc2b8d7ed2c3fedb18a3db97812fbaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e7d31a3d9d8a0c74f45c02671e454acc2b8d7ed2c3fedb18a3db97812fbaed->enter($__internal_96e7d31a3d9d8a0c74f45c02671e454acc2b8d7ed2c3fedb18a3db97812fbaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order") . " #") . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array())), "html", null, true);
        
        $__internal_96e7d31a3d9d8a0c74f45c02671e454acc2b8d7ed2c3fedb18a3db97812fbaed->leave($__internal_96e7d31a3d9d8a0c74f45c02671e454acc2b8d7ed2c3fedb18a3db97812fbaed_prof);

        
        $__internal_6b1e049888d7e4392fd1d71407e64975e58169bec0cee72ffe6d590d6a78ee34->leave($__internal_6b1e049888d7e4392fd1d71407e64975e58169bec0cee72ffe6d590d6a78ee34_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_73ef328ca79ed8042196fbceb5c83fddda0e0e939d682029d416bea771ef6ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ef328ca79ed8042196fbceb5c83fddda0e0e939d682029d416bea771ef6ff6->enter($__internal_73ef328ca79ed8042196fbceb5c83fddda0e0e939d682029d416bea771ef6ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f99db0932661ec094ca638faee26f81ca99b1730cd0b5b0c406da1121167c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f99db0932661ec094ca638faee26f81ca99b1730cd0b5b0c406da1121167c9a->enter($__internal_6f99db0932661ec094ca638faee26f81ca99b1730cd0b5b0c406da1121167c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:show.html.twig", 14)->display($context);
        // line 15
        echo "    </div>

    ";
        // line 17
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.order.show", array(), array("order" => ($context["order"] ?? $this->getContext($context, "order"))));
        // line 18
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
</div>

";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 23
        $this->loadTemplate("@SyliusAdmin/Order/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Order:show.html.twig", 23)->display($context);
        // line 24
        echo "
";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_breadcrumb", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_summary", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        <div class=\"ui segment\">
            ";
        // line 32
        $this->loadTemplate("@SyliusAdmin/Order/Show/_summary.html.twig", "SyliusAdminBundle:Order:show.html.twig", 32)->display($context);
        // line 33
        echo "        </div>

        ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_summary", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 37
        $this->loadTemplate("@SyliusAdmin/Order/Show/_notes.html.twig", "SyliusAdminBundle:Order:show.html.twig", 37)->display($context);
        // line 38
        echo "    </div>
    <div class=\"four wide column\">
        ";
        // line 40
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_customer_information", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 42
        $this->loadTemplate("@SyliusAdmin/Order/Show/_customer.html.twig", "SyliusAdminBundle:Order:show.html.twig", 42)->display($context);
        // line 43
        echo "
        ";
        // line 44
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_addresses", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 46
        $this->loadTemplate("@SyliusAdmin/Order/Show/_addresses.html.twig", "SyliusAdminBundle:Order:show.html.twig", 46)->display($context);
        // line 47
        echo "
        ";
        // line 48
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_payments", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 50
        $this->loadTemplate("@SyliusAdmin/Order/Show/_payments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 50)->display($context);
        // line 51
        echo "        ";
        if ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "hasShipments", array())) {
            // line 52
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Order/Show/_shipments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 52)->display($context);
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_shipments", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
    </div>
</div>

";
        // line 59
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_6f99db0932661ec094ca638faee26f81ca99b1730cd0b5b0c406da1121167c9a->leave($__internal_6f99db0932661ec094ca638faee26f81ca99b1730cd0b5b0c406da1121167c9a_prof);

        
        $__internal_73ef328ca79ed8042196fbceb5c83fddda0e0e939d682029d416bea771ef6ff6->leave($__internal_73ef328ca79ed8042196fbceb5c83fddda0e0e939d682029d416bea771ef6ff6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 59,  176 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 51,  162 => 50,  157 => 48,  154 => 47,  152 => 46,  147 => 44,  144 => 43,  142 => 42,  137 => 40,  133 => 38,  131 => 37,  126 => 35,  122 => 33,  120 => 32,  114 => 29,  107 => 25,  104 => 24,  102 => 23,  97 => 21,  90 => 18,  88 => 17,  84 => 15,  82 => 14,  75 => 10,  66 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} {{ 'sylius.ui.order'|trans ~' #'~ order.number }}{% endblock %}

{% set customer = order.customer %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.show.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>

    {% set menu = knp_menu_get('sylius.admin.order.show', [], {'order': order}) %}
    {{ knp_menu_render(menu, {'template': '@SyliusUi/Menu/top.html.twig'}) }}
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Order/Show/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.show.after_breadcrumb', {'resource': resource}) }}

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_summary', {'resource': resource}) }}

        <div class=\"ui segment\">
            {% include '@SyliusAdmin/Order/Show/_summary.html.twig' %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.show.after_summary', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_notes.html.twig' %}
    </div>
    <div class=\"four wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_customer_information', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_customer.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_addresses', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_addresses.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_payments', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_payments.html.twig' %}
        {% if order.hasShipments %}
            {% include '@SyliusAdmin/Order/Show/_shipments.html.twig' %}
        {% endif %}

        {{ sonata_block_render_event('sylius.admin.order.show.after_shipments', {'resource': resource}) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/show.html.twig");
    }
}
