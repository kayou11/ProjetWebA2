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
        $__internal_dd98162e91c06ba9710962ba467cdb4d6c2455cafd42747ecf4fa7678e2e2bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd98162e91c06ba9710962ba467cdb4d6c2455cafd42747ecf4fa7678e2e2bc8->enter($__internal_dd98162e91c06ba9710962ba467cdb4d6c2455cafd42747ecf4fa7678e2e2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_6facec99b3e4a398092bb97899c8f088b3a05fd0d82913a7344d895e6f632e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6facec99b3e4a398092bb97899c8f088b3a05fd0d82913a7344d895e6f632e8c->enter($__internal_6facec99b3e4a398092bb97899c8f088b3a05fd0d82913a7344d895e6f632e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd98162e91c06ba9710962ba467cdb4d6c2455cafd42747ecf4fa7678e2e2bc8->leave($__internal_dd98162e91c06ba9710962ba467cdb4d6c2455cafd42747ecf4fa7678e2e2bc8_prof);

        
        $__internal_6facec99b3e4a398092bb97899c8f088b3a05fd0d82913a7344d895e6f632e8c->leave($__internal_6facec99b3e4a398092bb97899c8f088b3a05fd0d82913a7344d895e6f632e8c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fb95df427eb9c707eb2d621e0d2b7457b124ea339a10abbfa21465a99dee00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb95df427eb9c707eb2d621e0d2b7457b124ea339a10abbfa21465a99dee00f->enter($__internal_9fb95df427eb9c707eb2d621e0d2b7457b124ea339a10abbfa21465a99dee00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8c8fc03df82d8baa085529adae8bf39d547a5d32c66ffcdf11c0ad699f2c4495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8fc03df82d8baa085529adae8bf39d547a5d32c66ffcdf11c0ad699f2c4495->enter($__internal_8c8fc03df82d8baa085529adae8bf39d547a5d32c66ffcdf11c0ad699f2c4495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8c8fc03df82d8baa085529adae8bf39d547a5d32c66ffcdf11c0ad699f2c4495->leave($__internal_8c8fc03df82d8baa085529adae8bf39d547a5d32c66ffcdf11c0ad699f2c4495_prof);

        
        $__internal_9fb95df427eb9c707eb2d621e0d2b7457b124ea339a10abbfa21465a99dee00f->leave($__internal_9fb95df427eb9c707eb2d621e0d2b7457b124ea339a10abbfa21465a99dee00f_prof);

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
