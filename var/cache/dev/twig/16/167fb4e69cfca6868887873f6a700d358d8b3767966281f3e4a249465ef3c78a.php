<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_e4ffd816d4347c1b0230c51ee9e828df1afe0df31335f9a078a8c890dcb9f72e extends Twig_Template
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
        $__internal_02ee435a132073e75e684a77795836753a3e39082fcc9a6562789a10963f93e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ee435a132073e75e684a77795836753a3e39082fcc9a6562789a10963f93e8->enter($__internal_02ee435a132073e75e684a77795836753a3e39082fcc9a6562789a10963f93e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_107265ed8205204b2fcfecbeccc726f317d4f4e763c97104740658f6910ee47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107265ed8205204b2fcfecbeccc726f317d4f4e763c97104740658f6910ee47c->enter($__internal_107265ed8205204b2fcfecbeccc726f317d4f4e763c97104740658f6910ee47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ee435a132073e75e684a77795836753a3e39082fcc9a6562789a10963f93e8->leave($__internal_02ee435a132073e75e684a77795836753a3e39082fcc9a6562789a10963f93e8_prof);

        
        $__internal_107265ed8205204b2fcfecbeccc726f317d4f4e763c97104740658f6910ee47c->leave($__internal_107265ed8205204b2fcfecbeccc726f317d4f4e763c97104740658f6910ee47c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_318ca9708e6ee18cbcb22ad79087dc5471a3e8ea738d994c46c9687cff5b043e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318ca9708e6ee18cbcb22ad79087dc5471a3e8ea738d994c46c9687cff5b043e->enter($__internal_318ca9708e6ee18cbcb22ad79087dc5471a3e8ea738d994c46c9687cff5b043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fda81f5c802616fd198a57ae3fb10c9f0155b8da396037da636d00f73a04a63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda81f5c802616fd198a57ae3fb10c9f0155b8da396037da636d00f73a04a63c->enter($__internal_fda81f5c802616fd198a57ae3fb10c9f0155b8da396037da636d00f73a04a63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_fda81f5c802616fd198a57ae3fb10c9f0155b8da396037da636d00f73a04a63c->leave($__internal_fda81f5c802616fd198a57ae3fb10c9f0155b8da396037da636d00f73a04a63c_prof);

        
        $__internal_318ca9708e6ee18cbcb22ad79087dc5471a3e8ea738d994c46c9687cff5b043e->leave($__internal_318ca9708e6ee18cbcb22ad79087dc5471a3e8ea738d994c46c9687cff5b043e_prof);

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
