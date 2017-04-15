<?php

/* SonataIntlBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_9cf561c3157de4a0a0c1cbf62f6d863d3f72156979e10794b919a2ca90b43421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_2d5d552fd087662de42a4d07498551a1b1cdd9610cbbe1b936c09aebb5eccb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5d552fd087662de42a4d07498551a1b1cdd9610cbbe1b936c09aebb5eccb11->enter($__internal_2d5d552fd087662de42a4d07498551a1b1cdd9610cbbe1b936c09aebb5eccb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_datetime.html.twig"));

        $__internal_f348a2ba571c70c80dd1e49e5937e008d542b9ee67c25eef2c6ed63521e7b88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f348a2ba571c70c80dd1e49e5937e008d542b9ee67c25eef2c6ed63521e7b88e->enter($__internal_f348a2ba571c70c80dd1e49e5937e008d542b9ee67c25eef2c6ed63521e7b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5d552fd087662de42a4d07498551a1b1cdd9610cbbe1b936c09aebb5eccb11->leave($__internal_2d5d552fd087662de42a4d07498551a1b1cdd9610cbbe1b936c09aebb5eccb11_prof);

        
        $__internal_f348a2ba571c70c80dd1e49e5937e008d542b9ee67c25eef2c6ed63521e7b88e->leave($__internal_f348a2ba571c70c80dd1e49e5937e008d542b9ee67c25eef2c6ed63521e7b88e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6666ea7a80a19ef6f7cd8bdeaddb21b964b87b94244b95d16681ce952b6ef221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6666ea7a80a19ef6f7cd8bdeaddb21b964b87b94244b95d16681ce952b6ef221->enter($__internal_6666ea7a80a19ef6f7cd8bdeaddb21b964b87b94244b95d16681ce952b6ef221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f933cdeef860733e9913ea93e97003598ab21409875df27f0fc33b7c23d8e041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f933cdeef860733e9913ea93e97003598ab21409875df27f0fc33b7c23d8e041->enter($__internal_f933cdeef860733e9913ea93e97003598ab21409875df27f0fc33b7c23d8e041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["pattern"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "pattern", array()), null)) : (null));
            // line 19
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 20
            echo "        ";
            $context["timezone"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array()), null)) : (null));
            // line 21
            echo "        ";
            $context["dateType"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "dateType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "dateType", array()), null)) : (null));
            // line 22
            echo "        ";
            $context["timeType"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timeType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timeType", array()), null)) : (null));
            // line 23
            echo "
        ";
            // line 24
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime(($context["value"] ?? $this->getContext($context, "value")), ($context["pattern"] ?? $this->getContext($context, "pattern")), ($context["locale"] ?? $this->getContext($context, "locale")), ($context["timezone"] ?? $this->getContext($context, "timezone")), ($context["dateType"] ?? $this->getContext($context, "dateType")), ($context["timeType"] ?? $this->getContext($context, "timeType")));
        }
        
        $__internal_f933cdeef860733e9913ea93e97003598ab21409875df27f0fc33b7c23d8e041->leave($__internal_f933cdeef860733e9913ea93e97003598ab21409875df27f0fc33b7c23d8e041_prof);

        
        $__internal_6666ea7a80a19ef6f7cd8bdeaddb21b964b87b94244b95d16681ce952b6ef221->leave($__internal_6666ea7a80a19ef6f7cd8bdeaddb21b964b87b94244b95d16681ce952b6ef221_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {% set pattern = field_description.options.pattern|default(null) %}
        {% set locale = field_description.options.locale|default(null) %}
        {% set timezone = field_description.options.timezone|default(null) %}
        {% set dateType = field_description.options.dateType|default(null) %}
        {% set timeType = field_description.options.timeType|default(null) %}

        {{ value | format_datetime(pattern, locale, timezone, dateType, timeType) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_datetime.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
