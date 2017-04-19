<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_ebbbd09cddb6e4d94eb4110db35e01fb675396f7b7044a9268da05830f3156b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b2725d5ab5694347f700e1c60e8772d49a62ec6aa375398063b32a6d4a7ac36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2725d5ab5694347f700e1c60e8772d49a62ec6aa375398063b32a6d4a7ac36->enter($__internal_2b2725d5ab5694347f700e1c60e8772d49a62ec6aa375398063b32a6d4a7ac36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_bf97029d69571334ccbd5776314c9d15b194aaa652f7580a7c7a824955ab7145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf97029d69571334ccbd5776314c9d15b194aaa652f7580a7c7a824955ab7145->enter($__internal_bf97029d69571334ccbd5776314c9d15b194aaa652f7580a7c7a824955ab7145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2725d5ab5694347f700e1c60e8772d49a62ec6aa375398063b32a6d4a7ac36->leave($__internal_2b2725d5ab5694347f700e1c60e8772d49a62ec6aa375398063b32a6d4a7ac36_prof);

        
        $__internal_bf97029d69571334ccbd5776314c9d15b194aaa652f7580a7c7a824955ab7145->leave($__internal_bf97029d69571334ccbd5776314c9d15b194aaa652f7580a7c7a824955ab7145_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f713184777ced3e8c438f7a7fb45289487619c1bd99666a0c0a69bdbeab02a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f713184777ced3e8c438f7a7fb45289487619c1bd99666a0c0a69bdbeab02a8c->enter($__internal_f713184777ced3e8c438f7a7fb45289487619c1bd99666a0c0a69bdbeab02a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_bb4233b6a6fd2b2e4d592eb07cef47d126eb09ea3df10ed220ca20d860c66974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4233b6a6fd2b2e4d592eb07cef47d126eb09ea3df10ed220ca20d860c66974->enter($__internal_bb4233b6a6fd2b2e4d592eb07cef47d126eb09ea3df10ed220ca20d860c66974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_bb4233b6a6fd2b2e4d592eb07cef47d126eb09ea3df10ed220ca20d860c66974->leave($__internal_bb4233b6a6fd2b2e4d592eb07cef47d126eb09ea3df10ed220ca20d860c66974_prof);

        
        $__internal_f713184777ced3e8c438f7a7fb45289487619c1bd99666a0c0a69bdbeab02a8c->leave($__internal_f713184777ced3e8c438f7a7fb45289487619c1bd99666a0c0a69bdbeab02a8c_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_051eb3a3212a4b1c3a01d6bd5480497183787e4357e026222a6045ade7ad7867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051eb3a3212a4b1c3a01d6bd5480497183787e4357e026222a6045ade7ad7867->enter($__internal_051eb3a3212a4b1c3a01d6bd5480497183787e4357e026222a6045ade7ad7867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_10ed3845c256ee20dc3ceca9285f21e9861a860540da6eeb6dd0b8e7d1802b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ed3845c256ee20dc3ceca9285f21e9861a860540da6eeb6dd0b8e7d1802b08->enter($__internal_10ed3845c256ee20dc3ceca9285f21e9861a860540da6eeb6dd0b8e7d1802b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_10ed3845c256ee20dc3ceca9285f21e9861a860540da6eeb6dd0b8e7d1802b08->leave($__internal_10ed3845c256ee20dc3ceca9285f21e9861a860540da6eeb6dd0b8e7d1802b08_prof);

        
        $__internal_051eb3a3212a4b1c3a01d6bd5480497183787e4357e026222a6045ade7ad7867->leave($__internal_051eb3a3212a4b1c3a01d6bd5480497183787e4357e026222a6045ade7ad7867_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_8329fd51fe5ea8b39238d33949eda429680abb1b67017069f77981f80df0a46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8329fd51fe5ea8b39238d33949eda429680abb1b67017069f77981f80df0a46c->enter($__internal_8329fd51fe5ea8b39238d33949eda429680abb1b67017069f77981f80df0a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_25c3b64e284b45836c729c81058bfe38aef5a0f49325e5e872ff9ab90ca57108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c3b64e284b45836c729c81058bfe38aef5a0f49325e5e872ff9ab90ca57108->enter($__internal_25c3b64e284b45836c729c81058bfe38aef5a0f49325e5e872ff9ab90ca57108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_25c3b64e284b45836c729c81058bfe38aef5a0f49325e5e872ff9ab90ca57108->leave($__internal_25c3b64e284b45836c729c81058bfe38aef5a0f49325e5e872ff9ab90ca57108_prof);

        
        $__internal_8329fd51fe5ea8b39238d33949eda429680abb1b67017069f77981f80df0a46c->leave($__internal_8329fd51fe5ea8b39238d33949eda429680abb1b67017069f77981f80df0a46c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_8c108fcd22bb008b8f04abd1d39f127296e8fd1d6fd6cefcce616ce0e135e412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c108fcd22bb008b8f04abd1d39f127296e8fd1d6fd6cefcce616ce0e135e412->enter($__internal_8c108fcd22bb008b8f04abd1d39f127296e8fd1d6fd6cefcce616ce0e135e412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_1decaec3e11bc757a1d8d2c2b2bd2cb0e59b736c1f7eddfffc0444893448a366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1decaec3e11bc757a1d8d2c2b2bd2cb0e59b736c1f7eddfffc0444893448a366->enter($__internal_1decaec3e11bc757a1d8d2c2b2bd2cb0e59b736c1f7eddfffc0444893448a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_1decaec3e11bc757a1d8d2c2b2bd2cb0e59b736c1f7eddfffc0444893448a366->leave($__internal_1decaec3e11bc757a1d8d2c2b2bd2cb0e59b736c1f7eddfffc0444893448a366_prof);

        
        $__internal_8c108fcd22bb008b8f04abd1d39f127296e8fd1d6fd6cefcce616ce0e135e412->leave($__internal_8c108fcd22bb008b8f04abd1d39f127296e8fd1d6fd6cefcce616ce0e135e412_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
