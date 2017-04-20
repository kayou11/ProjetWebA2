<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a56267d604cf4b34889bcdf420d1fc64df9c97fcb4b7828108fb63b5a2d428b7 extends Twig_Template
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
        $__internal_d7247b8f3240e8adcd4bbed81bef9a71c75ad34124088734fecafe7321b7af62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7247b8f3240e8adcd4bbed81bef9a71c75ad34124088734fecafe7321b7af62->enter($__internal_d7247b8f3240e8adcd4bbed81bef9a71c75ad34124088734fecafe7321b7af62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_8e695892c226e26fb67dc04323e89601a5a87011b0a2cdb33e6e3b011a71c8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e695892c226e26fb67dc04323e89601a5a87011b0a2cdb33e6e3b011a71c8e9->enter($__internal_8e695892c226e26fb67dc04323e89601a5a87011b0a2cdb33e6e3b011a71c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7247b8f3240e8adcd4bbed81bef9a71c75ad34124088734fecafe7321b7af62->leave($__internal_d7247b8f3240e8adcd4bbed81bef9a71c75ad34124088734fecafe7321b7af62_prof);

        
        $__internal_8e695892c226e26fb67dc04323e89601a5a87011b0a2cdb33e6e3b011a71c8e9->leave($__internal_8e695892c226e26fb67dc04323e89601a5a87011b0a2cdb33e6e3b011a71c8e9_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_190740b0de0d3a3150549b0f3efc3ed62f772c45191358c8aa709e51dd851aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190740b0de0d3a3150549b0f3efc3ed62f772c45191358c8aa709e51dd851aea->enter($__internal_190740b0de0d3a3150549b0f3efc3ed62f772c45191358c8aa709e51dd851aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_9107bd8fc477ae8218453a9e1da44e606db0bf9d58087fcc86a3285bbec4610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9107bd8fc477ae8218453a9e1da44e606db0bf9d58087fcc86a3285bbec4610b->enter($__internal_9107bd8fc477ae8218453a9e1da44e606db0bf9d58087fcc86a3285bbec4610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_9107bd8fc477ae8218453a9e1da44e606db0bf9d58087fcc86a3285bbec4610b->leave($__internal_9107bd8fc477ae8218453a9e1da44e606db0bf9d58087fcc86a3285bbec4610b_prof);

        
        $__internal_190740b0de0d3a3150549b0f3efc3ed62f772c45191358c8aa709e51dd851aea->leave($__internal_190740b0de0d3a3150549b0f3efc3ed62f772c45191358c8aa709e51dd851aea_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0c6e3f1235ce4517da2846dfe86dd772862d9f7c0db83479ade7cdda4665728a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6e3f1235ce4517da2846dfe86dd772862d9f7c0db83479ade7cdda4665728a->enter($__internal_0c6e3f1235ce4517da2846dfe86dd772862d9f7c0db83479ade7cdda4665728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_b02d3118da601e34e44ce074bbf53cc90ed5a782ab37e37dfcddf6480e191dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02d3118da601e34e44ce074bbf53cc90ed5a782ab37e37dfcddf6480e191dce->enter($__internal_b02d3118da601e34e44ce074bbf53cc90ed5a782ab37e37dfcddf6480e191dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_b02d3118da601e34e44ce074bbf53cc90ed5a782ab37e37dfcddf6480e191dce->leave($__internal_b02d3118da601e34e44ce074bbf53cc90ed5a782ab37e37dfcddf6480e191dce_prof);

        
        $__internal_0c6e3f1235ce4517da2846dfe86dd772862d9f7c0db83479ade7cdda4665728a->leave($__internal_0c6e3f1235ce4517da2846dfe86dd772862d9f7c0db83479ade7cdda4665728a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_1dc48090c4377ed35ad2f8bed219d63d98089e4b1fb839fb8d6d11ee53aab7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc48090c4377ed35ad2f8bed219d63d98089e4b1fb839fb8d6d11ee53aab7e8->enter($__internal_1dc48090c4377ed35ad2f8bed219d63d98089e4b1fb839fb8d6d11ee53aab7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f579af380e524fe0ea570682a76dcedb2d0aea9dc58eff46abbbf52ab905db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f579af380e524fe0ea570682a76dcedb2d0aea9dc58eff46abbbf52ab905db9->enter($__internal_2f579af380e524fe0ea570682a76dcedb2d0aea9dc58eff46abbbf52ab905db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_2f579af380e524fe0ea570682a76dcedb2d0aea9dc58eff46abbbf52ab905db9->leave($__internal_2f579af380e524fe0ea570682a76dcedb2d0aea9dc58eff46abbbf52ab905db9_prof);

        
        $__internal_1dc48090c4377ed35ad2f8bed219d63d98089e4b1fb839fb8d6d11ee53aab7e8->leave($__internal_1dc48090c4377ed35ad2f8bed219d63d98089e4b1fb839fb8d6d11ee53aab7e8_prof);

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
