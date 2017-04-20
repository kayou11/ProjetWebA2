<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_aa2f9e44add3aeb2525213ac86aebc87e91d280f86577b69f2c4a3d13c1ddc3b extends Twig_Template
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
        $__internal_83a70793d4c3a8fa9f2c41f716e33a081253badb0d73ca20c3590e31b7e0d3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a70793d4c3a8fa9f2c41f716e33a081253badb0d73ca20c3590e31b7e0d3d6->enter($__internal_83a70793d4c3a8fa9f2c41f716e33a081253badb0d73ca20c3590e31b7e0d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_9bf5cbe421556f9cfa781b4a154204430126277bd317978c7f0e59c290271020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf5cbe421556f9cfa781b4a154204430126277bd317978c7f0e59c290271020->enter($__internal_9bf5cbe421556f9cfa781b4a154204430126277bd317978c7f0e59c290271020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a70793d4c3a8fa9f2c41f716e33a081253badb0d73ca20c3590e31b7e0d3d6->leave($__internal_83a70793d4c3a8fa9f2c41f716e33a081253badb0d73ca20c3590e31b7e0d3d6_prof);

        
        $__internal_9bf5cbe421556f9cfa781b4a154204430126277bd317978c7f0e59c290271020->leave($__internal_9bf5cbe421556f9cfa781b4a154204430126277bd317978c7f0e59c290271020_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_17ab3f16cd7df2becb60a635d3edd2e496ae65f7031884812e8cf5f8d756fdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ab3f16cd7df2becb60a635d3edd2e496ae65f7031884812e8cf5f8d756fdb4->enter($__internal_17ab3f16cd7df2becb60a635d3edd2e496ae65f7031884812e8cf5f8d756fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_db5dca9c3883ea00fe79d153c249bad50a8c5560d9a91df539e22fa541e35662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5dca9c3883ea00fe79d153c249bad50a8c5560d9a91df539e22fa541e35662->enter($__internal_db5dca9c3883ea00fe79d153c249bad50a8c5560d9a91df539e22fa541e35662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_db5dca9c3883ea00fe79d153c249bad50a8c5560d9a91df539e22fa541e35662->leave($__internal_db5dca9c3883ea00fe79d153c249bad50a8c5560d9a91df539e22fa541e35662_prof);

        
        $__internal_17ab3f16cd7df2becb60a635d3edd2e496ae65f7031884812e8cf5f8d756fdb4->leave($__internal_17ab3f16cd7df2becb60a635d3edd2e496ae65f7031884812e8cf5f8d756fdb4_prof);

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
