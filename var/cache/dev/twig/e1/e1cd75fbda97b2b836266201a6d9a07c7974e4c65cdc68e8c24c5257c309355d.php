<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_ace94b20b21e92255bdf80c718c88ee5802d177e65fb22f1ea5a39046a163857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d49b5c1c9376cf3a58dbdbafa713e6e641a68a52ab784249fa0ba166460c0de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49b5c1c9376cf3a58dbdbafa713e6e641a68a52ab784249fa0ba166460c0de1->enter($__internal_d49b5c1c9376cf3a58dbdbafa713e6e641a68a52ab784249fa0ba166460c0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_6e2ad94fb60d632f21a456cc73e4d479bd8ce929a2543df639389d786c0cd1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2ad94fb60d632f21a456cc73e4d479bd8ce929a2543df639389d786c0cd1c3->enter($__internal_6e2ad94fb60d632f21a456cc73e4d479bd8ce929a2543df639389d786c0cd1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49b5c1c9376cf3a58dbdbafa713e6e641a68a52ab784249fa0ba166460c0de1->leave($__internal_d49b5c1c9376cf3a58dbdbafa713e6e641a68a52ab784249fa0ba166460c0de1_prof);

        
        $__internal_6e2ad94fb60d632f21a456cc73e4d479bd8ce929a2543df639389d786c0cd1c3->leave($__internal_6e2ad94fb60d632f21a456cc73e4d479bd8ce929a2543df639389d786c0cd1c3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_17a853fe5a00298ff300c4c6c015b908737bc85022984488a685baf93ab5da23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a853fe5a00298ff300c4c6c015b908737bc85022984488a685baf93ab5da23->enter($__internal_17a853fe5a00298ff300c4c6c015b908737bc85022984488a685baf93ab5da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_88c9360a8faf22dc974707b832096e6b9818f30a42c2c4e05f718196511b7707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c9360a8faf22dc974707b832096e6b9818f30a42c2c4e05f718196511b7707->enter($__internal_88c9360a8faf22dc974707b832096e6b9818f30a42c2c4e05f718196511b7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_88c9360a8faf22dc974707b832096e6b9818f30a42c2c4e05f718196511b7707->leave($__internal_88c9360a8faf22dc974707b832096e6b9818f30a42c2c4e05f718196511b7707_prof);

        
        $__internal_17a853fe5a00298ff300c4c6c015b908737bc85022984488a685baf93ab5da23->leave($__internal_17a853fe5a00298ff300c4c6c015b908737bc85022984488a685baf93ab5da23_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_5f76dcb649a8a24f99fbbc2b3326c5b5d00e37ca7f0bfd6874076a4b05b6d1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f76dcb649a8a24f99fbbc2b3326c5b5d00e37ca7f0bfd6874076a4b05b6d1f6->enter($__internal_5f76dcb649a8a24f99fbbc2b3326c5b5d00e37ca7f0bfd6874076a4b05b6d1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_82232bc52dbc411a93323f34e9321f9b04bda393d3adc45df36efea33669e414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82232bc52dbc411a93323f34e9321f9b04bda393d3adc45df36efea33669e414->enter($__internal_82232bc52dbc411a93323f34e9321f9b04bda393d3adc45df36efea33669e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_82232bc52dbc411a93323f34e9321f9b04bda393d3adc45df36efea33669e414->leave($__internal_82232bc52dbc411a93323f34e9321f9b04bda393d3adc45df36efea33669e414_prof);

        
        $__internal_5f76dcb649a8a24f99fbbc2b3326c5b5d00e37ca7f0bfd6874076a4b05b6d1f6->leave($__internal_5f76dcb649a8a24f99fbbc2b3326c5b5d00e37ca7f0bfd6874076a4b05b6d1f6_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e452e1eae2ab0daccb565821e9d74cc8ba8bf3ebb758d221e848b375a9b48453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e452e1eae2ab0daccb565821e9d74cc8ba8bf3ebb758d221e848b375a9b48453->enter($__internal_e452e1eae2ab0daccb565821e9d74cc8ba8bf3ebb758d221e848b375a9b48453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_77e4bb6a4ac1ea131524fba3af03e4daaf0ba70093e5fe96c4472593e352782a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e4bb6a4ac1ea131524fba3af03e4daaf0ba70093e5fe96c4472593e352782a->enter($__internal_77e4bb6a4ac1ea131524fba3af03e4daaf0ba70093e5fe96c4472593e352782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_77e4bb6a4ac1ea131524fba3af03e4daaf0ba70093e5fe96c4472593e352782a->leave($__internal_77e4bb6a4ac1ea131524fba3af03e4daaf0ba70093e5fe96c4472593e352782a_prof);

        
        $__internal_e452e1eae2ab0daccb565821e9d74cc8ba8bf3ebb758d221e848b375a9b48453->leave($__internal_e452e1eae2ab0daccb565821e9d74cc8ba8bf3ebb758d221e848b375a9b48453_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
