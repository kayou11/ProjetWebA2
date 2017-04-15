<?php

/* SyliusAdminBundle:Crud:update.html.twig */
class __TwigTemplate_72d96a1e759adcbe2e540293951a60b9b3af25fcaca70aab11370c4104147d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac614ebe733d08ec0ff8b56bba27c15130d1ad88658baa4cf6a73d2eb26c6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac614ebe733d08ec0ff8b56bba27c15130d1ad88658baa4cf6a73d2eb26c6e5->enter($__internal_eac614ebe733d08ec0ff8b56bba27c15130d1ad88658baa4cf6a73d2eb26c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        $__internal_5573e3bcac08e29f04fd8e0ef43e4dcbe68cdf2b52063cb5265c624e66fb78da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5573e3bcac08e29f04fd8e0ef43e4dcbe68cdf2b52063cb5265c624e66fb78da->enter($__internal_5573e3bcac08e29f04fd8e0ef43e4dcbe68cdf2b52063cb5265c624e66fb78da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 4);
        // line 6
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.edit_") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.edit_") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array()))));
        // line 7
        $context["event_prefix"] = ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".admin.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())) . ".update");
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac614ebe733d08ec0ff8b56bba27c15130d1ad88658baa4cf6a73d2eb26c6e5->leave($__internal_eac614ebe733d08ec0ff8b56bba27c15130d1ad88658baa4cf6a73d2eb26c6e5_prof);

        
        $__internal_5573e3bcac08e29f04fd8e0ef43e4dcbe68cdf2b52063cb5265c624e66fb78da->leave($__internal_5573e3bcac08e29f04fd8e0ef43e4dcbe68cdf2b52063cb5265c624e66fb78da_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_884a0279aeed2a2db2963837aa5619e489f7c46886d3ba85c5df5376b9ee3028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884a0279aeed2a2db2963837aa5619e489f7c46886d3ba85c5df5376b9ee3028->enter($__internal_884a0279aeed2a2db2963837aa5619e489f7c46886d3ba85c5df5376b9ee3028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ec1e5fbf264b01ec54e30f1c1e3db04a6348a8030f3b6e9e861907a190ff6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec1e5fbf264b01ec54e30f1c1e3db04a6348a8030f3b6e9e861907a190ff6ef->enter($__internal_1ec1e5fbf264b01ec54e30f1c1e3db04a6348a8030f3b6e9e861907a190ff6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_1ec1e5fbf264b01ec54e30f1c1e3db04a6348a8030f3b6e9e861907a190ff6ef->leave($__internal_1ec1e5fbf264b01ec54e30f1c1e3db04a6348a8030f3b6e9e861907a190ff6ef_prof);

        
        $__internal_884a0279aeed2a2db2963837aa5619e489f7c46886d3ba85c5df5376b9ee3028->leave($__internal_884a0279aeed2a2db2963837aa5619e489f7c46886d3ba85c5df5376b9ee3028_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_efc3daddf941951731e45c49da4cc89b7b3587c6bc1190a299f8b2b01a6586b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc3daddf941951731e45c49da4cc89b7b3587c6bc1190a299f8b2b01a6586b5->enter($__internal_efc3daddf941951731e45c49da4cc89b7b3587c6bc1190a299f8b2b01a6586b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d872d491154fac1ec3eed141feae0b7f512aa91957ac9f6206b503df8af56b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d872d491154fac1ec3eed141feae0b7f512aa91957ac9f6206b503df8af56b1b->enter($__internal_d872d491154fac1ec3eed141feae0b7f512aa91957ac9f6206b503df8af56b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".before_header"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_header.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 16)->display($context);
        // line 17
        echo "
";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_header"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_content.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 20)->display($context);
        // line 21
        echo "
";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_content"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_d872d491154fac1ec3eed141feae0b7f512aa91957ac9f6206b503df8af56b1b->leave($__internal_d872d491154fac1ec3eed141feae0b7f512aa91957ac9f6206b503df8af56b1b_prof);

        
        $__internal_efc3daddf941951731e45c49da4cc89b7b3587c6bc1190a299f8b2b01a6586b5->leave($__internal_efc3daddf941951731e45c49da4cc89b7b3587c6bc1190a299f8b2b01a6586b5_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d1713b58daef1c3443b4579602d9fe8eec8ce6329a4499507b048b67c279a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1713b58daef1c3443b4579602d9fe8eec8ce6329a4499507b048b67c279a82->enter($__internal_9d1713b58daef1c3443b4579602d9fe8eec8ce6329a4499507b048b67c279a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d10e0f83190841426f2ba37ab45136d1e1bcdccc12179b3de59a35555fb1c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d10e0f83190841426f2ba37ab45136d1e1bcdccc12179b3de59a35555fb1c33->enter($__internal_1d10e0f83190841426f2ba37ab45136d1e1bcdccc12179b3de59a35555fb1c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".stylesheets")));
        echo "
";
        
        $__internal_1d10e0f83190841426f2ba37ab45136d1e1bcdccc12179b3de59a35555fb1c33->leave($__internal_1d10e0f83190841426f2ba37ab45136d1e1bcdccc12179b3de59a35555fb1c33_prof);

        
        $__internal_9d1713b58daef1c3443b4579602d9fe8eec8ce6329a4499507b048b67c279a82->leave($__internal_9d1713b58daef1c3443b4579602d9fe8eec8ce6329a4499507b048b67c279a82_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cb4485297025ab0ce8963ce065cfac02f7e39f6b64cbf25dd57b758f6e6f862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb4485297025ab0ce8963ce065cfac02f7e39f6b64cbf25dd57b758f6e6f862->enter($__internal_3cb4485297025ab0ce8963ce065cfac02f7e39f6b64cbf25dd57b758f6e6f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a328b300ce78aeb1e2407e918499880cc112b8459deb51203425b1d7cfcf9e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a328b300ce78aeb1e2407e918499880cc112b8459deb51203425b1d7cfcf9e19->enter($__internal_a328b300ce78aeb1e2407e918499880cc112b8459deb51203425b1d7cfcf9e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".javascripts")));
        echo "
";
        
        $__internal_a328b300ce78aeb1e2407e918499880cc112b8459deb51203425b1d7cfcf9e19->leave($__internal_a328b300ce78aeb1e2407e918499880cc112b8459deb51203425b1d7cfcf9e19_prof);

        
        $__internal_3cb4485297025ab0ce8963ce065cfac02f7e39f6b64cbf25dd57b758f6e6f862->leave($__internal_3cb4485297025ab0ce8963ce065cfac02f7e39f6b64cbf25dd57b758f6e6f862_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 34,  151 => 32,  142 => 31,  130 => 28,  124 => 26,  115 => 25,  103 => 22,  100 => 21,  98 => 20,  93 => 18,  90 => 17,  88 => 16,  83 => 14,  74 => 13,  54 => 9,  44 => 1,  42 => 11,  40 => 7,  38 => 6,  36 => 4,  34 => 3,  11 => 1,);
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

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.edit_'~metadata.name) %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.update' %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resource': resource}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/update.html.twig");
    }
}
