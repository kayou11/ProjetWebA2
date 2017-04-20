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
        $__internal_37801def66e2d927fe692b7267a60cc59d0c8fcaf00ba07219ece371ef60f454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37801def66e2d927fe692b7267a60cc59d0c8fcaf00ba07219ece371ef60f454->enter($__internal_37801def66e2d927fe692b7267a60cc59d0c8fcaf00ba07219ece371ef60f454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_4b6768d61ad755496e4202d33fa2ffb067e823122c1cc8d7f87be9d013a6a720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6768d61ad755496e4202d33fa2ffb067e823122c1cc8d7f87be9d013a6a720->enter($__internal_4b6768d61ad755496e4202d33fa2ffb067e823122c1cc8d7f87be9d013a6a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37801def66e2d927fe692b7267a60cc59d0c8fcaf00ba07219ece371ef60f454->leave($__internal_37801def66e2d927fe692b7267a60cc59d0c8fcaf00ba07219ece371ef60f454_prof);

        
        $__internal_4b6768d61ad755496e4202d33fa2ffb067e823122c1cc8d7f87be9d013a6a720->leave($__internal_4b6768d61ad755496e4202d33fa2ffb067e823122c1cc8d7f87be9d013a6a720_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_795cd38b276ce80870a73a2112f91f4e3b5e4d9ece76cf6e80f2f5531ecce5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795cd38b276ce80870a73a2112f91f4e3b5e4d9ece76cf6e80f2f5531ecce5e7->enter($__internal_795cd38b276ce80870a73a2112f91f4e3b5e4d9ece76cf6e80f2f5531ecce5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_34e6e9bdeaf48b661214838270c89e6b2e46d7b5e7d412dd6d62107fddc14b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e6e9bdeaf48b661214838270c89e6b2e46d7b5e7d412dd6d62107fddc14b05->enter($__internal_34e6e9bdeaf48b661214838270c89e6b2e46d7b5e7d412dd6d62107fddc14b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_34e6e9bdeaf48b661214838270c89e6b2e46d7b5e7d412dd6d62107fddc14b05->leave($__internal_34e6e9bdeaf48b661214838270c89e6b2e46d7b5e7d412dd6d62107fddc14b05_prof);

        
        $__internal_795cd38b276ce80870a73a2112f91f4e3b5e4d9ece76cf6e80f2f5531ecce5e7->leave($__internal_795cd38b276ce80870a73a2112f91f4e3b5e4d9ece76cf6e80f2f5531ecce5e7_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_fe2d3dadfaaec7e236249f010fb164ecba6d6cd3ef9e2953109cb131ef94c96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2d3dadfaaec7e236249f010fb164ecba6d6cd3ef9e2953109cb131ef94c96c->enter($__internal_fe2d3dadfaaec7e236249f010fb164ecba6d6cd3ef9e2953109cb131ef94c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1aedb98b9db21d66d35a37232709860ff5a0ed83ec68351a03362079a7b9434d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aedb98b9db21d66d35a37232709860ff5a0ed83ec68351a03362079a7b9434d->enter($__internal_1aedb98b9db21d66d35a37232709860ff5a0ed83ec68351a03362079a7b9434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1aedb98b9db21d66d35a37232709860ff5a0ed83ec68351a03362079a7b9434d->leave($__internal_1aedb98b9db21d66d35a37232709860ff5a0ed83ec68351a03362079a7b9434d_prof);

        
        $__internal_fe2d3dadfaaec7e236249f010fb164ecba6d6cd3ef9e2953109cb131ef94c96c->leave($__internal_fe2d3dadfaaec7e236249f010fb164ecba6d6cd3ef9e2953109cb131ef94c96c_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_33dcb8b81be761cd94d43fc32b9164858e0771be4a3c731e3c6a4ec624cfec33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dcb8b81be761cd94d43fc32b9164858e0771be4a3c731e3c6a4ec624cfec33->enter($__internal_33dcb8b81be761cd94d43fc32b9164858e0771be4a3c731e3c6a4ec624cfec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_86fdb4fc7d13c4cf75ccc689eb3980f5e10b659c4f468b0350797fc1756e97bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fdb4fc7d13c4cf75ccc689eb3980f5e10b659c4f468b0350797fc1756e97bc->enter($__internal_86fdb4fc7d13c4cf75ccc689eb3980f5e10b659c4f468b0350797fc1756e97bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_86fdb4fc7d13c4cf75ccc689eb3980f5e10b659c4f468b0350797fc1756e97bc->leave($__internal_86fdb4fc7d13c4cf75ccc689eb3980f5e10b659c4f468b0350797fc1756e97bc_prof);

        
        $__internal_33dcb8b81be761cd94d43fc32b9164858e0771be4a3c731e3c6a4ec624cfec33->leave($__internal_33dcb8b81be761cd94d43fc32b9164858e0771be4a3c731e3c6a4ec624cfec33_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_566a5278ff08296522b4418a5358bb5dd69cd21ecb738a82fffe275696ff193b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566a5278ff08296522b4418a5358bb5dd69cd21ecb738a82fffe275696ff193b->enter($__internal_566a5278ff08296522b4418a5358bb5dd69cd21ecb738a82fffe275696ff193b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_aa0ecb51e5d608afe698dfc60187199f4625cec322831b7f3d8f014443cd6e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0ecb51e5d608afe698dfc60187199f4625cec322831b7f3d8f014443cd6e67->enter($__internal_aa0ecb51e5d608afe698dfc60187199f4625cec322831b7f3d8f014443cd6e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_aa0ecb51e5d608afe698dfc60187199f4625cec322831b7f3d8f014443cd6e67->leave($__internal_aa0ecb51e5d608afe698dfc60187199f4625cec322831b7f3d8f014443cd6e67_prof);

        
        $__internal_566a5278ff08296522b4418a5358bb5dd69cd21ecb738a82fffe275696ff193b->leave($__internal_566a5278ff08296522b4418a5358bb5dd69cd21ecb738a82fffe275696ff193b_prof);

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
