<?php

/* SonataIntlBundle:CRUD:show_date.html.twig */
class __TwigTemplate_4b90a2785bbf982a3b77da820c053b1812094ff5c8ed0c77c7d887aa56a1b06d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_0d4a2686cd9678f045e92a456dfc6b69fb4dc798754c9ab4e6f0439f663eca9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4a2686cd9678f045e92a456dfc6b69fb4dc798754c9ab4e6f0439f663eca9b->enter($__internal_0d4a2686cd9678f045e92a456dfc6b69fb4dc798754c9ab4e6f0439f663eca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_date.html.twig"));

        $__internal_6b985f27b0465d7113ae0a927ed6b5077ec31c943d4749d1a2dcb67573ffd67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b985f27b0465d7113ae0a927ed6b5077ec31c943d4749d1a2dcb67573ffd67d->enter($__internal_6b985f27b0465d7113ae0a927ed6b5077ec31c943d4749d1a2dcb67573ffd67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4a2686cd9678f045e92a456dfc6b69fb4dc798754c9ab4e6f0439f663eca9b->leave($__internal_0d4a2686cd9678f045e92a456dfc6b69fb4dc798754c9ab4e6f0439f663eca9b_prof);

        
        $__internal_6b985f27b0465d7113ae0a927ed6b5077ec31c943d4749d1a2dcb67573ffd67d->leave($__internal_6b985f27b0465d7113ae0a927ed6b5077ec31c943d4749d1a2dcb67573ffd67d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_254c0215a1518adbb2c4b2b5f5df864e9c7b5205a3810f9b490f3ee4ac11a066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254c0215a1518adbb2c4b2b5f5df864e9c7b5205a3810f9b490f3ee4ac11a066->enter($__internal_254c0215a1518adbb2c4b2b5f5df864e9c7b5205a3810f9b490f3ee4ac11a066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_903b11b18ca8204563bbd2b719ccda89cacf44cfa773f66efd3004f1b9cdaaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903b11b18ca8204563bbd2b719ccda89cacf44cfa773f66efd3004f1b9cdaaa4->enter($__internal_903b11b18ca8204563bbd2b719ccda89cacf44cfa773f66efd3004f1b9cdaaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "
        ";
            // line 23
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(($context["value"] ?? $this->getContext($context, "value")), ($context["pattern"] ?? $this->getContext($context, "pattern")), ($context["locale"] ?? $this->getContext($context, "locale")), ($context["timezone"] ?? $this->getContext($context, "timezone")), ($context["dateType"] ?? $this->getContext($context, "dateType")));
        }
        
        $__internal_903b11b18ca8204563bbd2b719ccda89cacf44cfa773f66efd3004f1b9cdaaa4->leave($__internal_903b11b18ca8204563bbd2b719ccda89cacf44cfa773f66efd3004f1b9cdaaa4_prof);

        
        $__internal_254c0215a1518adbb2c4b2b5f5df864e9c7b5205a3810f9b490f3ee4ac11a066->leave($__internal_254c0215a1518adbb2c4b2b5f5df864e9c7b5205a3810f9b490f3ee4ac11a066_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_date.html.twig";
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {% set pattern = field_description.options.pattern|default(null) %}
        {% set locale = field_description.options.locale|default(null) %}
        {% set timezone = field_description.options.timezone|default(null) %}
        {% set dateType = field_description.options.dateType|default(null) %}

        {{ value | format_date(pattern, locale, timezone, dateType) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_date.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
