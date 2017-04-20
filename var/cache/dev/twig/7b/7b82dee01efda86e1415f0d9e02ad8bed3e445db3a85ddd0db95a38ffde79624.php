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
        $__internal_cc8e4c661254b35439f39beffc6efd3591d059dd7909296f77ae0dd05753758f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8e4c661254b35439f39beffc6efd3591d059dd7909296f77ae0dd05753758f->enter($__internal_cc8e4c661254b35439f39beffc6efd3591d059dd7909296f77ae0dd05753758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_c9c87ab8ed13e17d7767de42de9bdb8372edd8520537173113de5ed02d72a38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c87ab8ed13e17d7767de42de9bdb8372edd8520537173113de5ed02d72a38e->enter($__internal_c9c87ab8ed13e17d7767de42de9bdb8372edd8520537173113de5ed02d72a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8e4c661254b35439f39beffc6efd3591d059dd7909296f77ae0dd05753758f->leave($__internal_cc8e4c661254b35439f39beffc6efd3591d059dd7909296f77ae0dd05753758f_prof);

        
        $__internal_c9c87ab8ed13e17d7767de42de9bdb8372edd8520537173113de5ed02d72a38e->leave($__internal_c9c87ab8ed13e17d7767de42de9bdb8372edd8520537173113de5ed02d72a38e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_19c96e5fdbda3299ee65cef89f9a9ffee22a3dda00f44e0f4d1b52383ed63402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c96e5fdbda3299ee65cef89f9a9ffee22a3dda00f44e0f4d1b52383ed63402->enter($__internal_19c96e5fdbda3299ee65cef89f9a9ffee22a3dda00f44e0f4d1b52383ed63402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08406e39fe1299a7cd3bea7ddd01bc08460a1dd6a88cccb3c098544d907b966c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08406e39fe1299a7cd3bea7ddd01bc08460a1dd6a88cccb3c098544d907b966c->enter($__internal_08406e39fe1299a7cd3bea7ddd01bc08460a1dd6a88cccb3c098544d907b966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_08406e39fe1299a7cd3bea7ddd01bc08460a1dd6a88cccb3c098544d907b966c->leave($__internal_08406e39fe1299a7cd3bea7ddd01bc08460a1dd6a88cccb3c098544d907b966c_prof);

        
        $__internal_19c96e5fdbda3299ee65cef89f9a9ffee22a3dda00f44e0f4d1b52383ed63402->leave($__internal_19c96e5fdbda3299ee65cef89f9a9ffee22a3dda00f44e0f4d1b52383ed63402_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_894bb97261f97f8d6512f971a665efe7ec966831d0c8a881ee1e38dc9d346ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894bb97261f97f8d6512f971a665efe7ec966831d0c8a881ee1e38dc9d346ec2->enter($__internal_894bb97261f97f8d6512f971a665efe7ec966831d0c8a881ee1e38dc9d346ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_bf5189da7877136676554ec98d6b2c81d65253aed33c5194ad754af0e1836bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5189da7877136676554ec98d6b2c81d65253aed33c5194ad754af0e1836bec->enter($__internal_bf5189da7877136676554ec98d6b2c81d65253aed33c5194ad754af0e1836bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf5189da7877136676554ec98d6b2c81d65253aed33c5194ad754af0e1836bec->leave($__internal_bf5189da7877136676554ec98d6b2c81d65253aed33c5194ad754af0e1836bec_prof);

        
        $__internal_894bb97261f97f8d6512f971a665efe7ec966831d0c8a881ee1e38dc9d346ec2->leave($__internal_894bb97261f97f8d6512f971a665efe7ec966831d0c8a881ee1e38dc9d346ec2_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3df827c93595d054679f4d2449d0f68bb4d1ce0c4bd9b8923ca218927421d5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df827c93595d054679f4d2449d0f68bb4d1ce0c4bd9b8923ca218927421d5fd->enter($__internal_3df827c93595d054679f4d2449d0f68bb4d1ce0c4bd9b8923ca218927421d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_39454d7604ded4d4d2f9d87243ad16609543bbc0fd5d308eb1f1912557a8330d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39454d7604ded4d4d2f9d87243ad16609543bbc0fd5d308eb1f1912557a8330d->enter($__internal_39454d7604ded4d4d2f9d87243ad16609543bbc0fd5d308eb1f1912557a8330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_39454d7604ded4d4d2f9d87243ad16609543bbc0fd5d308eb1f1912557a8330d->leave($__internal_39454d7604ded4d4d2f9d87243ad16609543bbc0fd5d308eb1f1912557a8330d_prof);

        
        $__internal_3df827c93595d054679f4d2449d0f68bb4d1ce0c4bd9b8923ca218927421d5fd->leave($__internal_3df827c93595d054679f4d2449d0f68bb4d1ce0c4bd9b8923ca218927421d5fd_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0d40dbe9f6575ef7385a927b482e8b04d38eed3e4a97504b777ab574bdb5cf6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d40dbe9f6575ef7385a927b482e8b04d38eed3e4a97504b777ab574bdb5cf6a->enter($__internal_0d40dbe9f6575ef7385a927b482e8b04d38eed3e4a97504b777ab574bdb5cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4c40b37a5ca9bdbdd03a4c7695679b6e55956229c35c4046701365cd89d18318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c40b37a5ca9bdbdd03a4c7695679b6e55956229c35c4046701365cd89d18318->enter($__internal_4c40b37a5ca9bdbdd03a4c7695679b6e55956229c35c4046701365cd89d18318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 30, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 30, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_4c40b37a5ca9bdbdd03a4c7695679b6e55956229c35c4046701365cd89d18318->leave($__internal_4c40b37a5ca9bdbdd03a4c7695679b6e55956229c35c4046701365cd89d18318_prof);

        
        $__internal_0d40dbe9f6575ef7385a927b482e8b04d38eed3e4a97504b777ab574bdb5cf6a->leave($__internal_0d40dbe9f6575ef7385a927b482e8b04d38eed3e4a97504b777ab574bdb5cf6a_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_30241a29817732c23f803d4c752aa777d2308c3f39a10665ec37e44efdaa1146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30241a29817732c23f803d4c752aa777d2308c3f39a10665ec37e44efdaa1146->enter($__internal_30241a29817732c23f803d4c752aa777d2308c3f39a10665ec37e44efdaa1146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1c09f7b79f4e64f1cf3a131d098530f44c38d765b3d60b72c696c7fab2fb9cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c09f7b79f4e64f1cf3a131d098530f44c38d765b3d60b72c696c7fab2fb9cae->enter($__internal_1c09f7b79f4e64f1cf3a131d098530f44c38d765b3d60b72c696c7fab2fb9cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_1c09f7b79f4e64f1cf3a131d098530f44c38d765b3d60b72c696c7fab2fb9cae->leave($__internal_1c09f7b79f4e64f1cf3a131d098530f44c38d765b3d60b72c696c7fab2fb9cae_prof);

        
        $__internal_30241a29817732c23f803d4c752aa777d2308c3f39a10665ec37e44efdaa1146->leave($__internal_30241a29817732c23f803d4c752aa777d2308c3f39a10665ec37e44efdaa1146_prof);

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
