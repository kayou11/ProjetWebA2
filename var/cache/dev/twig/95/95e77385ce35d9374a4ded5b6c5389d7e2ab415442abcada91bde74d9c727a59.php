<?php

/* SonataIntlBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_a9cf67224f26b5c7583b845f8fd5d548ec784ac7beda93f67453be651d4f876f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_16beebc104428aa9f6d5090598788fa5abfa3438103ce44eb7f5e590cc1a6fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16beebc104428aa9f6d5090598788fa5abfa3438103ce44eb7f5e590cc1a6fbb->enter($__internal_16beebc104428aa9f6d5090598788fa5abfa3438103ce44eb7f5e590cc1a6fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_percent.html.twig"));

        $__internal_e3b8f3cc57328d1ede890a49ce12719502d76b182d94550e0b7dbff7aba2585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b8f3cc57328d1ede890a49ce12719502d76b182d94550e0b7dbff7aba2585a->enter($__internal_e3b8f3cc57328d1ede890a49ce12719502d76b182d94550e0b7dbff7aba2585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16beebc104428aa9f6d5090598788fa5abfa3438103ce44eb7f5e590cc1a6fbb->leave($__internal_16beebc104428aa9f6d5090598788fa5abfa3438103ce44eb7f5e590cc1a6fbb_prof);

        
        $__internal_e3b8f3cc57328d1ede890a49ce12719502d76b182d94550e0b7dbff7aba2585a->leave($__internal_e3b8f3cc57328d1ede890a49ce12719502d76b182d94550e0b7dbff7aba2585a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b8cdec05b4d2b58de590319dc18b3398389879df440b16dfbf85e7b159ef8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8cdec05b4d2b58de590319dc18b3398389879df440b16dfbf85e7b159ef8b4->enter($__internal_8b8cdec05b4d2b58de590319dc18b3398389879df440b16dfbf85e7b159ef8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1a839448f0e84e65257bc48cf4928f34dc55e79294a065120c87385286d551f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a839448f0e84e65257bc48cf4928f34dc55e79294a065120c87385286d551f9->enter($__internal_1a839448f0e84e65257bc48cf4928f34dc55e79294a065120c87385286d551f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatPercent(($context["value"] ?? $this->getContext($context, "value")), ($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["textAttributes"] ?? $this->getContext($context, "textAttributes")), ($context["locale"] ?? $this->getContext($context, "locale")));
        }
        
        $__internal_1a839448f0e84e65257bc48cf4928f34dc55e79294a065120c87385286d551f9->leave($__internal_1a839448f0e84e65257bc48cf4928f34dc55e79294a065120c87385286d551f9_prof);

        
        $__internal_8b8cdec05b4d2b58de590319dc18b3398389879df440b16dfbf85e7b159ef8b4->leave($__internal_8b8cdec05b4d2b58de590319dc18b3398389879df440b16dfbf85e7b159ef8b4_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_percent.html.twig";
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

        {{ value | number_format_percent(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
