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
        $__internal_6b54cfd9abc17c6ce3c73513f08280e9406c0a5b5a4af147c73b0a4ab7fbc3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b54cfd9abc17c6ce3c73513f08280e9406c0a5b5a4af147c73b0a4ab7fbc3e0->enter($__internal_6b54cfd9abc17c6ce3c73513f08280e9406c0a5b5a4af147c73b0a4ab7fbc3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_c171d9731d124fc75b54e81458b362d2847ee9a0b28fb3b8a1619b4c4de2dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c171d9731d124fc75b54e81458b362d2847ee9a0b28fb3b8a1619b4c4de2dd4f->enter($__internal_c171d9731d124fc75b54e81458b362d2847ee9a0b28fb3b8a1619b4c4de2dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b54cfd9abc17c6ce3c73513f08280e9406c0a5b5a4af147c73b0a4ab7fbc3e0->leave($__internal_6b54cfd9abc17c6ce3c73513f08280e9406c0a5b5a4af147c73b0a4ab7fbc3e0_prof);

        
        $__internal_c171d9731d124fc75b54e81458b362d2847ee9a0b28fb3b8a1619b4c4de2dd4f->leave($__internal_c171d9731d124fc75b54e81458b362d2847ee9a0b28fb3b8a1619b4c4de2dd4f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3244d29c7c6b6013ea06eea193e8a99cc843df94183267047661807d45a5d0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3244d29c7c6b6013ea06eea193e8a99cc843df94183267047661807d45a5d0cb->enter($__internal_3244d29c7c6b6013ea06eea193e8a99cc843df94183267047661807d45a5d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_300c28ea1a6f45b62d75b9cc7011e44f9b153a7b18a49296675693410819c53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300c28ea1a6f45b62d75b9cc7011e44f9b153a7b18a49296675693410819c53e->enter($__internal_300c28ea1a6f45b62d75b9cc7011e44f9b153a7b18a49296675693410819c53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_300c28ea1a6f45b62d75b9cc7011e44f9b153a7b18a49296675693410819c53e->leave($__internal_300c28ea1a6f45b62d75b9cc7011e44f9b153a7b18a49296675693410819c53e_prof);

        
        $__internal_3244d29c7c6b6013ea06eea193e8a99cc843df94183267047661807d45a5d0cb->leave($__internal_3244d29c7c6b6013ea06eea193e8a99cc843df94183267047661807d45a5d0cb_prof);

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
