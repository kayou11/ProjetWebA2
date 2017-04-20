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
        $__internal_d0bf9a58ddda2c039a2b8eee0b79947c1668f17f4f53a9578596f643b8fd062f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bf9a58ddda2c039a2b8eee0b79947c1668f17f4f53a9578596f643b8fd062f->enter($__internal_d0bf9a58ddda2c039a2b8eee0b79947c1668f17f4f53a9578596f643b8fd062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_2503fa3066045952c1aac4be71349875957bd3a144b8f6bb30f252ee8cba8554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2503fa3066045952c1aac4be71349875957bd3a144b8f6bb30f252ee8cba8554->enter($__internal_2503fa3066045952c1aac4be71349875957bd3a144b8f6bb30f252ee8cba8554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bf9a58ddda2c039a2b8eee0b79947c1668f17f4f53a9578596f643b8fd062f->leave($__internal_d0bf9a58ddda2c039a2b8eee0b79947c1668f17f4f53a9578596f643b8fd062f_prof);

        
        $__internal_2503fa3066045952c1aac4be71349875957bd3a144b8f6bb30f252ee8cba8554->leave($__internal_2503fa3066045952c1aac4be71349875957bd3a144b8f6bb30f252ee8cba8554_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c522627c23f9e32c56b505366196bc5f06c7111dd9421bc0605448d468a2cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c522627c23f9e32c56b505366196bc5f06c7111dd9421bc0605448d468a2cd6->enter($__internal_6c522627c23f9e32c56b505366196bc5f06c7111dd9421bc0605448d468a2cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_42c9fa8e6957d412c713f558542548b9371c13fac74e5a60e1a1391aad3ceaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9fa8e6957d412c713f558542548b9371c13fac74e5a60e1a1391aad3ceaf3->enter($__internal_42c9fa8e6957d412c713f558542548b9371c13fac74e5a60e1a1391aad3ceaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_42c9fa8e6957d412c713f558542548b9371c13fac74e5a60e1a1391aad3ceaf3->leave($__internal_42c9fa8e6957d412c713f558542548b9371c13fac74e5a60e1a1391aad3ceaf3_prof);

        
        $__internal_6c522627c23f9e32c56b505366196bc5f06c7111dd9421bc0605448d468a2cd6->leave($__internal_6c522627c23f9e32c56b505366196bc5f06c7111dd9421bc0605448d468a2cd6_prof);

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
