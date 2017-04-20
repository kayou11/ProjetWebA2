<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_c7f713c4fadcadd5342f22b92f010a4b182b5dd15bcd53b193282847373455ed extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9db14e1eefbcd0d07b9958d15417b267a63459b3f5d18e2b2420c625b522d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9db14e1eefbcd0d07b9958d15417b267a63459b3f5d18e2b2420c625b522d9->enter($__internal_de9db14e1eefbcd0d07b9958d15417b267a63459b3f5d18e2b2420c625b522d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_b20d02bed96c16797bdf208c2faaf8f1d9738f859217b7729a1fcf780d6b405a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20d02bed96c16797bdf208c2faaf8f1d9738f859217b7729a1fcf780d6b405a->enter($__internal_b20d02bed96c16797bdf208c2faaf8f1d9738f859217b7729a1fcf780d6b405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9db14e1eefbcd0d07b9958d15417b267a63459b3f5d18e2b2420c625b522d9->leave($__internal_de9db14e1eefbcd0d07b9958d15417b267a63459b3f5d18e2b2420c625b522d9_prof);

        
        $__internal_b20d02bed96c16797bdf208c2faaf8f1d9738f859217b7729a1fcf780d6b405a->leave($__internal_b20d02bed96c16797bdf208c2faaf8f1d9738f859217b7729a1fcf780d6b405a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ea3da139f49709a3ed0006543abf97a79a15c6bdc7ac915640681047f49b10c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3da139f49709a3ed0006543abf97a79a15c6bdc7ac915640681047f49b10c4->enter($__internal_ea3da139f49709a3ed0006543abf97a79a15c6bdc7ac915640681047f49b10c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_651f3e07b9559968e6217d6883a8f400950bea627eaf7fcbd854b8724ebeda74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f3e07b9559968e6217d6883a8f400950bea627eaf7fcbd854b8724ebeda74->enter($__internal_651f3e07b9559968e6217d6883a8f400950bea627eaf7fcbd854b8724ebeda74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_651f3e07b9559968e6217d6883a8f400950bea627eaf7fcbd854b8724ebeda74->leave($__internal_651f3e07b9559968e6217d6883a8f400950bea627eaf7fcbd854b8724ebeda74_prof);

        
        $__internal_ea3da139f49709a3ed0006543abf97a79a15c6bdc7ac915640681047f49b10c4->leave($__internal_ea3da139f49709a3ed0006543abf97a79a15c6bdc7ac915640681047f49b10c4_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_35366877947c88a1c729293bdab077619dcf9aac44438ffb336e0a3019d9d720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35366877947c88a1c729293bdab077619dcf9aac44438ffb336e0a3019d9d720->enter($__internal_35366877947c88a1c729293bdab077619dcf9aac44438ffb336e0a3019d9d720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_f4bc1c3898fb8659652265a01122264069ffda86d157d780e850d630f981a82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bc1c3898fb8659652265a01122264069ffda86d157d780e850d630f981a82c->enter($__internal_f4bc1c3898fb8659652265a01122264069ffda86d157d780e850d630f981a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f4bc1c3898fb8659652265a01122264069ffda86d157d780e850d630f981a82c->leave($__internal_f4bc1c3898fb8659652265a01122264069ffda86d157d780e850d630f981a82c_prof);

        
        $__internal_35366877947c88a1c729293bdab077619dcf9aac44438ffb336e0a3019d9d720->leave($__internal_35366877947c88a1c729293bdab077619dcf9aac44438ffb336e0a3019d9d720_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_e62bd15ffb98f63fd8deed47262c6b3c073f5831c7ac5e5f71dc336accfe7afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62bd15ffb98f63fd8deed47262c6b3c073f5831c7ac5e5f71dc336accfe7afb->enter($__internal_e62bd15ffb98f63fd8deed47262c6b3c073f5831c7ac5e5f71dc336accfe7afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_95ce8a9ddd290f505cfede74ab646c7e42a9dc8b37ef97ff721337f33d1f11e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ce8a9ddd290f505cfede74ab646c7e42a9dc8b37ef97ff721337f33d1f11e1->enter($__internal_95ce8a9ddd290f505cfede74ab646c7e42a9dc8b37ef97ff721337f33d1f11e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 28, $this->getSourceContext()); })())), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 31, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 36, $this->getSourceContext()); })())), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 39, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_95ce8a9ddd290f505cfede74ab646c7e42a9dc8b37ef97ff721337f33d1f11e1->leave($__internal_95ce8a9ddd290f505cfede74ab646c7e42a9dc8b37ef97ff721337f33d1f11e1_prof);

        
        $__internal_e62bd15ffb98f63fd8deed47262c6b3c073f5831c7ac5e5f71dc336accfe7afb->leave($__internal_e62bd15ffb98f63fd8deed47262c6b3c073f5831c7ac5e5f71dc336accfe7afb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
