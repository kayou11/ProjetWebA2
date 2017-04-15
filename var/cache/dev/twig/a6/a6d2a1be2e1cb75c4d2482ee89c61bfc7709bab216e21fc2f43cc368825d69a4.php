<?php

/* SonataIntlBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_8699f9d2d073d002a05cad0b90db1d64d09962ea5418ba109d1b972377cc9a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_2f59ec50c79d8e8d44abb454c645adc2e0936cacd62fc053b8a41a27295cfe2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f59ec50c79d8e8d44abb454c645adc2e0936cacd62fc053b8a41a27295cfe2e->enter($__internal_2f59ec50c79d8e8d44abb454c645adc2e0936cacd62fc053b8a41a27295cfe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_currency.html.twig"));

        $__internal_29646ebcd12ad4dc1ff4b3ccab100a14260b35c482877383b45261e9575025b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29646ebcd12ad4dc1ff4b3ccab100a14260b35c482877383b45261e9575025b5->enter($__internal_29646ebcd12ad4dc1ff4b3ccab100a14260b35c482877383b45261e9575025b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f59ec50c79d8e8d44abb454c645adc2e0936cacd62fc053b8a41a27295cfe2e->leave($__internal_2f59ec50c79d8e8d44abb454c645adc2e0936cacd62fc053b8a41a27295cfe2e_prof);

        
        $__internal_29646ebcd12ad4dc1ff4b3ccab100a14260b35c482877383b45261e9575025b5->leave($__internal_29646ebcd12ad4dc1ff4b3ccab100a14260b35c482877383b45261e9575025b5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f0c15fba55bd1ed247a0375d6a6edfe26f90c3a019191d23574fb52baf5e806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0c15fba55bd1ed247a0375d6a6edfe26f90c3a019191d23574fb52baf5e806->enter($__internal_7f0c15fba55bd1ed247a0375d6a6edfe26f90c3a019191d23574fb52baf5e806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_22a58c94735014cd5f384cff28d46984b514de7f105e660582c43dba85d377f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a58c94735014cd5f384cff28d46984b514de7f105e660582c43dba85d377f8->enter($__internal_22a58c94735014cd5f384cff28d46984b514de7f105e660582c43dba85d377f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["currency"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array());
            // line 19
            echo "        ";
            $context["attributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 21
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatCurrency(($context["value"] ?? $this->getContext($context, "value")), ($context["currency"] ?? $this->getContext($context, "currency")), ($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["textAttributes"] ?? $this->getContext($context, "textAttributes")), ($context["locale"] ?? $this->getContext($context, "locale")));
        }
        
        $__internal_22a58c94735014cd5f384cff28d46984b514de7f105e660582c43dba85d377f8->leave($__internal_22a58c94735014cd5f384cff28d46984b514de7f105e660582c43dba85d377f8_prof);

        
        $__internal_7f0c15fba55bd1ed247a0375d6a6edfe26f90c3a019191d23574fb52baf5e806->leave($__internal_7f0c15fba55bd1ed247a0375d6a6edfe26f90c3a019191d23574fb52baf5e806_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set currency = field_description.options.currency %}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_currency(currency, attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
