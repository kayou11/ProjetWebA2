<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_926aced4252c5137c4d3753fcd2731dfe245d9d4ab575abc1e5fd50e4b58e8a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_ffb3553b1396cb54ca95d8ea56d81d9508c6b5fcf8151d2306da528c223f0f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb3553b1396cb54ca95d8ea56d81d9508c6b5fcf8151d2306da528c223f0f3c->enter($__internal_ffb3553b1396cb54ca95d8ea56d81d9508c6b5fcf8151d2306da528c223f0f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_becedeb31373c94e9c3a80b7a5117667a12cbccf623ad6332000b998667cc3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becedeb31373c94e9c3a80b7a5117667a12cbccf623ad6332000b998667cc3e5->enter($__internal_becedeb31373c94e9c3a80b7a5117667a12cbccf623ad6332000b998667cc3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb3553b1396cb54ca95d8ea56d81d9508c6b5fcf8151d2306da528c223f0f3c->leave($__internal_ffb3553b1396cb54ca95d8ea56d81d9508c6b5fcf8151d2306da528c223f0f3c_prof);

        
        $__internal_becedeb31373c94e9c3a80b7a5117667a12cbccf623ad6332000b998667cc3e5->leave($__internal_becedeb31373c94e9c3a80b7a5117667a12cbccf623ad6332000b998667cc3e5_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_8998be51d1fc4d8581c388a744a16341c46e0edf4e8a1145d78f4d46e955a98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8998be51d1fc4d8581c388a744a16341c46e0edf4e8a1145d78f4d46e955a98e->enter($__internal_8998be51d1fc4d8581c388a744a16341c46e0edf4e8a1145d78f4d46e955a98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_da59001b2d5c7065f80c7b838dccb8e5e47ed3d9ef5d9f253126408eb43cf9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da59001b2d5c7065f80c7b838dccb8e5e47ed3d9ef5d9f253126408eb43cf9e8->enter($__internal_da59001b2d5c7065f80c7b838dccb8e5e47ed3d9ef5d9f253126408eb43cf9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })());
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_da59001b2d5c7065f80c7b838dccb8e5e47ed3d9ef5d9f253126408eb43cf9e8->leave($__internal_da59001b2d5c7065f80c7b838dccb8e5e47ed3d9ef5d9f253126408eb43cf9e8_prof);

        
        $__internal_8998be51d1fc4d8581c388a744a16341c46e0edf4e8a1145d78f4d46e955a98e->leave($__internal_8998be51d1fc4d8581c388a744a16341c46e0edf4e8a1145d78f4d46e955a98e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
