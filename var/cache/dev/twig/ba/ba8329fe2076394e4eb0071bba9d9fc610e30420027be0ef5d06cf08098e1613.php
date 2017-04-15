<?php

/* SonataIntlBundle:CRUD:list_decimal.html.twig */
class __TwigTemplate_51e63a6411d189ca877904942da9f324bbae4a6748c6bd61116c8f622045e611 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_decimal.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cca56a3e9ad1a4a313771df0d82de629d24ef0f7dd39156cfc34b3c5f54c8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cca56a3e9ad1a4a313771df0d82de629d24ef0f7dd39156cfc34b3c5f54c8e0->enter($__internal_4cca56a3e9ad1a4a313771df0d82de629d24ef0f7dd39156cfc34b3c5f54c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $__internal_e2534ac62d6b665bfdb49ccb85e129a1d086d1dd147a0021e97bc86fe98e7350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2534ac62d6b665bfdb49ccb85e129a1d086d1dd147a0021e97bc86fe98e7350->enter($__internal_e2534ac62d6b665bfdb49ccb85e129a1d086d1dd147a0021e97bc86fe98e7350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cca56a3e9ad1a4a313771df0d82de629d24ef0f7dd39156cfc34b3c5f54c8e0->leave($__internal_4cca56a3e9ad1a4a313771df0d82de629d24ef0f7dd39156cfc34b3c5f54c8e0_prof);

        
        $__internal_e2534ac62d6b665bfdb49ccb85e129a1d086d1dd147a0021e97bc86fe98e7350->leave($__internal_e2534ac62d6b665bfdb49ccb85e129a1d086d1dd147a0021e97bc86fe98e7350_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b3c856edc69b379d9878126655065a1f9c17fb5aedcb872fc5e2ea7eda2d7656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c856edc69b379d9878126655065a1f9c17fb5aedcb872fc5e2ea7eda2d7656->enter($__internal_b3c856edc69b379d9878126655065a1f9c17fb5aedcb872fc5e2ea7eda2d7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d478dd051aec5b994cec7b60f21f9fad870d865b047e3aaf73961a1b88ad32cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d478dd051aec5b994cec7b60f21f9fad870d865b047e3aaf73961a1b88ad32cb->enter($__internal_d478dd051aec5b994cec7b60f21f9fad870d865b047e3aaf73961a1b88ad32cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_d478dd051aec5b994cec7b60f21f9fad870d865b047e3aaf73961a1b88ad32cb->leave($__internal_d478dd051aec5b994cec7b60f21f9fad870d865b047e3aaf73961a1b88ad32cb_prof);

        
        $__internal_b3c856edc69b379d9878126655065a1f9c17fb5aedcb872fc5e2ea7eda2d7656->leave($__internal_b3c856edc69b379d9878126655065a1f9c17fb5aedcb872fc5e2ea7eda2d7656_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_decimal(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_decimal.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/list_decimal.html.twig");
    }
}
