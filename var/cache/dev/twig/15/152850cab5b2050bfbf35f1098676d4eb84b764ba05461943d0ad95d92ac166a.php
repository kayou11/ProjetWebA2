<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_1aac43442dd047cbe7c7109877f598870a2379ede09d18d03722fcc92224d6a6 extends Twig_Template
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
        $__internal_7b1c8a70bc23a4f37f3e330dd645876f432b0c849d0156647833d8879c5d061a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1c8a70bc23a4f37f3e330dd645876f432b0c849d0156647833d8879c5d061a->enter($__internal_7b1c8a70bc23a4f37f3e330dd645876f432b0c849d0156647833d8879c5d061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_1b38f0fa0165a6d03b64177800f7f7f1f9c5a2012abcaaa2a3a1073546b4de64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38f0fa0165a6d03b64177800f7f7f1f9c5a2012abcaaa2a3a1073546b4de64->enter($__internal_1b38f0fa0165a6d03b64177800f7f7f1f9c5a2012abcaaa2a3a1073546b4de64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1c8a70bc23a4f37f3e330dd645876f432b0c849d0156647833d8879c5d061a->leave($__internal_7b1c8a70bc23a4f37f3e330dd645876f432b0c849d0156647833d8879c5d061a_prof);

        
        $__internal_1b38f0fa0165a6d03b64177800f7f7f1f9c5a2012abcaaa2a3a1073546b4de64->leave($__internal_1b38f0fa0165a6d03b64177800f7f7f1f9c5a2012abcaaa2a3a1073546b4de64_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b77404a224a6e6c1af3730bec1e1b188f65a8d9a1bf959243107951c8a73079a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77404a224a6e6c1af3730bec1e1b188f65a8d9a1bf959243107951c8a73079a->enter($__internal_b77404a224a6e6c1af3730bec1e1b188f65a8d9a1bf959243107951c8a73079a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_343792849a9fa3551f073126acb83a67f7a069a9c5771c4db49a55891e41b3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343792849a9fa3551f073126acb83a67f7a069a9c5771c4db49a55891e41b3e2->enter($__internal_343792849a9fa3551f073126acb83a67f7a069a9c5771c4db49a55891e41b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_343792849a9fa3551f073126acb83a67f7a069a9c5771c4db49a55891e41b3e2->leave($__internal_343792849a9fa3551f073126acb83a67f7a069a9c5771c4db49a55891e41b3e2_prof);

        
        $__internal_b77404a224a6e6c1af3730bec1e1b188f65a8d9a1bf959243107951c8a73079a->leave($__internal_b77404a224a6e6c1af3730bec1e1b188f65a8d9a1bf959243107951c8a73079a_prof);

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
