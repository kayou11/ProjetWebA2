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
        $__internal_971cc5b040b76109f4694dc4269c7f17fc9a9521521443244f8ea8f2ac9b3268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971cc5b040b76109f4694dc4269c7f17fc9a9521521443244f8ea8f2ac9b3268->enter($__internal_971cc5b040b76109f4694dc4269c7f17fc9a9521521443244f8ea8f2ac9b3268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_a57aeba635ce46f43fa34201235d1246becf5840db2a93a91e9fd27665b56f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57aeba635ce46f43fa34201235d1246becf5840db2a93a91e9fd27665b56f3f->enter($__internal_a57aeba635ce46f43fa34201235d1246becf5840db2a93a91e9fd27665b56f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971cc5b040b76109f4694dc4269c7f17fc9a9521521443244f8ea8f2ac9b3268->leave($__internal_971cc5b040b76109f4694dc4269c7f17fc9a9521521443244f8ea8f2ac9b3268_prof);

        
        $__internal_a57aeba635ce46f43fa34201235d1246becf5840db2a93a91e9fd27665b56f3f->leave($__internal_a57aeba635ce46f43fa34201235d1246becf5840db2a93a91e9fd27665b56f3f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3216a7102ac0a835c31b8a1ccc9e096dc04581e8f5d6d297757823b3c094efee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3216a7102ac0a835c31b8a1ccc9e096dc04581e8f5d6d297757823b3c094efee->enter($__internal_3216a7102ac0a835c31b8a1ccc9e096dc04581e8f5d6d297757823b3c094efee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4b6209755cfd88a1579e3ac1c34076bd2ecfb54ba709e98a1f811ac62ba11942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6209755cfd88a1579e3ac1c34076bd2ecfb54ba709e98a1f811ac62ba11942->enter($__internal_4b6209755cfd88a1579e3ac1c34076bd2ecfb54ba709e98a1f811ac62ba11942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_4b6209755cfd88a1579e3ac1c34076bd2ecfb54ba709e98a1f811ac62ba11942->leave($__internal_4b6209755cfd88a1579e3ac1c34076bd2ecfb54ba709e98a1f811ac62ba11942_prof);

        
        $__internal_3216a7102ac0a835c31b8a1ccc9e096dc04581e8f5d6d297757823b3c094efee->leave($__internal_3216a7102ac0a835c31b8a1ccc9e096dc04581e8f5d6d297757823b3c094efee_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9441fe2656d8509634432f4c5dd7171da67f70db8f84fb1587f6d72372a966d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9441fe2656d8509634432f4c5dd7171da67f70db8f84fb1587f6d72372a966d5->enter($__internal_9441fe2656d8509634432f4c5dd7171da67f70db8f84fb1587f6d72372a966d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f0fe13e6ea6b801e4baddabaaadae37982db30fded8747176adff1f6724f8ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe13e6ea6b801e4baddabaaadae37982db30fded8747176adff1f6724f8ec1->enter($__internal_f0fe13e6ea6b801e4baddabaaadae37982db30fded8747176adff1f6724f8ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_f0fe13e6ea6b801e4baddabaaadae37982db30fded8747176adff1f6724f8ec1->leave($__internal_f0fe13e6ea6b801e4baddabaaadae37982db30fded8747176adff1f6724f8ec1_prof);

        
        $__internal_9441fe2656d8509634432f4c5dd7171da67f70db8f84fb1587f6d72372a966d5->leave($__internal_9441fe2656d8509634432f4c5dd7171da67f70db8f84fb1587f6d72372a966d5_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c683515213b422911a9c5528f400de164482aef986da5d09284530a7b73a2a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c683515213b422911a9c5528f400de164482aef986da5d09284530a7b73a2a5d->enter($__internal_c683515213b422911a9c5528f400de164482aef986da5d09284530a7b73a2a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_2506dc83b1a0b41c06bf11385a1e86f1c1afb08e786b0a6ad8238abbb6a3cb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2506dc83b1a0b41c06bf11385a1e86f1c1afb08e786b0a6ad8238abbb6a3cb31->enter($__internal_2506dc83b1a0b41c06bf11385a1e86f1c1afb08e786b0a6ad8238abbb6a3cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_2506dc83b1a0b41c06bf11385a1e86f1c1afb08e786b0a6ad8238abbb6a3cb31->leave($__internal_2506dc83b1a0b41c06bf11385a1e86f1c1afb08e786b0a6ad8238abbb6a3cb31_prof);

        
        $__internal_c683515213b422911a9c5528f400de164482aef986da5d09284530a7b73a2a5d->leave($__internal_c683515213b422911a9c5528f400de164482aef986da5d09284530a7b73a2a5d_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_2b5c7cefceb7f96515f62e3fd453c61bd5e8af7ccff3a163689cc5e7da35e2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5c7cefceb7f96515f62e3fd453c61bd5e8af7ccff3a163689cc5e7da35e2ae->enter($__internal_2b5c7cefceb7f96515f62e3fd453c61bd5e8af7ccff3a163689cc5e7da35e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_127506e50b316d4727d281c0bfe2c1434ecb02ed781b43014f97c2216b993f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127506e50b316d4727d281c0bfe2c1434ecb02ed781b43014f97c2216b993f26->enter($__internal_127506e50b316d4727d281c0bfe2c1434ecb02ed781b43014f97c2216b993f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_127506e50b316d4727d281c0bfe2c1434ecb02ed781b43014f97c2216b993f26->leave($__internal_127506e50b316d4727d281c0bfe2c1434ecb02ed781b43014f97c2216b993f26_prof);

        
        $__internal_2b5c7cefceb7f96515f62e3fd453c61bd5e8af7ccff3a163689cc5e7da35e2ae->leave($__internal_2b5c7cefceb7f96515f62e3fd453c61bd5e8af7ccff3a163689cc5e7da35e2ae_prof);

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
