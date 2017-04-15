<?php

/* SyliusAdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_f3be05f2518247a3c5913dd4a263ad460e2c53d337a7613b6e14957b5d486cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 1);
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
        $__internal_8adb6227a998f428f04cb54dc80825c10b02a7655faeadb8cffa0ecf58f72b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adb6227a998f428f04cb54dc80825c10b02a7655faeadb8cffa0ecf58f72b22->enter($__internal_8adb6227a998f428f04cb54dc80825c10b02a7655faeadb8cffa0ecf58f72b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $__internal_02314514b9968850bd261ead1e9b551d7884771f751631eec74e60013de6c12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02314514b9968850bd261ead1e9b551d7884771f751631eec74e60013de6c12f->enter($__internal_02314514b9968850bd261ead1e9b551d7884771f751631eec74e60013de6c12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8adb6227a998f428f04cb54dc80825c10b02a7655faeadb8cffa0ecf58f72b22->leave($__internal_8adb6227a998f428f04cb54dc80825c10b02a7655faeadb8cffa0ecf58f72b22_prof);

        
        $__internal_02314514b9968850bd261ead1e9b551d7884771f751631eec74e60013de6c12f->leave($__internal_02314514b9968850bd261ead1e9b551d7884771f751631eec74e60013de6c12f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e73f4f1bf8af92fe6b69d699dbb7a770f48f1793b8404606fc8299129bc0dbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73f4f1bf8af92fe6b69d699dbb7a770f48f1793b8404606fc8299129bc0dbc1->enter($__internal_e73f4f1bf8af92fe6b69d699dbb7a770f48f1793b8404606fc8299129bc0dbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7751b998b449f0eb1e78dab2b5c0e6ffdd22a7b4e44f048827259cfcbe590ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7751b998b449f0eb1e78dab2b5c0e6ffdd22a7b4e44f048827259cfcbe590ae9->enter($__internal_7751b998b449f0eb1e78dab2b5c0e6ffdd22a7b4e44f048827259cfcbe590ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.dashboard"), "html", null, true);
        
        $__internal_7751b998b449f0eb1e78dab2b5c0e6ffdd22a7b4e44f048827259cfcbe590ae9->leave($__internal_7751b998b449f0eb1e78dab2b5c0e6ffdd22a7b4e44f048827259cfcbe590ae9_prof);

        
        $__internal_e73f4f1bf8af92fe6b69d699dbb7a770f48f1793b8404606fc8299129bc0dbc1->leave($__internal_e73f4f1bf8af92fe6b69d699dbb7a770f48f1793b8404606fc8299129bc0dbc1_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_09f324d8112925fff39475b83f4f40d3c61c8bd4fa52140dd77c5d880b86cc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f324d8112925fff39475b83f4f40d3c61c8bd4fa52140dd77c5d880b86cc8b->enter($__internal_09f324d8112925fff39475b83f4f40d3c61c8bd4fa52140dd77c5d880b86cc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_28e68532ef66ed160bc05e9dc92119c2ed733f0846907093c8d61d946b555974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e68532ef66ed160bc05e9dc92119c2ed733f0846907093c8d61d946b555974->enter($__internal_28e68532ef66ed160bc05e9dc92119c2ed733f0846907093c8d61d946b555974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.before_header", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "

";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Dashboard/_header.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_header", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Dashboard/_menu.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_menu", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Dashboard/_statistics.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_statistics", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_customer_latest", array("count" => 5, "template" => "@SyliusAdmin/Dashboard/_customers.html.twig")));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_order_latest_in_channel", array("channelCode" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "code", array()), "count" => 5, "template" => "@SyliusAdmin/Dashboard/_orders.html.twig")));
        echo "
    </div>
</div>

";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_content", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "
";
        
        $__internal_28e68532ef66ed160bc05e9dc92119c2ed733f0846907093c8d61d946b555974->leave($__internal_28e68532ef66ed160bc05e9dc92119c2ed733f0846907093c8d61d946b555974_prof);

        
        $__internal_09f324d8112925fff39475b83f4f40d3c61c8bd4fa52140dd77c5d880b86cc8b->leave($__internal_09f324d8112925fff39475b83f4f40d3c61c8bd4fa52140dd77c5d880b86cc8b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  115 => 26,  109 => 23,  102 => 19,  99 => 18,  97 => 17,  92 => 15,  89 => 14,  87 => 13,  82 => 11,  79 => 10,  77 => 9,  72 => 7,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}{{ 'sylius.ui.dashboard'|trans }}{% endblock %}

{% block content %}

{{ sonata_block_render_event('sylius.admin.dashboard.before_header', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_header.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_header', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_menu.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_menu', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_statistics.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_statistics', {'channel': channel, 'statistics': statistics}) }}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ render(url('sylius_admin_partial_customer_latest', {'count': 5, 'template': '@SyliusAdmin/Dashboard/_customers.html.twig'})) }}
    </div>
    <div class=\"column\">
        {{ render(path('sylius_admin_partial_order_latest_in_channel', {'channelCode': channel.code, 'count': 5, 'template': '@SyliusAdmin/Dashboard/_orders.html.twig'})) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.dashboard.after_content', {'channel': channel, 'statistics': statistics}) }}
{% endblock %}
", "SyliusAdminBundle:Dashboard:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
