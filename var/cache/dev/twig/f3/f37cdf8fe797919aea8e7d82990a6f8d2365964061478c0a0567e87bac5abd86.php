<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_ed7690a1b9885b129e3bdf5ec228a4a3629eed5e48ab421133e7ecb83856b9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd9fad3343693c8170531a88a5e1970279ad162f500b33c1d1ff7711475047a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9fad3343693c8170531a88a5e1970279ad162f500b33c1d1ff7711475047a9->enter($__internal_cd9fad3343693c8170531a88a5e1970279ad162f500b33c1d1ff7711475047a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_d029ceca6ca2fa73871b9b3420744418de957e4b67d169ad169b9d9b5552fc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d029ceca6ca2fa73871b9b3420744418de957e4b67d169ad169b9d9b5552fc3d->enter($__internal_d029ceca6ca2fa73871b9b3420744418de957e4b67d169ad169b9d9b5552fc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9fad3343693c8170531a88a5e1970279ad162f500b33c1d1ff7711475047a9->leave($__internal_cd9fad3343693c8170531a88a5e1970279ad162f500b33c1d1ff7711475047a9_prof);

        
        $__internal_d029ceca6ca2fa73871b9b3420744418de957e4b67d169ad169b9d9b5552fc3d->leave($__internal_d029ceca6ca2fa73871b9b3420744418de957e4b67d169ad169b9d9b5552fc3d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5128cb1985c8eba7e5b078e63a125ceb95e932b6552cd9cf8453a0ecdddb2f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5128cb1985c8eba7e5b078e63a125ceb95e932b6552cd9cf8453a0ecdddb2f34->enter($__internal_5128cb1985c8eba7e5b078e63a125ceb95e932b6552cd9cf8453a0ecdddb2f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1f4e3246e56878d2847e3c6dfd05fabd1e0f501c2f0b72cd034f621ab8a06e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4e3246e56878d2847e3c6dfd05fabd1e0f501c2f0b72cd034f621ab8a06e41->enter($__internal_1f4e3246e56878d2847e3c6dfd05fabd1e0f501c2f0b72cd034f621ab8a06e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_1f4e3246e56878d2847e3c6dfd05fabd1e0f501c2f0b72cd034f621ab8a06e41->leave($__internal_1f4e3246e56878d2847e3c6dfd05fabd1e0f501c2f0b72cd034f621ab8a06e41_prof);

        
        $__internal_5128cb1985c8eba7e5b078e63a125ceb95e932b6552cd9cf8453a0ecdddb2f34->leave($__internal_5128cb1985c8eba7e5b078e63a125ceb95e932b6552cd9cf8453a0ecdddb2f34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
