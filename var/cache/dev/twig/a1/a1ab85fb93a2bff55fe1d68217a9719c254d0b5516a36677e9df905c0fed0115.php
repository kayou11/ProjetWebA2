<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_0eb03ddcf732085707791ec3a57e7463971457ec7fb4e311cdd78fef58b935cc extends Twig_Template
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
        $__internal_dd5876dd2c77db0abddebdc38f2b6db9e8e99466aea5972b2dfef0537b755f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5876dd2c77db0abddebdc38f2b6db9e8e99466aea5972b2dfef0537b755f0a->enter($__internal_dd5876dd2c77db0abddebdc38f2b6db9e8e99466aea5972b2dfef0537b755f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_f5d6c26e0b5edf0f7309c7507651c756221d44375606f611bcb2822c5674750b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d6c26e0b5edf0f7309c7507651c756221d44375606f611bcb2822c5674750b->enter($__internal_f5d6c26e0b5edf0f7309c7507651c756221d44375606f611bcb2822c5674750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5876dd2c77db0abddebdc38f2b6db9e8e99466aea5972b2dfef0537b755f0a->leave($__internal_dd5876dd2c77db0abddebdc38f2b6db9e8e99466aea5972b2dfef0537b755f0a_prof);

        
        $__internal_f5d6c26e0b5edf0f7309c7507651c756221d44375606f611bcb2822c5674750b->leave($__internal_f5d6c26e0b5edf0f7309c7507651c756221d44375606f611bcb2822c5674750b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_67bff16254f24ee975973f13165ded3ae3a6c7b1d7fc1fa9c46455820aa50119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bff16254f24ee975973f13165ded3ae3a6c7b1d7fc1fa9c46455820aa50119->enter($__internal_67bff16254f24ee975973f13165ded3ae3a6c7b1d7fc1fa9c46455820aa50119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_191403750e378bc769777a0bd429350f3b96354a65d80a351dfd79d0272d1be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191403750e378bc769777a0bd429350f3b96354a65d80a351dfd79d0272d1be7->enter($__internal_191403750e378bc769777a0bd429350f3b96354a65d80a351dfd79d0272d1be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_191403750e378bc769777a0bd429350f3b96354a65d80a351dfd79d0272d1be7->leave($__internal_191403750e378bc769777a0bd429350f3b96354a65d80a351dfd79d0272d1be7_prof);

        
        $__internal_67bff16254f24ee975973f13165ded3ae3a6c7b1d7fc1fa9c46455820aa50119->leave($__internal_67bff16254f24ee975973f13165ded3ae3a6c7b1d7fc1fa9c46455820aa50119_prof);

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
