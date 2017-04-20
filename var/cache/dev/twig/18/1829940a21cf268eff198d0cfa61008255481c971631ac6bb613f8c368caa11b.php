<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_bcdc1ef8d1c342aacb0316e22cceff70374f7b88a4267cb5fd886e0159dfc7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b6043b790086ea9f3fe7267d9e7ac06b71466024f26ce400c9f57baeff1ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b6043b790086ea9f3fe7267d9e7ac06b71466024f26ce400c9f57baeff1ea3->enter($__internal_a1b6043b790086ea9f3fe7267d9e7ac06b71466024f26ce400c9f57baeff1ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_a587dbff6f4130b2caf7e4a1763d85c6c02fd47e2c5a227c93c07f6b29534af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587dbff6f4130b2caf7e4a1763d85c6c02fd47e2c5a227c93c07f6b29534af8->enter($__internal_a587dbff6f4130b2caf7e4a1763d85c6c02fd47e2c5a227c93c07f6b29534af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b6043b790086ea9f3fe7267d9e7ac06b71466024f26ce400c9f57baeff1ea3->leave($__internal_a1b6043b790086ea9f3fe7267d9e7ac06b71466024f26ce400c9f57baeff1ea3_prof);

        
        $__internal_a587dbff6f4130b2caf7e4a1763d85c6c02fd47e2c5a227c93c07f6b29534af8->leave($__internal_a587dbff6f4130b2caf7e4a1763d85c6c02fd47e2c5a227c93c07f6b29534af8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_854c07b974dd69f6838d2c8ee9085689e5f03caeeb3e011601509f27ba55aa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854c07b974dd69f6838d2c8ee9085689e5f03caeeb3e011601509f27ba55aa94->enter($__internal_854c07b974dd69f6838d2c8ee9085689e5f03caeeb3e011601509f27ba55aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8bc577e2529620ae0ad8ad1894f9efe1895f46b40eeaa2becfccf2a50acb9d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc577e2529620ae0ad8ad1894f9efe1895f46b40eeaa2becfccf2a50acb9d52->enter($__internal_8bc577e2529620ae0ad8ad1894f9efe1895f46b40eeaa2becfccf2a50acb9d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_8bc577e2529620ae0ad8ad1894f9efe1895f46b40eeaa2becfccf2a50acb9d52->leave($__internal_8bc577e2529620ae0ad8ad1894f9efe1895f46b40eeaa2becfccf2a50acb9d52_prof);

        
        $__internal_854c07b974dd69f6838d2c8ee9085689e5f03caeeb3e011601509f27ba55aa94->leave($__internal_854c07b974dd69f6838d2c8ee9085689e5f03caeeb3e011601509f27ba55aa94_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
