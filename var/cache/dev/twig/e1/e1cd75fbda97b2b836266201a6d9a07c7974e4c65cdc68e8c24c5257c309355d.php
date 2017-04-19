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
        $__internal_931094a89c46e9e7412fa19ff7e7041e2c2f5d6b34f528b68c41f36ca5ffef36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931094a89c46e9e7412fa19ff7e7041e2c2f5d6b34f528b68c41f36ca5ffef36->enter($__internal_931094a89c46e9e7412fa19ff7e7041e2c2f5d6b34f528b68c41f36ca5ffef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_629566a39c7f48a76f95364bf961148cb51291ba6e74394fabac5a5eb2666122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629566a39c7f48a76f95364bf961148cb51291ba6e74394fabac5a5eb2666122->enter($__internal_629566a39c7f48a76f95364bf961148cb51291ba6e74394fabac5a5eb2666122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931094a89c46e9e7412fa19ff7e7041e2c2f5d6b34f528b68c41f36ca5ffef36->leave($__internal_931094a89c46e9e7412fa19ff7e7041e2c2f5d6b34f528b68c41f36ca5ffef36_prof);

        
        $__internal_629566a39c7f48a76f95364bf961148cb51291ba6e74394fabac5a5eb2666122->leave($__internal_629566a39c7f48a76f95364bf961148cb51291ba6e74394fabac5a5eb2666122_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c09a3bf15618ee4cf7a13f01f0a75efe213dfcf77d9419482fe33faa2bd906f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09a3bf15618ee4cf7a13f01f0a75efe213dfcf77d9419482fe33faa2bd906f6->enter($__internal_c09a3bf15618ee4cf7a13f01f0a75efe213dfcf77d9419482fe33faa2bd906f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_9edce753a238b7c53327d47497ea2dad048db938471836c8eed3b17b08f1a83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edce753a238b7c53327d47497ea2dad048db938471836c8eed3b17b08f1a83f->enter($__internal_9edce753a238b7c53327d47497ea2dad048db938471836c8eed3b17b08f1a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_9edce753a238b7c53327d47497ea2dad048db938471836c8eed3b17b08f1a83f->leave($__internal_9edce753a238b7c53327d47497ea2dad048db938471836c8eed3b17b08f1a83f_prof);

        
        $__internal_c09a3bf15618ee4cf7a13f01f0a75efe213dfcf77d9419482fe33faa2bd906f6->leave($__internal_c09a3bf15618ee4cf7a13f01f0a75efe213dfcf77d9419482fe33faa2bd906f6_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_df050c51b68daf470d7eec549828ed915fb5b46cd77358a78d9e14ac15ebdd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df050c51b68daf470d7eec549828ed915fb5b46cd77358a78d9e14ac15ebdd8c->enter($__internal_df050c51b68daf470d7eec549828ed915fb5b46cd77358a78d9e14ac15ebdd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_7ac31b45eaaa11a888f9af4255bb233bedd777ecb0a0fc9ec61e7f851cc533ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac31b45eaaa11a888f9af4255bb233bedd777ecb0a0fc9ec61e7f851cc533ee->enter($__internal_7ac31b45eaaa11a888f9af4255bb233bedd777ecb0a0fc9ec61e7f851cc533ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_7ac31b45eaaa11a888f9af4255bb233bedd777ecb0a0fc9ec61e7f851cc533ee->leave($__internal_7ac31b45eaaa11a888f9af4255bb233bedd777ecb0a0fc9ec61e7f851cc533ee_prof);

        
        $__internal_df050c51b68daf470d7eec549828ed915fb5b46cd77358a78d9e14ac15ebdd8c->leave($__internal_df050c51b68daf470d7eec549828ed915fb5b46cd77358a78d9e14ac15ebdd8c_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e881fc9f84778b3060533bbdd0f8c98ad74ec7e2195c0054b104642de461d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e881fc9f84778b3060533bbdd0f8c98ad74ec7e2195c0054b104642de461d9d->enter($__internal_7e881fc9f84778b3060533bbdd0f8c98ad74ec7e2195c0054b104642de461d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_32594e05eeafec2058785d4de22e95fdd8cb5ebe854bd4fa7d6afa5aaba1a715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32594e05eeafec2058785d4de22e95fdd8cb5ebe854bd4fa7d6afa5aaba1a715->enter($__internal_32594e05eeafec2058785d4de22e95fdd8cb5ebe854bd4fa7d6afa5aaba1a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_32594e05eeafec2058785d4de22e95fdd8cb5ebe854bd4fa7d6afa5aaba1a715->leave($__internal_32594e05eeafec2058785d4de22e95fdd8cb5ebe854bd4fa7d6afa5aaba1a715_prof);

        
        $__internal_7e881fc9f84778b3060533bbdd0f8c98ad74ec7e2195c0054b104642de461d9d->leave($__internal_7e881fc9f84778b3060533bbdd0f8c98ad74ec7e2195c0054b104642de461d9d_prof);

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
