<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_448c3c6273f463d0389944e79283eaa77599a02a99eac14abbd180634e3a3ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a072caab92133a6673d3a4c881fe35fda682ff006067e7594bfd6320343e369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a072caab92133a6673d3a4c881fe35fda682ff006067e7594bfd6320343e369->enter($__internal_2a072caab92133a6673d3a4c881fe35fda682ff006067e7594bfd6320343e369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_8f6dfbdc1285007a7e96bf443e85fa0c80ab70e82c172fe745f508447e8e5944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6dfbdc1285007a7e96bf443e85fa0c80ab70e82c172fe745f508447e8e5944->enter($__internal_8f6dfbdc1285007a7e96bf443e85fa0c80ab70e82c172fe745f508447e8e5944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a072caab92133a6673d3a4c881fe35fda682ff006067e7594bfd6320343e369->leave($__internal_2a072caab92133a6673d3a4c881fe35fda682ff006067e7594bfd6320343e369_prof);

        
        $__internal_8f6dfbdc1285007a7e96bf443e85fa0c80ab70e82c172fe745f508447e8e5944->leave($__internal_8f6dfbdc1285007a7e96bf443e85fa0c80ab70e82c172fe745f508447e8e5944_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_49721dfe30ca7932556a15eef5461b9ca16c87d65ded73b4c28f748e57ce5014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49721dfe30ca7932556a15eef5461b9ca16c87d65ded73b4c28f748e57ce5014->enter($__internal_49721dfe30ca7932556a15eef5461b9ca16c87d65ded73b4c28f748e57ce5014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16324ca276cf5284d7b985560195322b9eecdf0d53863504b0cf4205814bad4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16324ca276cf5284d7b985560195322b9eecdf0d53863504b0cf4205814bad4a->enter($__internal_16324ca276cf5284d7b985560195322b9eecdf0d53863504b0cf4205814bad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_16324ca276cf5284d7b985560195322b9eecdf0d53863504b0cf4205814bad4a->leave($__internal_16324ca276cf5284d7b985560195322b9eecdf0d53863504b0cf4205814bad4a_prof);

        
        $__internal_49721dfe30ca7932556a15eef5461b9ca16c87d65ded73b4c28f748e57ce5014->leave($__internal_49721dfe30ca7932556a15eef5461b9ca16c87d65ded73b4c28f748e57ce5014_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_65a916212d5fe55f25ff9ba07bf5c06bba1902bcf2251cfb44c3deac95668adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a916212d5fe55f25ff9ba07bf5c06bba1902bcf2251cfb44c3deac95668adb->enter($__internal_65a916212d5fe55f25ff9ba07bf5c06bba1902bcf2251cfb44c3deac95668adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6e5ee8e7c35bd3ee7eea755c385ad5e2a5853d3f01326bdb05c35a5703774ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5ee8e7c35bd3ee7eea755c385ad5e2a5853d3f01326bdb05c35a5703774ee5->enter($__internal_6e5ee8e7c35bd3ee7eea755c385ad5e2a5853d3f01326bdb05c35a5703774ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e5ee8e7c35bd3ee7eea755c385ad5e2a5853d3f01326bdb05c35a5703774ee5->leave($__internal_6e5ee8e7c35bd3ee7eea755c385ad5e2a5853d3f01326bdb05c35a5703774ee5_prof);

        
        $__internal_65a916212d5fe55f25ff9ba07bf5c06bba1902bcf2251cfb44c3deac95668adb->leave($__internal_65a916212d5fe55f25ff9ba07bf5c06bba1902bcf2251cfb44c3deac95668adb_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5ff90194a47e5ac70e353ef479994b3e9acc84a5c9e651c11d71df69fe439fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff90194a47e5ac70e353ef479994b3e9acc84a5c9e651c11d71df69fe439fe2->enter($__internal_5ff90194a47e5ac70e353ef479994b3e9acc84a5c9e651c11d71df69fe439fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_19484d3409bc01592aa6c5deec29291f8336cb1cc4bf002c50ccca8c5254469a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19484d3409bc01592aa6c5deec29291f8336cb1cc4bf002c50ccca8c5254469a->enter($__internal_19484d3409bc01592aa6c5deec29291f8336cb1cc4bf002c50ccca8c5254469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_19484d3409bc01592aa6c5deec29291f8336cb1cc4bf002c50ccca8c5254469a->leave($__internal_19484d3409bc01592aa6c5deec29291f8336cb1cc4bf002c50ccca8c5254469a_prof);

        
        $__internal_5ff90194a47e5ac70e353ef479994b3e9acc84a5c9e651c11d71df69fe439fe2->leave($__internal_5ff90194a47e5ac70e353ef479994b3e9acc84a5c9e651c11d71df69fe439fe2_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e237b0325f026249794dfe6489b358dff42ecbf195d9abce36c93fe150d51e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e237b0325f026249794dfe6489b358dff42ecbf195d9abce36c93fe150d51e91->enter($__internal_e237b0325f026249794dfe6489b358dff42ecbf195d9abce36c93fe150d51e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_94acf6f805d575ac629d0b466aaa3c82484daa1d15b737444f9fa59222bf2470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94acf6f805d575ac629d0b466aaa3c82484daa1d15b737444f9fa59222bf2470->enter($__internal_94acf6f805d575ac629d0b466aaa3c82484daa1d15b737444f9fa59222bf2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_94acf6f805d575ac629d0b466aaa3c82484daa1d15b737444f9fa59222bf2470->leave($__internal_94acf6f805d575ac629d0b466aaa3c82484daa1d15b737444f9fa59222bf2470_prof);

        
        $__internal_e237b0325f026249794dfe6489b358dff42ecbf195d9abce36c93fe150d51e91->leave($__internal_e237b0325f026249794dfe6489b358dff42ecbf195d9abce36c93fe150d51e91_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_ded764c3443ecf7ea9fd1a07db57bbc02bb3be902a18e5a2d851166aa97d9065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded764c3443ecf7ea9fd1a07db57bbc02bb3be902a18e5a2d851166aa97d9065->enter($__internal_ded764c3443ecf7ea9fd1a07db57bbc02bb3be902a18e5a2d851166aa97d9065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_84349a196d6a316608a71a3706a785f8792bcbae4a101a2f6e5e1ed544b97ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84349a196d6a316608a71a3706a785f8792bcbae4a101a2f6e5e1ed544b97ea4->enter($__internal_84349a196d6a316608a71a3706a785f8792bcbae4a101a2f6e5e1ed544b97ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_84349a196d6a316608a71a3706a785f8792bcbae4a101a2f6e5e1ed544b97ea4->leave($__internal_84349a196d6a316608a71a3706a785f8792bcbae4a101a2f6e5e1ed544b97ea4_prof);

        
        $__internal_ded764c3443ecf7ea9fd1a07db57bbc02bb3be902a18e5a2d851166aa97d9065->leave($__internal_ded764c3443ecf7ea9fd1a07db57bbc02bb3be902a18e5a2d851166aa97d9065_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
