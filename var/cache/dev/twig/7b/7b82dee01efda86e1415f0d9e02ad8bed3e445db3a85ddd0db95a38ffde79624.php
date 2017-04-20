<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_bcbc0e4bb6b1cb23f61bec0487f84da6be39f92f7bdae7c5a8ed727f3d839f76 extends Twig_Template
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
        $__internal_76e818cd94914ca72544c1daa1edb9c9bdc956c12e3fd84ab84ba34072e8e55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e818cd94914ca72544c1daa1edb9c9bdc956c12e3fd84ab84ba34072e8e55f->enter($__internal_76e818cd94914ca72544c1daa1edb9c9bdc956c12e3fd84ab84ba34072e8e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_cc4d05cd0f3dad540cfdcfe6b288077380919328faa59f9abc85f20611ceaff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4d05cd0f3dad540cfdcfe6b288077380919328faa59f9abc85f20611ceaff9->enter($__internal_cc4d05cd0f3dad540cfdcfe6b288077380919328faa59f9abc85f20611ceaff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e818cd94914ca72544c1daa1edb9c9bdc956c12e3fd84ab84ba34072e8e55f->leave($__internal_76e818cd94914ca72544c1daa1edb9c9bdc956c12e3fd84ab84ba34072e8e55f_prof);

        
        $__internal_cc4d05cd0f3dad540cfdcfe6b288077380919328faa59f9abc85f20611ceaff9->leave($__internal_cc4d05cd0f3dad540cfdcfe6b288077380919328faa59f9abc85f20611ceaff9_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebacbc4c6c823fe3a6b002d9a1535f225ef7855acf03ee543aac02dc6ec82237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebacbc4c6c823fe3a6b002d9a1535f225ef7855acf03ee543aac02dc6ec82237->enter($__internal_ebacbc4c6c823fe3a6b002d9a1535f225ef7855acf03ee543aac02dc6ec82237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d793db383816df13ad6359023b7201109f8baf167324dfb2a2637b6761caee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d793db383816df13ad6359023b7201109f8baf167324dfb2a2637b6761caee71->enter($__internal_d793db383816df13ad6359023b7201109f8baf167324dfb2a2637b6761caee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_d793db383816df13ad6359023b7201109f8baf167324dfb2a2637b6761caee71->leave($__internal_d793db383816df13ad6359023b7201109f8baf167324dfb2a2637b6761caee71_prof);

        
        $__internal_ebacbc4c6c823fe3a6b002d9a1535f225ef7855acf03ee543aac02dc6ec82237->leave($__internal_ebacbc4c6c823fe3a6b002d9a1535f225ef7855acf03ee543aac02dc6ec82237_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_bd0a500ed7dfd9c22f1d90fc06b02456f5d286a9182f74d104775041e6d42e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0a500ed7dfd9c22f1d90fc06b02456f5d286a9182f74d104775041e6d42e2c->enter($__internal_bd0a500ed7dfd9c22f1d90fc06b02456f5d286a9182f74d104775041e6d42e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_a7efefd79877fa6a4492abde297eed8a9449c0683acd6aa68f5fa1668f73f5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7efefd79877fa6a4492abde297eed8a9449c0683acd6aa68f5fa1668f73f5ba->enter($__internal_a7efefd79877fa6a4492abde297eed8a9449c0683acd6aa68f5fa1668f73f5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7efefd79877fa6a4492abde297eed8a9449c0683acd6aa68f5fa1668f73f5ba->leave($__internal_a7efefd79877fa6a4492abde297eed8a9449c0683acd6aa68f5fa1668f73f5ba_prof);

        
        $__internal_bd0a500ed7dfd9c22f1d90fc06b02456f5d286a9182f74d104775041e6d42e2c->leave($__internal_bd0a500ed7dfd9c22f1d90fc06b02456f5d286a9182f74d104775041e6d42e2c_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9a67722a94be0f6c93e03fb024d78b14a9cc0fc88fb790c875b2278c0c0b3e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a67722a94be0f6c93e03fb024d78b14a9cc0fc88fb790c875b2278c0c0b3e91->enter($__internal_9a67722a94be0f6c93e03fb024d78b14a9cc0fc88fb790c875b2278c0c0b3e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6be44254aa13e9653bcf592b2216ae2286ad4454ff01aa2717d547263f5126cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be44254aa13e9653bcf592b2216ae2286ad4454ff01aa2717d547263f5126cb->enter($__internal_6be44254aa13e9653bcf592b2216ae2286ad4454ff01aa2717d547263f5126cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_6be44254aa13e9653bcf592b2216ae2286ad4454ff01aa2717d547263f5126cb->leave($__internal_6be44254aa13e9653bcf592b2216ae2286ad4454ff01aa2717d547263f5126cb_prof);

        
        $__internal_9a67722a94be0f6c93e03fb024d78b14a9cc0fc88fb790c875b2278c0c0b3e91->leave($__internal_9a67722a94be0f6c93e03fb024d78b14a9cc0fc88fb790c875b2278c0c0b3e91_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_153d510070550e09ab0c1a8156830c3b6487940c919ae39c325d9d72f50d09e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153d510070550e09ab0c1a8156830c3b6487940c919ae39c325d9d72f50d09e4->enter($__internal_153d510070550e09ab0c1a8156830c3b6487940c919ae39c325d9d72f50d09e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_532b675aeb355fcd3b62dedac1f739934c8e06b71c1f540b8df0a08bfae037dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532b675aeb355fcd3b62dedac1f739934c8e06b71c1f540b8df0a08bfae037dc->enter($__internal_532b675aeb355fcd3b62dedac1f739934c8e06b71c1f540b8df0a08bfae037dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_532b675aeb355fcd3b62dedac1f739934c8e06b71c1f540b8df0a08bfae037dc->leave($__internal_532b675aeb355fcd3b62dedac1f739934c8e06b71c1f540b8df0a08bfae037dc_prof);

        
        $__internal_153d510070550e09ab0c1a8156830c3b6487940c919ae39c325d9d72f50d09e4->leave($__internal_153d510070550e09ab0c1a8156830c3b6487940c919ae39c325d9d72f50d09e4_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_a6e3a20b97d6195560e8839c2fb0146f8fd90f72584e2a0ec3a1179d5aff6cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e3a20b97d6195560e8839c2fb0146f8fd90f72584e2a0ec3a1179d5aff6cfd->enter($__internal_a6e3a20b97d6195560e8839c2fb0146f8fd90f72584e2a0ec3a1179d5aff6cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f1eb29a28b0a1a9d12d59c1dd9fadcb629a886f6cfbe7536798ae406f0582f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eb29a28b0a1a9d12d59c1dd9fadcb629a886f6cfbe7536798ae406f0582f80->enter($__internal_f1eb29a28b0a1a9d12d59c1dd9fadcb629a886f6cfbe7536798ae406f0582f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_f1eb29a28b0a1a9d12d59c1dd9fadcb629a886f6cfbe7536798ae406f0582f80->leave($__internal_f1eb29a28b0a1a9d12d59c1dd9fadcb629a886f6cfbe7536798ae406f0582f80_prof);

        
        $__internal_a6e3a20b97d6195560e8839c2fb0146f8fd90f72584e2a0ec3a1179d5aff6cfd->leave($__internal_a6e3a20b97d6195560e8839c2fb0146f8fd90f72584e2a0ec3a1179d5aff6cfd_prof);

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
