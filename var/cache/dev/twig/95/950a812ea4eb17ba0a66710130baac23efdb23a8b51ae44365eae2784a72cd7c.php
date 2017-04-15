<?php

/* SyliusAdminBundle:Order:history.html.twig */
class __TwigTemplate_1064ca2ff7e02883d03812920e2b931dc2369e2408a7ac2f7b2b454c326266ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:history.html.twig", 1);
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
        $__internal_00d822d7a9d7314f9e217011dcdf77a9f069fc16e5d31795a1845e8a1dd7835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d822d7a9d7314f9e217011dcdf77a9f069fc16e5d31795a1845e8a1dd7835d->enter($__internal_00d822d7a9d7314f9e217011dcdf77a9f069fc16e5d31795a1845e8a1dd7835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:history.html.twig"));

        $__internal_76bda3f4ae50b971137b8baa0b0b3f0cb9006bab56919b9db781988d094f0de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bda3f4ae50b971137b8baa0b0b3f0cb9006bab56919b9db781988d094f0de5->enter($__internal_76bda3f4ae50b971137b8baa0b0b3f0cb9006bab56919b9db781988d094f0de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:history.html.twig"));

        // line 3
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order:history.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d822d7a9d7314f9e217011dcdf77a9f069fc16e5d31795a1845e8a1dd7835d->leave($__internal_00d822d7a9d7314f9e217011dcdf77a9f069fc16e5d31795a1845e8a1dd7835d_prof);

        
        $__internal_76bda3f4ae50b971137b8baa0b0b3f0cb9006bab56919b9db781988d094f0de5->leave($__internal_76bda3f4ae50b971137b8baa0b0b3f0cb9006bab56919b9db781988d094f0de5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12026a013ef42759bd32bda5f688e0913d864234536dbeb32ea086a85c9c0e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12026a013ef42759bd32bda5f688e0913d864234536dbeb32ea086a85c9c0e5f->enter($__internal_12026a013ef42759bd32bda5f688e0913d864234536dbeb32ea086a85c9c0e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3180f2c7d249a65213bbb655728c9d3444c6f224e4e4cedb27c8e2b5e68523a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3180f2c7d249a65213bbb655728c9d3444c6f224e4e4cedb27c8e2b5e68523a1->enter($__internal_3180f2c7d249a65213bbb655728c9d3444c6f224e4e4cedb27c8e2b5e68523a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        
        $__internal_3180f2c7d249a65213bbb655728c9d3444c6f224e4e4cedb27c8e2b5e68523a1->leave($__internal_3180f2c7d249a65213bbb655728c9d3444c6f224e4e4cedb27c8e2b5e68523a1_prof);

        
        $__internal_12026a013ef42759bd32bda5f688e0913d864234536dbeb32ea086a85c9c0e5f->leave($__internal_12026a013ef42759bd32bda5f688e0913d864234536dbeb32ea086a85c9c0e5f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5b31d2a2558c13ecce2b83026346630321d279dd26545415ebeab3f3b2399f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b31d2a2558c13ecce2b83026346630321d279dd26545415ebeab3f3b2399f7->enter($__internal_b5b31d2a2558c13ecce2b83026346630321d279dd26545415ebeab3f3b2399f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_62b117e4b3323aa7a34385f55ea28838a36333172fd3582a179ede65e8b3be86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b117e4b3323aa7a34385f55ea28838a36333172fd3582a179ede65e8b3be86->enter($__internal_62b117e4b3323aa7a34385f55ea28838a36333172fd3582a179ede65e8b3be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.before_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Order/History/_header.html.twig", "SyliusAdminBundle:Order:history.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Order/History/_actions.html.twig", "SyliusAdminBundle:Order:history.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
</div>

";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Order/History/_breadcrumb.html.twig", "SyliusAdminBundle:Order:history.html.twig", 21)->display($context);
        // line 22
        echo "
";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_breadcrumb", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

<div class=\"ui one column grid\">
    <div class=\"column\">
        ";
        // line 27
        $this->loadTemplate("@SyliusAdmin/Order/History/_addresses.html.twig", "SyliusAdminBundle:Order:history.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
</div>

";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_62b117e4b3323aa7a34385f55ea28838a36333172fd3582a179ede65e8b3be86->leave($__internal_62b117e4b3323aa7a34385f55ea28838a36333172fd3582a179ede65e8b3be86_prof);

        
        $__internal_b5b31d2a2558c13ecce2b83026346630321d279dd26545415ebeab3f3b2399f7->leave($__internal_b5b31d2a2558c13ecce2b83026346630321d279dd26545415ebeab3f3b2399f7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 28,  114 => 27,  107 => 23,  104 => 22,  102 => 21,  97 => 19,  92 => 16,  90 => 15,  86 => 13,  84 => 12,  77 => 8,  68 => 7,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} {{ 'sylius.ui.order'|trans }} #{{ order.number }} - {{ 'sylius.ui.order_history'|trans }}{% endblock %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.history.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        {% include '@SyliusAdmin/Order/History/_header.html.twig' %}
    </div>
    <div class=\"four wide right aligned column\">
        {% include '@SyliusAdmin/Order/History/_actions.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.history.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Order/History/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.history.after_breadcrumb', {'resource': resource}) }}

<div class=\"ui one column grid\">
    <div class=\"column\">
        {% include '@SyliusAdmin/Order/History/_addresses.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.history.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:history.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/history.html.twig");
    }
}
