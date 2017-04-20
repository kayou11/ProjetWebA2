<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_0bafb5cae0d6d54358c4a5765dafddc8cce07887b34bf047a193596c7a0e7bcb extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de367bf1edd0c43b39e5bc9651575f579c23a2e75f5bf77d6d4d936266252f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de367bf1edd0c43b39e5bc9651575f579c23a2e75f5bf77d6d4d936266252f0b->enter($__internal_de367bf1edd0c43b39e5bc9651575f579c23a2e75f5bf77d6d4d936266252f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_1db762e71a0bae7679751b76e0bfafd2a7555e33e9c4d9ad9bf891a8fae7f5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db762e71a0bae7679751b76e0bfafd2a7555e33e9c4d9ad9bf891a8fae7f5c3->enter($__internal_1db762e71a0bae7679751b76e0bfafd2a7555e33e9c4d9ad9bf891a8fae7f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de367bf1edd0c43b39e5bc9651575f579c23a2e75f5bf77d6d4d936266252f0b->leave($__internal_de367bf1edd0c43b39e5bc9651575f579c23a2e75f5bf77d6d4d936266252f0b_prof);

        
        $__internal_1db762e71a0bae7679751b76e0bfafd2a7555e33e9c4d9ad9bf891a8fae7f5c3->leave($__internal_1db762e71a0bae7679751b76e0bfafd2a7555e33e9c4d9ad9bf891a8fae7f5c3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2de068daa4567dcd2149c6ba845edfb4a4a587d55a031d4812c04e47c17002cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de068daa4567dcd2149c6ba845edfb4a4a587d55a031d4812c04e47c17002cd->enter($__internal_2de068daa4567dcd2149c6ba845edfb4a4a587d55a031d4812c04e47c17002cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f6b6823f60187fc584ffc65fe1802687b56739a405a732d1597df62030cf598f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b6823f60187fc584ffc65fe1802687b56739a405a732d1597df62030cf598f->enter($__internal_f6b6823f60187fc584ffc65fe1802687b56739a405a732d1597df62030cf598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "options", array()), "format", array()), (isset($context["timezone"]) || array_key_exists("timezone", $context) ? $context["timezone"] : (function () { throw new Twig_Error_Runtime('Variable "timezone" does not exist.', 19, $this->getSourceContext()); })())), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })()), null, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 21, $this->getSourceContext()); })()), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_f6b6823f60187fc584ffc65fe1802687b56739a405a732d1597df62030cf598f->leave($__internal_f6b6823f60187fc584ffc65fe1802687b56739a405a732d1597df62030cf598f_prof);

        
        $__internal_2de068daa4567dcd2149c6ba845edfb4a4a587d55a031d4812c04e47c17002cd->leave($__internal_2de068daa4567dcd2149c6ba845edfb4a4a587d55a031d4812c04e47c17002cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
