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
        $__internal_7da7d2b503cb36f9458887fda5f06c268ddc16eb751b8ca6009e60aecbbde135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da7d2b503cb36f9458887fda5f06c268ddc16eb751b8ca6009e60aecbbde135->enter($__internal_7da7d2b503cb36f9458887fda5f06c268ddc16eb751b8ca6009e60aecbbde135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_e583b9ebc39fbdd5386575b1d875af47cbb041ed15996bcb01cc23e808b7975e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e583b9ebc39fbdd5386575b1d875af47cbb041ed15996bcb01cc23e808b7975e->enter($__internal_e583b9ebc39fbdd5386575b1d875af47cbb041ed15996bcb01cc23e808b7975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da7d2b503cb36f9458887fda5f06c268ddc16eb751b8ca6009e60aecbbde135->leave($__internal_7da7d2b503cb36f9458887fda5f06c268ddc16eb751b8ca6009e60aecbbde135_prof);

        
        $__internal_e583b9ebc39fbdd5386575b1d875af47cbb041ed15996bcb01cc23e808b7975e->leave($__internal_e583b9ebc39fbdd5386575b1d875af47cbb041ed15996bcb01cc23e808b7975e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bca16d2d0f2f811236bc511baefe85f2bfa996fccd202ecbe4f48d4c3639a282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca16d2d0f2f811236bc511baefe85f2bfa996fccd202ecbe4f48d4c3639a282->enter($__internal_bca16d2d0f2f811236bc511baefe85f2bfa996fccd202ecbe4f48d4c3639a282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4d8ab91e76ec1552b7d8ba7807f1625bc9abfc0d8be9258fd319523ef46b643d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8ab91e76ec1552b7d8ba7807f1625bc9abfc0d8be9258fd319523ef46b643d->enter($__internal_4d8ab91e76ec1552b7d8ba7807f1625bc9abfc0d8be9258fd319523ef46b643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_4d8ab91e76ec1552b7d8ba7807f1625bc9abfc0d8be9258fd319523ef46b643d->leave($__internal_4d8ab91e76ec1552b7d8ba7807f1625bc9abfc0d8be9258fd319523ef46b643d_prof);

        
        $__internal_bca16d2d0f2f811236bc511baefe85f2bfa996fccd202ecbe4f48d4c3639a282->leave($__internal_bca16d2d0f2f811236bc511baefe85f2bfa996fccd202ecbe4f48d4c3639a282_prof);

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
