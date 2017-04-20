<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_28e2d7ecf27e97f18de591661bb90dd4558d07539e7cbeaac30cff8a4655275e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_7371c910c22914137ceac3f67e757fc3bdf9935ef95385659db2ee15ff4691f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7371c910c22914137ceac3f67e757fc3bdf9935ef95385659db2ee15ff4691f6->enter($__internal_7371c910c22914137ceac3f67e757fc3bdf9935ef95385659db2ee15ff4691f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_37ab9d69dd6c9e369f8f367eba01334ec91a0d08eaca37895461b84de2686f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ab9d69dd6c9e369f8f367eba01334ec91a0d08eaca37895461b84de2686f08->enter($__internal_37ab9d69dd6c9e369f8f367eba01334ec91a0d08eaca37895461b84de2686f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7371c910c22914137ceac3f67e757fc3bdf9935ef95385659db2ee15ff4691f6->leave($__internal_7371c910c22914137ceac3f67e757fc3bdf9935ef95385659db2ee15ff4691f6_prof);

        
        $__internal_37ab9d69dd6c9e369f8f367eba01334ec91a0d08eaca37895461b84de2686f08->leave($__internal_37ab9d69dd6c9e369f8f367eba01334ec91a0d08eaca37895461b84de2686f08_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f3434731dbc789b14f8b6ff58794c0a8d0db8818af29dad14b7aeb87a54a3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3434731dbc789b14f8b6ff58794c0a8d0db8818af29dad14b7aeb87a54a3aa->enter($__internal_4f3434731dbc789b14f8b6ff58794c0a8d0db8818af29dad14b7aeb87a54a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_eb9ee71213172350b69bed5b32b2ada4b96f5ebac3ee0f973b3640a095ee8896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9ee71213172350b69bed5b32b2ada4b96f5ebac3ee0f973b3640a095ee8896->enter($__internal_eb9ee71213172350b69bed5b32b2ada4b96f5ebac3ee0f973b3640a095ee8896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_eb9ee71213172350b69bed5b32b2ada4b96f5ebac3ee0f973b3640a095ee8896->leave($__internal_eb9ee71213172350b69bed5b32b2ada4b96f5ebac3ee0f973b3640a095ee8896_prof);

        
        $__internal_4f3434731dbc789b14f8b6ff58794c0a8d0db8818af29dad14b7aeb87a54a3aa->leave($__internal_4f3434731dbc789b14f8b6ff58794c0a8d0db8818af29dad14b7aeb87a54a3aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
