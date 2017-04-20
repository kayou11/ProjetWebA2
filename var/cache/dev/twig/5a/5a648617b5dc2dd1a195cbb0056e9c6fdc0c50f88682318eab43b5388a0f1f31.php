<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5f93580c3d85a56911c192fc7ea8841179708e4a77295bc526849ed5fb1bdcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_8ae67820d1720ca779a8ed9e9303da636b402e6e5e2358852f712fd6996129c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae67820d1720ca779a8ed9e9303da636b402e6e5e2358852f712fd6996129c0->enter($__internal_8ae67820d1720ca779a8ed9e9303da636b402e6e5e2358852f712fd6996129c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_ce064536a13046ebeee357c0f1a10b5719ccb946f739494f88a6fd26b966649c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce064536a13046ebeee357c0f1a10b5719ccb946f739494f88a6fd26b966649c->enter($__internal_ce064536a13046ebeee357c0f1a10b5719ccb946f739494f88a6fd26b966649c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae67820d1720ca779a8ed9e9303da636b402e6e5e2358852f712fd6996129c0->leave($__internal_8ae67820d1720ca779a8ed9e9303da636b402e6e5e2358852f712fd6996129c0_prof);

        
        $__internal_ce064536a13046ebeee357c0f1a10b5719ccb946f739494f88a6fd26b966649c->leave($__internal_ce064536a13046ebeee357c0f1a10b5719ccb946f739494f88a6fd26b966649c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bfd11157201d81fcba31dd5d9e0b8e8f5a92df20e589c9a1ca093c6dfe67562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd11157201d81fcba31dd5d9e0b8e8f5a92df20e589c9a1ca093c6dfe67562c->enter($__internal_bfd11157201d81fcba31dd5d9e0b8e8f5a92df20e589c9a1ca093c6dfe67562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_690b2a902904e9251810ba54231ea1edb5c03801bff5fa32f4b64aa6c5b999aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690b2a902904e9251810ba54231ea1edb5c03801bff5fa32f4b64aa6c5b999aa->enter($__internal_690b2a902904e9251810ba54231ea1edb5c03801bff5fa32f4b64aa6c5b999aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_690b2a902904e9251810ba54231ea1edb5c03801bff5fa32f4b64aa6c5b999aa->leave($__internal_690b2a902904e9251810ba54231ea1edb5c03801bff5fa32f4b64aa6c5b999aa_prof);

        
        $__internal_bfd11157201d81fcba31dd5d9e0b8e8f5a92df20e589c9a1ca093c6dfe67562c->leave($__internal_bfd11157201d81fcba31dd5d9e0b8e8f5a92df20e589c9a1ca093c6dfe67562c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
