<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_a620ebb3f2cfa43e6af33d181bc38ac6646511297147c35731bd430b7b1b98f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_3c6d87612cf8526fed129da6eabaf068b6994fcc76978da414c8630ce4c6c3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6d87612cf8526fed129da6eabaf068b6994fcc76978da414c8630ce4c6c3d7->enter($__internal_3c6d87612cf8526fed129da6eabaf068b6994fcc76978da414c8630ce4c6c3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $__internal_aedc24b38c2e30c7fae1c07cca47420cdf34e3329a2939b350d845ba5c75c049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedc24b38c2e30c7fae1c07cca47420cdf34e3329a2939b350d845ba5c75c049->enter($__internal_aedc24b38c2e30c7fae1c07cca47420cdf34e3329a2939b350d845ba5c75c049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c6d87612cf8526fed129da6eabaf068b6994fcc76978da414c8630ce4c6c3d7->leave($__internal_3c6d87612cf8526fed129da6eabaf068b6994fcc76978da414c8630ce4c6c3d7_prof);

        
        $__internal_aedc24b38c2e30c7fae1c07cca47420cdf34e3329a2939b350d845ba5c75c049->leave($__internal_aedc24b38c2e30c7fae1c07cca47420cdf34e3329a2939b350d845ba5c75c049_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_f327edbce72d645e63f312b780d0b1c3727d85000f4f41e9e6ad30fc3a27db93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f327edbce72d645e63f312b780d0b1c3727d85000f4f41e9e6ad30fc3a27db93->enter($__internal_f327edbce72d645e63f312b780d0b1c3727d85000f4f41e9e6ad30fc3a27db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ef637cbd3f794d8047f1112f6a0c3e6259e910fb8f88562d41c5a37c6b7c0a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef637cbd3f794d8047f1112f6a0c3e6259e910fb8f88562d41c5a37c6b7c0a3c->enter($__internal_ef637cbd3f794d8047f1112f6a0c3e6259e910fb8f88562d41c5a37c6b7c0a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 8, $this->getSourceContext()); })()), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->getSourceContext()); })())), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new Twig_Error_Runtime('Variable "length" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["preserve"]) || array_key_exists("preserve", $context) ? $context["preserve"] : (function () { throw new Twig_Error_Runtime('Variable "preserve" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 12, $this->getSourceContext()); })()));
            } else {
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
                }
                // line 17
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })());
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_ef637cbd3f794d8047f1112f6a0c3e6259e910fb8f88562d41c5a37c6b7c0a3c->leave($__internal_ef637cbd3f794d8047f1112f6a0c3e6259e910fb8f88562d41c5a37c6b7c0a3c_prof);

        
        $__internal_f327edbce72d645e63f312b780d0b1c3727d85000f4f41e9e6ad30fc3a27db93->leave($__internal_f327edbce72d645e63f312b780d0b1c3727d85000f4f41e9e6ad30fc3a27db93_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}