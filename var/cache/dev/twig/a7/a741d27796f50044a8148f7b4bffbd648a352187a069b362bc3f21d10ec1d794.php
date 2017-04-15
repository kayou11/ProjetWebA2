<?php

/* SonataIntlBundle:CRUD:show_decimal.html.twig */
class __TwigTemplate_f7451a11a0e7dcff017c8d73e36ee1fe72329df8f21ef9efb9ea912525b67a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_decimal.html.twig", 12);
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
        $__internal_43c25e7528ca2c0c0e3667f8240cd286842e362c95ebb76019800f9823542899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c25e7528ca2c0c0e3667f8240cd286842e362c95ebb76019800f9823542899->enter($__internal_43c25e7528ca2c0c0e3667f8240cd286842e362c95ebb76019800f9823542899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_decimal.html.twig"));

        $__internal_fb8ebc8a6dd5222016c67c1aac137cfc8461a5ad96272c91aef55aea65129106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8ebc8a6dd5222016c67c1aac137cfc8461a5ad96272c91aef55aea65129106->enter($__internal_fb8ebc8a6dd5222016c67c1aac137cfc8461a5ad96272c91aef55aea65129106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_decimal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c25e7528ca2c0c0e3667f8240cd286842e362c95ebb76019800f9823542899->leave($__internal_43c25e7528ca2c0c0e3667f8240cd286842e362c95ebb76019800f9823542899_prof);

        
        $__internal_fb8ebc8a6dd5222016c67c1aac137cfc8461a5ad96272c91aef55aea65129106->leave($__internal_fb8ebc8a6dd5222016c67c1aac137cfc8461a5ad96272c91aef55aea65129106_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b568bfaa371b22a3f2086e9631e272114cbf78b60c04b562b805dd80e0bdd8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b568bfaa371b22a3f2086e9631e272114cbf78b60c04b562b805dd80e0bdd8e4->enter($__internal_b568bfaa371b22a3f2086e9631e272114cbf78b60c04b562b805dd80e0bdd8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a38670ab23fd64f45e70f3a59e6fbd2a8e3e89f498a064525804b2515a9afd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38670ab23fd64f45e70f3a59e6fbd2a8e3e89f498a064525804b2515a9afd17->enter($__internal_a38670ab23fd64f45e70f3a59e6fbd2a8e3e89f498a064525804b2515a9afd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["attributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 19
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 21
            echo "
        ";
            // line 22
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatDecimal(($context["value"] ?? $this->getContext($context, "value")), ($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["textAttributes"] ?? $this->getContext($context, "textAttributes")), ($context["locale"] ?? $this->getContext($context, "locale")));
        }
        
        $__internal_a38670ab23fd64f45e70f3a59e6fbd2a8e3e89f498a064525804b2515a9afd17->leave($__internal_a38670ab23fd64f45e70f3a59e6fbd2a8e3e89f498a064525804b2515a9afd17_prof);

        
        $__internal_b568bfaa371b22a3f2086e9631e272114cbf78b60c04b562b805dd80e0bdd8e4->leave($__internal_b568bfaa371b22a3f2086e9631e272114cbf78b60c04b562b805dd80e0bdd8e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_decimal(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_decimal.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/show_decimal.html.twig");
    }
}
