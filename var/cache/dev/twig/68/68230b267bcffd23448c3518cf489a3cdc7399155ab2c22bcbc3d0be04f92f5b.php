<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_7fd1c4574d0138660e53103c754bfbcf5fce5a5123713fa74c477e6e84800f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_0804996c00c6227306cb5be175e7dd57a83c7a134347c0f9f52e59bb45a7146d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0804996c00c6227306cb5be175e7dd57a83c7a134347c0f9f52e59bb45a7146d->enter($__internal_0804996c00c6227306cb5be175e7dd57a83c7a134347c0f9f52e59bb45a7146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_f3151fc4e7b2b541c3a7b7bebbde44e953aff9c43087fb0fbf48688615f2d285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3151fc4e7b2b541c3a7b7bebbde44e953aff9c43087fb0fbf48688615f2d285->enter($__internal_f3151fc4e7b2b541c3a7b7bebbde44e953aff9c43087fb0fbf48688615f2d285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0804996c00c6227306cb5be175e7dd57a83c7a134347c0f9f52e59bb45a7146d->leave($__internal_0804996c00c6227306cb5be175e7dd57a83c7a134347c0f9f52e59bb45a7146d_prof);

        
        $__internal_f3151fc4e7b2b541c3a7b7bebbde44e953aff9c43087fb0fbf48688615f2d285->leave($__internal_f3151fc4e7b2b541c3a7b7bebbde44e953aff9c43087fb0fbf48688615f2d285_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b192f36042f69f1d991405b5bd01c5718b54e1a5dfefab4724dd7cc3dac6a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b192f36042f69f1d991405b5bd01c5718b54e1a5dfefab4724dd7cc3dac6a6c->enter($__internal_5b192f36042f69f1d991405b5bd01c5718b54e1a5dfefab4724dd7cc3dac6a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e9960a4805de69a4627172813bba27a5c1e816b349c0e56ab329a3484dcee9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9960a4805de69a4627172813bba27a5c1e816b349c0e56ab329a3484dcee9c8->enter($__internal_e9960a4805de69a4627172813bba27a5c1e816b349c0e56ab329a3484dcee9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_e9960a4805de69a4627172813bba27a5c1e816b349c0e56ab329a3484dcee9c8->leave($__internal_e9960a4805de69a4627172813bba27a5c1e816b349c0e56ab329a3484dcee9c8_prof);

        
        $__internal_5b192f36042f69f1d991405b5bd01c5718b54e1a5dfefab4724dd7cc3dac6a6c->leave($__internal_5b192f36042f69f1d991405b5bd01c5718b54e1a5dfefab4724dd7cc3dac6a6c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
