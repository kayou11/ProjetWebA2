<?php

/* SonataIntlBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_664cc38a75a388164da646436ce7523c1743bc1ca948157cc95758c2a2c93183 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_003b274b3bf06481b76dfe448b9cbc98e6543a4f69f0f7cee36a84cc4616ef4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003b274b3bf06481b76dfe448b9cbc98e6543a4f69f0f7cee36a84cc4616ef4c->enter($__internal_003b274b3bf06481b76dfe448b9cbc98e6543a4f69f0f7cee36a84cc4616ef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_percent.html.twig"));

        $__internal_81376036fefc008139705cf16e1965cbd907187ca74a6b23a9d32b014874edb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81376036fefc008139705cf16e1965cbd907187ca74a6b23a9d32b014874edb9->enter($__internal_81376036fefc008139705cf16e1965cbd907187ca74a6b23a9d32b014874edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003b274b3bf06481b76dfe448b9cbc98e6543a4f69f0f7cee36a84cc4616ef4c->leave($__internal_003b274b3bf06481b76dfe448b9cbc98e6543a4f69f0f7cee36a84cc4616ef4c_prof);

        
        $__internal_81376036fefc008139705cf16e1965cbd907187ca74a6b23a9d32b014874edb9->leave($__internal_81376036fefc008139705cf16e1965cbd907187ca74a6b23a9d32b014874edb9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a2834f3258857ec98d5ee7aadb2341e2d83ab41c6a616b29fecde1256a3b408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2834f3258857ec98d5ee7aadb2341e2d83ab41c6a616b29fecde1256a3b408->enter($__internal_8a2834f3258857ec98d5ee7aadb2341e2d83ab41c6a616b29fecde1256a3b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_afdb98e94c77c81574ee9b05ca448ed0b0a1fe633d76a4287a7a878bc40d3b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdb98e94c77c81574ee9b05ca448ed0b0a1fe633d76a4287a7a878bc40d3b93->enter($__internal_afdb98e94c77c81574ee9b05ca448ed0b0a1fe633d76a4287a7a878bc40d3b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_afdb98e94c77c81574ee9b05ca448ed0b0a1fe633d76a4287a7a878bc40d3b93->leave($__internal_afdb98e94c77c81574ee9b05ca448ed0b0a1fe633d76a4287a7a878bc40d3b93_prof);

        
        $__internal_8a2834f3258857ec98d5ee7aadb2341e2d83ab41c6a616b29fecde1256a3b408->leave($__internal_8a2834f3258857ec98d5ee7aadb2341e2d83ab41c6a616b29fecde1256a3b408_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_percent.html.twig";
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

        {{ value | number_format_percent(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
