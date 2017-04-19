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
        $__internal_10eb4ab1b364fbf589c321beb574015a71fb9cf958f0e5b29650fbec8aaf7e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eb4ab1b364fbf589c321beb574015a71fb9cf958f0e5b29650fbec8aaf7e02->enter($__internal_10eb4ab1b364fbf589c321beb574015a71fb9cf958f0e5b29650fbec8aaf7e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_30d38c1a7731665db3888cb733f40fdec0043a8e953b6fbaac578d075b33d23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d38c1a7731665db3888cb733f40fdec0043a8e953b6fbaac578d075b33d23d->enter($__internal_30d38c1a7731665db3888cb733f40fdec0043a8e953b6fbaac578d075b33d23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10eb4ab1b364fbf589c321beb574015a71fb9cf958f0e5b29650fbec8aaf7e02->leave($__internal_10eb4ab1b364fbf589c321beb574015a71fb9cf958f0e5b29650fbec8aaf7e02_prof);

        
        $__internal_30d38c1a7731665db3888cb733f40fdec0043a8e953b6fbaac578d075b33d23d->leave($__internal_30d38c1a7731665db3888cb733f40fdec0043a8e953b6fbaac578d075b33d23d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_503428de026091a54c0240b7bac0060db2d2e707be4763e9302746b19f7c05df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503428de026091a54c0240b7bac0060db2d2e707be4763e9302746b19f7c05df->enter($__internal_503428de026091a54c0240b7bac0060db2d2e707be4763e9302746b19f7c05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_87caa487c75449ba0a803bcd29a5fbfaef703426a17447e6a5136a55c4f19388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87caa487c75449ba0a803bcd29a5fbfaef703426a17447e6a5136a55c4f19388->enter($__internal_87caa487c75449ba0a803bcd29a5fbfaef703426a17447e6a5136a55c4f19388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_87caa487c75449ba0a803bcd29a5fbfaef703426a17447e6a5136a55c4f19388->leave($__internal_87caa487c75449ba0a803bcd29a5fbfaef703426a17447e6a5136a55c4f19388_prof);

        
        $__internal_503428de026091a54c0240b7bac0060db2d2e707be4763e9302746b19f7c05df->leave($__internal_503428de026091a54c0240b7bac0060db2d2e707be4763e9302746b19f7c05df_prof);

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
