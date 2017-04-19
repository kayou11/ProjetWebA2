<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5f93580c3d85a56911c192fc7ea8841179708e4a77295bc526849ed5fb1bdcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_eb8d9c281831bd0307df7b98362fa1dd9a1232123306fb142ffdd01439a3d51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8d9c281831bd0307df7b98362fa1dd9a1232123306fb142ffdd01439a3d51b->enter($__internal_eb8d9c281831bd0307df7b98362fa1dd9a1232123306fb142ffdd01439a3d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_9bba16e1e8b2a57687b9f86c6cfee1bd61107faa7b0f28db47ecff28fff03d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba16e1e8b2a57687b9f86c6cfee1bd61107faa7b0f28db47ecff28fff03d52->enter($__internal_9bba16e1e8b2a57687b9f86c6cfee1bd61107faa7b0f28db47ecff28fff03d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8d9c281831bd0307df7b98362fa1dd9a1232123306fb142ffdd01439a3d51b->leave($__internal_eb8d9c281831bd0307df7b98362fa1dd9a1232123306fb142ffdd01439a3d51b_prof);

        
        $__internal_9bba16e1e8b2a57687b9f86c6cfee1bd61107faa7b0f28db47ecff28fff03d52->leave($__internal_9bba16e1e8b2a57687b9f86c6cfee1bd61107faa7b0f28db47ecff28fff03d52_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d764da6f630fefaac02cf889fc95de0b8035a610302f9b9a06e1be11345133b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d764da6f630fefaac02cf889fc95de0b8035a610302f9b9a06e1be11345133b->enter($__internal_7d764da6f630fefaac02cf889fc95de0b8035a610302f9b9a06e1be11345133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_624d80f5b4e9f4ee223519f9ceedf705921508ee74cc74c962bb997ea7acae8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624d80f5b4e9f4ee223519f9ceedf705921508ee74cc74c962bb997ea7acae8b->enter($__internal_624d80f5b4e9f4ee223519f9ceedf705921508ee74cc74c962bb997ea7acae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_624d80f5b4e9f4ee223519f9ceedf705921508ee74cc74c962bb997ea7acae8b->leave($__internal_624d80f5b4e9f4ee223519f9ceedf705921508ee74cc74c962bb997ea7acae8b_prof);

        
        $__internal_7d764da6f630fefaac02cf889fc95de0b8035a610302f9b9a06e1be11345133b->leave($__internal_7d764da6f630fefaac02cf889fc95de0b8035a610302f9b9a06e1be11345133b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
