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
        $__internal_551fa7dccedfbe9b8b2225aeb8e23207e5160b9039f34406824e44093a9465a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551fa7dccedfbe9b8b2225aeb8e23207e5160b9039f34406824e44093a9465a5->enter($__internal_551fa7dccedfbe9b8b2225aeb8e23207e5160b9039f34406824e44093a9465a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_6430fd4a349c3dc9ab6bda5d82a0796eefa42afdbe5297bc1a0564656d56961b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6430fd4a349c3dc9ab6bda5d82a0796eefa42afdbe5297bc1a0564656d56961b->enter($__internal_6430fd4a349c3dc9ab6bda5d82a0796eefa42afdbe5297bc1a0564656d56961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_551fa7dccedfbe9b8b2225aeb8e23207e5160b9039f34406824e44093a9465a5->leave($__internal_551fa7dccedfbe9b8b2225aeb8e23207e5160b9039f34406824e44093a9465a5_prof);

        
        $__internal_6430fd4a349c3dc9ab6bda5d82a0796eefa42afdbe5297bc1a0564656d56961b->leave($__internal_6430fd4a349c3dc9ab6bda5d82a0796eefa42afdbe5297bc1a0564656d56961b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_242d6425a449073950ab821ca9e651ed0731f32d7498dadcb269853976fd7caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242d6425a449073950ab821ca9e651ed0731f32d7498dadcb269853976fd7caf->enter($__internal_242d6425a449073950ab821ca9e651ed0731f32d7498dadcb269853976fd7caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ae534b546280999042921aa95e3d5e19fd1d10e540bfa1fafff6940842649b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae534b546280999042921aa95e3d5e19fd1d10e540bfa1fafff6940842649b13->enter($__internal_ae534b546280999042921aa95e3d5e19fd1d10e540bfa1fafff6940842649b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ae534b546280999042921aa95e3d5e19fd1d10e540bfa1fafff6940842649b13->leave($__internal_ae534b546280999042921aa95e3d5e19fd1d10e540bfa1fafff6940842649b13_prof);

        
        $__internal_242d6425a449073950ab821ca9e651ed0731f32d7498dadcb269853976fd7caf->leave($__internal_242d6425a449073950ab821ca9e651ed0731f32d7498dadcb269853976fd7caf_prof);

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
