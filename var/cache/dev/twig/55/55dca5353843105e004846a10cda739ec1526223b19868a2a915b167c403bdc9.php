<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_63f174efe26d710499138b2001d6f91c3750ef02d0c1dd8bac41fc679383892e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c076535ccc2ede0d1363bbabbaaaf6ff0cd0d3eeb65ddb6358e193a532f0c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c076535ccc2ede0d1363bbabbaaaf6ff0cd0d3eeb65ddb6358e193a532f0c60->enter($__internal_1c076535ccc2ede0d1363bbabbaaaf6ff0cd0d3eeb65ddb6358e193a532f0c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_0524fe957465cca30356e1b8a44104204d63d2cbe23d2728b52b461d3554b060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0524fe957465cca30356e1b8a44104204d63d2cbe23d2728b52b461d3554b060->enter($__internal_0524fe957465cca30356e1b8a44104204d63d2cbe23d2728b52b461d3554b060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c076535ccc2ede0d1363bbabbaaaf6ff0cd0d3eeb65ddb6358e193a532f0c60->leave($__internal_1c076535ccc2ede0d1363bbabbaaaf6ff0cd0d3eeb65ddb6358e193a532f0c60_prof);

        
        $__internal_0524fe957465cca30356e1b8a44104204d63d2cbe23d2728b52b461d3554b060->leave($__internal_0524fe957465cca30356e1b8a44104204d63d2cbe23d2728b52b461d3554b060_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_f1a636efaff0d22892c499cfd367a81dc2df135b32fd9a0ef933ca954f647fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a636efaff0d22892c499cfd367a81dc2df135b32fd9a0ef933ca954f647fa0->enter($__internal_f1a636efaff0d22892c499cfd367a81dc2df135b32fd9a0ef933ca954f647fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_817291690437f09a8fa3b109a313c30c8b692f29292df9fe5e4735dbcd972e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817291690437f09a8fa3b109a313c30c8b692f29292df9fe5e4735dbcd972e31->enter($__internal_817291690437f09a8fa3b109a313c30c8b692f29292df9fe5e4735dbcd972e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_817291690437f09a8fa3b109a313c30c8b692f29292df9fe5e4735dbcd972e31->leave($__internal_817291690437f09a8fa3b109a313c30c8b692f29292df9fe5e4735dbcd972e31_prof);

        
        $__internal_f1a636efaff0d22892c499cfd367a81dc2df135b32fd9a0ef933ca954f647fa0->leave($__internal_f1a636efaff0d22892c499cfd367a81dc2df135b32fd9a0ef933ca954f647fa0_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
