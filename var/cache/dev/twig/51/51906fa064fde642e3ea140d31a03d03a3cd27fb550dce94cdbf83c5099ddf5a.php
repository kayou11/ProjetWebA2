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
        $__internal_13d91a5355d199e9e944e41e8a2bb936983bb43ce6dc0f5c238a9ec267bbd4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d91a5355d199e9e944e41e8a2bb936983bb43ce6dc0f5c238a9ec267bbd4f9->enter($__internal_13d91a5355d199e9e944e41e8a2bb936983bb43ce6dc0f5c238a9ec267bbd4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_0db378206b2ec41ae2d9321f24f14c555d60b596bc8b8b026b12a25e0bb21a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db378206b2ec41ae2d9321f24f14c555d60b596bc8b8b026b12a25e0bb21a80->enter($__internal_0db378206b2ec41ae2d9321f24f14c555d60b596bc8b8b026b12a25e0bb21a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d91a5355d199e9e944e41e8a2bb936983bb43ce6dc0f5c238a9ec267bbd4f9->leave($__internal_13d91a5355d199e9e944e41e8a2bb936983bb43ce6dc0f5c238a9ec267bbd4f9_prof);

        
        $__internal_0db378206b2ec41ae2d9321f24f14c555d60b596bc8b8b026b12a25e0bb21a80->leave($__internal_0db378206b2ec41ae2d9321f24f14c555d60b596bc8b8b026b12a25e0bb21a80_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_430ac22581943f356c4c840b14f66f96bd746f3d7c9c537262e6d0c18633deb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430ac22581943f356c4c840b14f66f96bd746f3d7c9c537262e6d0c18633deb2->enter($__internal_430ac22581943f356c4c840b14f66f96bd746f3d7c9c537262e6d0c18633deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b8208cad15cc3d37e3285fdf0489febe87cf918feae14aa6fef94a4c2be749d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8208cad15cc3d37e3285fdf0489febe87cf918feae14aa6fef94a4c2be749d6->enter($__internal_b8208cad15cc3d37e3285fdf0489febe87cf918feae14aa6fef94a4c2be749d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_b8208cad15cc3d37e3285fdf0489febe87cf918feae14aa6fef94a4c2be749d6->leave($__internal_b8208cad15cc3d37e3285fdf0489febe87cf918feae14aa6fef94a4c2be749d6_prof);

        
        $__internal_430ac22581943f356c4c840b14f66f96bd746f3d7c9c537262e6d0c18633deb2->leave($__internal_430ac22581943f356c4c840b14f66f96bd746f3d7c9c537262e6d0c18633deb2_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_144d843fb19e86ce0e92e90d84d2c5c1f4ff9c68aae4d169297f119741db496a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144d843fb19e86ce0e92e90d84d2c5c1f4ff9c68aae4d169297f119741db496a->enter($__internal_144d843fb19e86ce0e92e90d84d2c5c1f4ff9c68aae4d169297f119741db496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_7c05b1082e79c33ca1f662d93d312b13fb347c4c7107e7598bf182f10b829ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c05b1082e79c33ca1f662d93d312b13fb347c4c7107e7598bf182f10b829ae1->enter($__internal_7c05b1082e79c33ca1f662d93d312b13fb347c4c7107e7598bf182f10b829ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_7c05b1082e79c33ca1f662d93d312b13fb347c4c7107e7598bf182f10b829ae1->leave($__internal_7c05b1082e79c33ca1f662d93d312b13fb347c4c7107e7598bf182f10b829ae1_prof);

        
        $__internal_144d843fb19e86ce0e92e90d84d2c5c1f4ff9c68aae4d169297f119741db496a->leave($__internal_144d843fb19e86ce0e92e90d84d2c5c1f4ff9c68aae4d169297f119741db496a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_20a1d53aa5fe8ae271c6a182957b9fb64b15e289b6fa88fb813b5d95a5a4f398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a1d53aa5fe8ae271c6a182957b9fb64b15e289b6fa88fb813b5d95a5a4f398->enter($__internal_20a1d53aa5fe8ae271c6a182957b9fb64b15e289b6fa88fb813b5d95a5a4f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac2c3d30bfe745d7dbb16cbdbb40fc9f5ad2bea09bc53844ddf68855bc37a725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2c3d30bfe745d7dbb16cbdbb40fc9f5ad2bea09bc53844ddf68855bc37a725->enter($__internal_ac2c3d30bfe745d7dbb16cbdbb40fc9f5ad2bea09bc53844ddf68855bc37a725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_ac2c3d30bfe745d7dbb16cbdbb40fc9f5ad2bea09bc53844ddf68855bc37a725->leave($__internal_ac2c3d30bfe745d7dbb16cbdbb40fc9f5ad2bea09bc53844ddf68855bc37a725_prof);

        
        $__internal_20a1d53aa5fe8ae271c6a182957b9fb64b15e289b6fa88fb813b5d95a5a4f398->leave($__internal_20a1d53aa5fe8ae271c6a182957b9fb64b15e289b6fa88fb813b5d95a5a4f398_prof);

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
