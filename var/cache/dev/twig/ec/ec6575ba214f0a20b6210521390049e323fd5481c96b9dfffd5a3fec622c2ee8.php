<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_168a079d280fc3690fcf3c6dcea7c0dbc3b70d81cdebda55439dabc09fa4b1bd extends Twig_Template
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
        $__internal_cbef5a494af42d7ffe90f4f4bb75cace868ede59b1e35c2541bc93315c35e502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbef5a494af42d7ffe90f4f4bb75cace868ede59b1e35c2541bc93315c35e502->enter($__internal_cbef5a494af42d7ffe90f4f4bb75cace868ede59b1e35c2541bc93315c35e502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_a5142229f195d81c920c62042334ae29da39dfa3bae23a4d20649d6bc759b8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5142229f195d81c920c62042334ae29da39dfa3bae23a4d20649d6bc759b8bc->enter($__internal_a5142229f195d81c920c62042334ae29da39dfa3bae23a4d20649d6bc759b8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbef5a494af42d7ffe90f4f4bb75cace868ede59b1e35c2541bc93315c35e502->leave($__internal_cbef5a494af42d7ffe90f4f4bb75cace868ede59b1e35c2541bc93315c35e502_prof);

        
        $__internal_a5142229f195d81c920c62042334ae29da39dfa3bae23a4d20649d6bc759b8bc->leave($__internal_a5142229f195d81c920c62042334ae29da39dfa3bae23a4d20649d6bc759b8bc_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ab05be7dbb5b56bea1cf03bb673795b8597b14ac867a60d814239cfd143956f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab05be7dbb5b56bea1cf03bb673795b8597b14ac867a60d814239cfd143956f7->enter($__internal_ab05be7dbb5b56bea1cf03bb673795b8597b14ac867a60d814239cfd143956f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4916f3ec4c7e50045dfeb692ce81cdc35a7d3a44ec5aeefa514679091f926576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4916f3ec4c7e50045dfeb692ce81cdc35a7d3a44ec5aeefa514679091f926576->enter($__internal_4916f3ec4c7e50045dfeb692ce81cdc35a7d3a44ec5aeefa514679091f926576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_4916f3ec4c7e50045dfeb692ce81cdc35a7d3a44ec5aeefa514679091f926576->leave($__internal_4916f3ec4c7e50045dfeb692ce81cdc35a7d3a44ec5aeefa514679091f926576_prof);

        
        $__internal_ab05be7dbb5b56bea1cf03bb673795b8597b14ac867a60d814239cfd143956f7->leave($__internal_ab05be7dbb5b56bea1cf03bb673795b8597b14ac867a60d814239cfd143956f7_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_b28a79bd935ff1ec6c328defcaf95f2a9d794edcc01e355e45b86b1ae94b294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28a79bd935ff1ec6c328defcaf95f2a9d794edcc01e355e45b86b1ae94b294b->enter($__internal_b28a79bd935ff1ec6c328defcaf95f2a9d794edcc01e355e45b86b1ae94b294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_5db53955e1bda198e8b44cea7fec793995a4fbdbefa1eef6c95345a512c4d8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db53955e1bda198e8b44cea7fec793995a4fbdbefa1eef6c95345a512c4d8d4->enter($__internal_5db53955e1bda198e8b44cea7fec793995a4fbdbefa1eef6c95345a512c4d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_5db53955e1bda198e8b44cea7fec793995a4fbdbefa1eef6c95345a512c4d8d4->leave($__internal_5db53955e1bda198e8b44cea7fec793995a4fbdbefa1eef6c95345a512c4d8d4_prof);

        
        $__internal_b28a79bd935ff1ec6c328defcaf95f2a9d794edcc01e355e45b86b1ae94b294b->leave($__internal_b28a79bd935ff1ec6c328defcaf95f2a9d794edcc01e355e45b86b1ae94b294b_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_d23601bdefe17b2bb17971abefe9e6a4d11ff1d00dffbddcfdd8c2ad78d524f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23601bdefe17b2bb17971abefe9e6a4d11ff1d00dffbddcfdd8c2ad78d524f6->enter($__internal_d23601bdefe17b2bb17971abefe9e6a4d11ff1d00dffbddcfdd8c2ad78d524f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_c59525474edbe20e60c05d7fb8719dd14993c2c03a4e15c3d11df9d73e2667bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59525474edbe20e60c05d7fb8719dd14993c2c03a4e15c3d11df9d73e2667bc->enter($__internal_c59525474edbe20e60c05d7fb8719dd14993c2c03a4e15c3d11df9d73e2667bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_c59525474edbe20e60c05d7fb8719dd14993c2c03a4e15c3d11df9d73e2667bc->leave($__internal_c59525474edbe20e60c05d7fb8719dd14993c2c03a4e15c3d11df9d73e2667bc_prof);

        
        $__internal_d23601bdefe17b2bb17971abefe9e6a4d11ff1d00dffbddcfdd8c2ad78d524f6->leave($__internal_d23601bdefe17b2bb17971abefe9e6a4d11ff1d00dffbddcfdd8c2ad78d524f6_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_7d5946751ce086deffaa9eadbbb586359503c0a66ccc365c6cf9259234de9b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5946751ce086deffaa9eadbbb586359503c0a66ccc365c6cf9259234de9b68->enter($__internal_7d5946751ce086deffaa9eadbbb586359503c0a66ccc365c6cf9259234de9b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_dea51cf553ef4b55fe34ef7c7e7535ff9dde01e0828035707b3009a883954e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea51cf553ef4b55fe34ef7c7e7535ff9dde01e0828035707b3009a883954e71->enter($__internal_dea51cf553ef4b55fe34ef7c7e7535ff9dde01e0828035707b3009a883954e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_dea51cf553ef4b55fe34ef7c7e7535ff9dde01e0828035707b3009a883954e71->leave($__internal_dea51cf553ef4b55fe34ef7c7e7535ff9dde01e0828035707b3009a883954e71_prof);

        
        $__internal_7d5946751ce086deffaa9eadbbb586359503c0a66ccc365c6cf9259234de9b68->leave($__internal_7d5946751ce086deffaa9eadbbb586359503c0a66ccc365c6cf9259234de9b68_prof);

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
