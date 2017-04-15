<?php

/* SonataIntlBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_4e9756369613ede2e1f9e818a6aa07243bb0fbc586886bde6a4d5109cb47acb3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfabde767778ed8a8692bf30ac89185e3b800d24981d4ee33c36cc3389c9091d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfabde767778ed8a8692bf30ac89185e3b800d24981d4ee33c36cc3389c9091d->enter($__internal_bfabde767778ed8a8692bf30ac89185e3b800d24981d4ee33c36cc3389c9091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_currency.html.twig"));

        $__internal_eaa623099011c7da10cb6d060397738ffb936717c8187b97cdf9729060268798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa623099011c7da10cb6d060397738ffb936717c8187b97cdf9729060268798->enter($__internal_eaa623099011c7da10cb6d060397738ffb936717c8187b97cdf9729060268798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfabde767778ed8a8692bf30ac89185e3b800d24981d4ee33c36cc3389c9091d->leave($__internal_bfabde767778ed8a8692bf30ac89185e3b800d24981d4ee33c36cc3389c9091d_prof);

        
        $__internal_eaa623099011c7da10cb6d060397738ffb936717c8187b97cdf9729060268798->leave($__internal_eaa623099011c7da10cb6d060397738ffb936717c8187b97cdf9729060268798_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8fbfc7f2aab3fbb7ad0d8d284156d0b45068209c1dce70676574c19cf31d8f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbfc7f2aab3fbb7ad0d8d284156d0b45068209c1dce70676574c19cf31d8f09->enter($__internal_8fbfc7f2aab3fbb7ad0d8d284156d0b45068209c1dce70676574c19cf31d8f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ec4610df0623b6a4f31a7e5dd3c518d17ec51f25ec92233805a25242e60a117e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4610df0623b6a4f31a7e5dd3c518d17ec51f25ec92233805a25242e60a117e->enter($__internal_ec4610df0623b6a4f31a7e5dd3c518d17ec51f25ec92233805a25242e60a117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ec4610df0623b6a4f31a7e5dd3c518d17ec51f25ec92233805a25242e60a117e->leave($__internal_ec4610df0623b6a4f31a7e5dd3c518d17ec51f25ec92233805a25242e60a117e_prof);

        
        $__internal_8fbfc7f2aab3fbb7ad0d8d284156d0b45068209c1dce70676574c19cf31d8f09->leave($__internal_8fbfc7f2aab3fbb7ad0d8d284156d0b45068209c1dce70676574c19cf31d8f09_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
        {% set currency = field_description.options.currency %}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_currency(currency, attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/intl-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
