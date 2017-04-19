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
        $__internal_c6f392cc9d0a64757dab345ed6030e73e59be7e928ec2ed439a2d289a31954b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f392cc9d0a64757dab345ed6030e73e59be7e928ec2ed439a2d289a31954b7->enter($__internal_c6f392cc9d0a64757dab345ed6030e73e59be7e928ec2ed439a2d289a31954b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_fe4faa61c7a7aff44c96cf1832e972f4d397a9d65818290a3dcd64b271231016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4faa61c7a7aff44c96cf1832e972f4d397a9d65818290a3dcd64b271231016->enter($__internal_fe4faa61c7a7aff44c96cf1832e972f4d397a9d65818290a3dcd64b271231016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f392cc9d0a64757dab345ed6030e73e59be7e928ec2ed439a2d289a31954b7->leave($__internal_c6f392cc9d0a64757dab345ed6030e73e59be7e928ec2ed439a2d289a31954b7_prof);

        
        $__internal_fe4faa61c7a7aff44c96cf1832e972f4d397a9d65818290a3dcd64b271231016->leave($__internal_fe4faa61c7a7aff44c96cf1832e972f4d397a9d65818290a3dcd64b271231016_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_753b0b2f66c3dc091ba029c522ceca215f1acb2b2c1588f6afac9fb1c32ac330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753b0b2f66c3dc091ba029c522ceca215f1acb2b2c1588f6afac9fb1c32ac330->enter($__internal_753b0b2f66c3dc091ba029c522ceca215f1acb2b2c1588f6afac9fb1c32ac330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a5d91b0d47e340a1e5ac87eb0a025eb5024aba8a6bfb3b1a45e05a4d5cb658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5d91b0d47e340a1e5ac87eb0a025eb5024aba8a6bfb3b1a45e05a4d5cb658e->enter($__internal_9a5d91b0d47e340a1e5ac87eb0a025eb5024aba8a6bfb3b1a45e05a4d5cb658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_9a5d91b0d47e340a1e5ac87eb0a025eb5024aba8a6bfb3b1a45e05a4d5cb658e->leave($__internal_9a5d91b0d47e340a1e5ac87eb0a025eb5024aba8a6bfb3b1a45e05a4d5cb658e_prof);

        
        $__internal_753b0b2f66c3dc091ba029c522ceca215f1acb2b2c1588f6afac9fb1c32ac330->leave($__internal_753b0b2f66c3dc091ba029c522ceca215f1acb2b2c1588f6afac9fb1c32ac330_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_bb8d9c7c7937a1db5e2340d47d9f0191b35108f9d3f8690b3c6f3aebeedca9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8d9c7c7937a1db5e2340d47d9f0191b35108f9d3f8690b3c6f3aebeedca9d1->enter($__internal_bb8d9c7c7937a1db5e2340d47d9f0191b35108f9d3f8690b3c6f3aebeedca9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_02517600adf40f91354cf53da1559701478cf4c02245f775a4b84a619ef59608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02517600adf40f91354cf53da1559701478cf4c02245f775a4b84a619ef59608->enter($__internal_02517600adf40f91354cf53da1559701478cf4c02245f775a4b84a619ef59608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02517600adf40f91354cf53da1559701478cf4c02245f775a4b84a619ef59608->leave($__internal_02517600adf40f91354cf53da1559701478cf4c02245f775a4b84a619ef59608_prof);

        
        $__internal_bb8d9c7c7937a1db5e2340d47d9f0191b35108f9d3f8690b3c6f3aebeedca9d1->leave($__internal_bb8d9c7c7937a1db5e2340d47d9f0191b35108f9d3f8690b3c6f3aebeedca9d1_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_401a475669f44bbdc5f62eaba9e85aa814e5435f810f3f20fc74e28ea636a9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401a475669f44bbdc5f62eaba9e85aa814e5435f810f3f20fc74e28ea636a9a3->enter($__internal_401a475669f44bbdc5f62eaba9e85aa814e5435f810f3f20fc74e28ea636a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_c895a2c5c4e513b2b29d6de417edaa5ec39e36408250ad17d011349b97ef298e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c895a2c5c4e513b2b29d6de417edaa5ec39e36408250ad17d011349b97ef298e->enter($__internal_c895a2c5c4e513b2b29d6de417edaa5ec39e36408250ad17d011349b97ef298e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_c895a2c5c4e513b2b29d6de417edaa5ec39e36408250ad17d011349b97ef298e->leave($__internal_c895a2c5c4e513b2b29d6de417edaa5ec39e36408250ad17d011349b97ef298e_prof);

        
        $__internal_401a475669f44bbdc5f62eaba9e85aa814e5435f810f3f20fc74e28ea636a9a3->leave($__internal_401a475669f44bbdc5f62eaba9e85aa814e5435f810f3f20fc74e28ea636a9a3_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8b6a76b6471fecaa0739e0bd2166f9f02f7bd3e7cec3b6a8b529a052e361c6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6a76b6471fecaa0739e0bd2166f9f02f7bd3e7cec3b6a8b529a052e361c6a7->enter($__internal_8b6a76b6471fecaa0739e0bd2166f9f02f7bd3e7cec3b6a8b529a052e361c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_a0e323dcbd6f2e9d8ee0ba3ef7c6c5da9f59a52d8d625a0a3192600c3b8e4706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e323dcbd6f2e9d8ee0ba3ef7c6c5da9f59a52d8d625a0a3192600c3b8e4706->enter($__internal_a0e323dcbd6f2e9d8ee0ba3ef7c6c5da9f59a52d8d625a0a3192600c3b8e4706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_a0e323dcbd6f2e9d8ee0ba3ef7c6c5da9f59a52d8d625a0a3192600c3b8e4706->leave($__internal_a0e323dcbd6f2e9d8ee0ba3ef7c6c5da9f59a52d8d625a0a3192600c3b8e4706_prof);

        
        $__internal_8b6a76b6471fecaa0739e0bd2166f9f02f7bd3e7cec3b6a8b529a052e361c6a7->leave($__internal_8b6a76b6471fecaa0739e0bd2166f9f02f7bd3e7cec3b6a8b529a052e361c6a7_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_ffcdbc1b0a636a2b0e684155756c60edfad75c732902a53c38f87841a393a868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcdbc1b0a636a2b0e684155756c60edfad75c732902a53c38f87841a393a868->enter($__internal_ffcdbc1b0a636a2b0e684155756c60edfad75c732902a53c38f87841a393a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e6dfe8c2ccfb1472d902fcd1631331f4306192f5db58313faeeff370d8370190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dfe8c2ccfb1472d902fcd1631331f4306192f5db58313faeeff370d8370190->enter($__internal_e6dfe8c2ccfb1472d902fcd1631331f4306192f5db58313faeeff370d8370190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_e6dfe8c2ccfb1472d902fcd1631331f4306192f5db58313faeeff370d8370190->leave($__internal_e6dfe8c2ccfb1472d902fcd1631331f4306192f5db58313faeeff370d8370190_prof);

        
        $__internal_ffcdbc1b0a636a2b0e684155756c60edfad75c732902a53c38f87841a393a868->leave($__internal_ffcdbc1b0a636a2b0e684155756c60edfad75c732902a53c38f87841a393a868_prof);

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
