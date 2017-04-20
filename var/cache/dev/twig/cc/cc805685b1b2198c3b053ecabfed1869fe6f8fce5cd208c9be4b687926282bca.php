<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_7d12c73cd657ca804d3aa928bed1bc7005e0750d1838e72258e0bb29b5b59a1e extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe7a2fa3d79a5116373984e72eb06ca9a49164cbec7e389626abb36a803dcadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7a2fa3d79a5116373984e72eb06ca9a49164cbec7e389626abb36a803dcadf->enter($__internal_fe7a2fa3d79a5116373984e72eb06ca9a49164cbec7e389626abb36a803dcadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_f6c73767b3bc3564a6af2089b4f5a38d215d64d6a4dee61052b003c2e967558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c73767b3bc3564a6af2089b4f5a38d215d64d6a4dee61052b003c2e967558c->enter($__internal_f6c73767b3bc3564a6af2089b4f5a38d215d64d6a4dee61052b003c2e967558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7a2fa3d79a5116373984e72eb06ca9a49164cbec7e389626abb36a803dcadf->leave($__internal_fe7a2fa3d79a5116373984e72eb06ca9a49164cbec7e389626abb36a803dcadf_prof);

        
        $__internal_f6c73767b3bc3564a6af2089b4f5a38d215d64d6a4dee61052b003c2e967558c->leave($__internal_f6c73767b3bc3564a6af2089b4f5a38d215d64d6a4dee61052b003c2e967558c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_32d6be2ab7b5d6c2bbf071a1fee77fe6385827f2c263611b0b575d4271dcbe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d6be2ab7b5d6c2bbf071a1fee77fe6385827f2c263611b0b575d4271dcbe02->enter($__internal_32d6be2ab7b5d6c2bbf071a1fee77fe6385827f2c263611b0b575d4271dcbe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_10d037463f8dc930cf0121576e568ad7e78ecb966c1115d5541f8ff197c8dc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d037463f8dc930cf0121576e568ad7e78ecb966c1115d5541f8ff197c8dc0e->enter($__internal_10d037463f8dc930cf0121576e568ad7e78ecb966c1115d5541f8ff197c8dc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_10d037463f8dc930cf0121576e568ad7e78ecb966c1115d5541f8ff197c8dc0e->leave($__internal_10d037463f8dc930cf0121576e568ad7e78ecb966c1115d5541f8ff197c8dc0e_prof);

        
        $__internal_32d6be2ab7b5d6c2bbf071a1fee77fe6385827f2c263611b0b575d4271dcbe02->leave($__internal_32d6be2ab7b5d6c2bbf071a1fee77fe6385827f2c263611b0b575d4271dcbe02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
