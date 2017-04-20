<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_a5821f76cc3dd6818d70b767dbac65ca7958187bcb81a3cf3cfdeabc684a5fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_8d469562e663f306fdf2406e92bb9ef9c99044077cb0ddb7267ad81f730f92c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d469562e663f306fdf2406e92bb9ef9c99044077cb0ddb7267ad81f730f92c1->enter($__internal_8d469562e663f306fdf2406e92bb9ef9c99044077cb0ddb7267ad81f730f92c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_7da79943b761f11ed139f570043832c75b4c45d3748904d2692b61ae29b22485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da79943b761f11ed139f570043832c75b4c45d3748904d2692b61ae29b22485->enter($__internal_7da79943b761f11ed139f570043832c75b4c45d3748904d2692b61ae29b22485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d469562e663f306fdf2406e92bb9ef9c99044077cb0ddb7267ad81f730f92c1->leave($__internal_8d469562e663f306fdf2406e92bb9ef9c99044077cb0ddb7267ad81f730f92c1_prof);

        
        $__internal_7da79943b761f11ed139f570043832c75b4c45d3748904d2692b61ae29b22485->leave($__internal_7da79943b761f11ed139f570043832c75b4c45d3748904d2692b61ae29b22485_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0b8ebe4ba5e5b38c686a4b45d99ed605783a9537818791a849412abae9d3f250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8ebe4ba5e5b38c686a4b45d99ed605783a9537818791a849412abae9d3f250->enter($__internal_0b8ebe4ba5e5b38c686a4b45d99ed605783a9537818791a849412abae9d3f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4ee38aec4e8d6864df372dc8da8f3cc77b5741865c40df2a4d3fd5ea52af5556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee38aec4e8d6864df372dc8da8f3cc77b5741865c40df2a4d3fd5ea52af5556->enter($__internal_4ee38aec4e8d6864df372dc8da8f3cc77b5741865c40df2a4d3fd5ea52af5556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })()), "F j, Y"), "html", null, true);
        }
        
        $__internal_4ee38aec4e8d6864df372dc8da8f3cc77b5741865c40df2a4d3fd5ea52af5556->leave($__internal_4ee38aec4e8d6864df372dc8da8f3cc77b5741865c40df2a4d3fd5ea52af5556_prof);

        
        $__internal_0b8ebe4ba5e5b38c686a4b45d99ed605783a9537818791a849412abae9d3f250->leave($__internal_0b8ebe4ba5e5b38c686a4b45d99ed605783a9537818791a849412abae9d3f250_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
