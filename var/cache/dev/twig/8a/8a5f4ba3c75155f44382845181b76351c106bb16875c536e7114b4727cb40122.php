<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_e9fc3db255ea3e2e44e29d140214cdce8175a0aa1d76fef09214303bec23743f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_bb816552b8a024d9ed5ea9c1f9efaeefc41acb01961aa7c86dc8be36316c9d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb816552b8a024d9ed5ea9c1f9efaeefc41acb01961aa7c86dc8be36316c9d2d->enter($__internal_bb816552b8a024d9ed5ea9c1f9efaeefc41acb01961aa7c86dc8be36316c9d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_ff7c01ae0c25c066376f11e91becc653fb144ff08f8312651139f64f767f1190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7c01ae0c25c066376f11e91becc653fb144ff08f8312651139f64f767f1190->enter($__internal_ff7c01ae0c25c066376f11e91becc653fb144ff08f8312651139f64f767f1190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb816552b8a024d9ed5ea9c1f9efaeefc41acb01961aa7c86dc8be36316c9d2d->leave($__internal_bb816552b8a024d9ed5ea9c1f9efaeefc41acb01961aa7c86dc8be36316c9d2d_prof);

        
        $__internal_ff7c01ae0c25c066376f11e91becc653fb144ff08f8312651139f64f767f1190->leave($__internal_ff7c01ae0c25c066376f11e91becc653fb144ff08f8312651139f64f767f1190_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12ba6b16f1d299d5a6cdeca65ece627642856f51c5fbd8067b25640336958ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ba6b16f1d299d5a6cdeca65ece627642856f51c5fbd8067b25640336958ded->enter($__internal_12ba6b16f1d299d5a6cdeca65ece627642856f51c5fbd8067b25640336958ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e6b47a33f9e9332595f1f67319084b6a28597c0b8faa0ab11f2c8e65ff8081c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b47a33f9e9332595f1f67319084b6a28597c0b8faa0ab11f2c8e65ff8081c7->enter($__internal_e6b47a33f9e9332595f1f67319084b6a28597c0b8faa0ab11f2c8e65ff8081c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_e6b47a33f9e9332595f1f67319084b6a28597c0b8faa0ab11f2c8e65ff8081c7->leave($__internal_e6b47a33f9e9332595f1f67319084b6a28597c0b8faa0ab11f2c8e65ff8081c7_prof);

        
        $__internal_12ba6b16f1d299d5a6cdeca65ece627642856f51c5fbd8067b25640336958ded->leave($__internal_12ba6b16f1d299d5a6cdeca65ece627642856f51c5fbd8067b25640336958ded_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
