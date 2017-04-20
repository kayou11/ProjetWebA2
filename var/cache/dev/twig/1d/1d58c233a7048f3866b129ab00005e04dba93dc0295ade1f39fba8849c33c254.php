<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_eb0ca4cea275de481d155774e298e26df4bb32fae1be00c07977bf4652dcae9a extends Twig_Template
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
        $__internal_16dd35fd60f39de47ef98ab78681bc308bd6992029c866f9d1195f9e55af8c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dd35fd60f39de47ef98ab78681bc308bd6992029c866f9d1195f9e55af8c4b->enter($__internal_16dd35fd60f39de47ef98ab78681bc308bd6992029c866f9d1195f9e55af8c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_9c0244b9c59b8ef449a95d228853d0591856f56ae8f3832cd9f95ec94bb53d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0244b9c59b8ef449a95d228853d0591856f56ae8f3832cd9f95ec94bb53d7e->enter($__internal_9c0244b9c59b8ef449a95d228853d0591856f56ae8f3832cd9f95ec94bb53d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16dd35fd60f39de47ef98ab78681bc308bd6992029c866f9d1195f9e55af8c4b->leave($__internal_16dd35fd60f39de47ef98ab78681bc308bd6992029c866f9d1195f9e55af8c4b_prof);

        
        $__internal_9c0244b9c59b8ef449a95d228853d0591856f56ae8f3832cd9f95ec94bb53d7e->leave($__internal_9c0244b9c59b8ef449a95d228853d0591856f56ae8f3832cd9f95ec94bb53d7e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5de2d4450364001dfb621bf652c26076c2c3da19478ab45f1fe41d70c91dbb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de2d4450364001dfb621bf652c26076c2c3da19478ab45f1fe41d70c91dbb26->enter($__internal_5de2d4450364001dfb621bf652c26076c2c3da19478ab45f1fe41d70c91dbb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d704d3d4e054a08d31048244c98c9bd211ff7da630fd18be1b143c94be7a3fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d704d3d4e054a08d31048244c98c9bd211ff7da630fd18be1b143c94be7a3fb5->enter($__internal_d704d3d4e054a08d31048244c98c9bd211ff7da630fd18be1b143c94be7a3fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_d704d3d4e054a08d31048244c98c9bd211ff7da630fd18be1b143c94be7a3fb5->leave($__internal_d704d3d4e054a08d31048244c98c9bd211ff7da630fd18be1b143c94be7a3fb5_prof);

        
        $__internal_5de2d4450364001dfb621bf652c26076c2c3da19478ab45f1fe41d70c91dbb26->leave($__internal_5de2d4450364001dfb621bf652c26076c2c3da19478ab45f1fe41d70c91dbb26_prof);

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
