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
        $__internal_af84006051bbd85d9ef6e17bbfdb77cec8b2e3313452179f6ccc5aebdb080e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af84006051bbd85d9ef6e17bbfdb77cec8b2e3313452179f6ccc5aebdb080e5a->enter($__internal_af84006051bbd85d9ef6e17bbfdb77cec8b2e3313452179f6ccc5aebdb080e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_fe0b914aee5aaa08ef18910627f22f5ec6ed5bdc242cec1b019494606b2d52db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0b914aee5aaa08ef18910627f22f5ec6ed5bdc242cec1b019494606b2d52db->enter($__internal_fe0b914aee5aaa08ef18910627f22f5ec6ed5bdc242cec1b019494606b2d52db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af84006051bbd85d9ef6e17bbfdb77cec8b2e3313452179f6ccc5aebdb080e5a->leave($__internal_af84006051bbd85d9ef6e17bbfdb77cec8b2e3313452179f6ccc5aebdb080e5a_prof);

        
        $__internal_fe0b914aee5aaa08ef18910627f22f5ec6ed5bdc242cec1b019494606b2d52db->leave($__internal_fe0b914aee5aaa08ef18910627f22f5ec6ed5bdc242cec1b019494606b2d52db_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bc103478ca06d0033c076e90fd421d455d35cf954cab63c09738df08a6b683ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc103478ca06d0033c076e90fd421d455d35cf954cab63c09738df08a6b683ab->enter($__internal_bc103478ca06d0033c076e90fd421d455d35cf954cab63c09738df08a6b683ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_91a4b23950a748f708a9ee2423669052792de9473a53b50030d98794ca73fafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a4b23950a748f708a9ee2423669052792de9473a53b50030d98794ca73fafc->enter($__internal_91a4b23950a748f708a9ee2423669052792de9473a53b50030d98794ca73fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_91a4b23950a748f708a9ee2423669052792de9473a53b50030d98794ca73fafc->leave($__internal_91a4b23950a748f708a9ee2423669052792de9473a53b50030d98794ca73fafc_prof);

        
        $__internal_bc103478ca06d0033c076e90fd421d455d35cf954cab63c09738df08a6b683ab->leave($__internal_bc103478ca06d0033c076e90fd421d455d35cf954cab63c09738df08a6b683ab_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ac561caf08d9deda4ece9a2f8a77017e60203a66de32c989a73f32605520fd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac561caf08d9deda4ece9a2f8a77017e60203a66de32c989a73f32605520fd9c->enter($__internal_ac561caf08d9deda4ece9a2f8a77017e60203a66de32c989a73f32605520fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_458c98b2018b8edb812e9d694626dcae3a1eb4cd71419acd3f480610ebe319ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458c98b2018b8edb812e9d694626dcae3a1eb4cd71419acd3f480610ebe319ec->enter($__internal_458c98b2018b8edb812e9d694626dcae3a1eb4cd71419acd3f480610ebe319ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_458c98b2018b8edb812e9d694626dcae3a1eb4cd71419acd3f480610ebe319ec->leave($__internal_458c98b2018b8edb812e9d694626dcae3a1eb4cd71419acd3f480610ebe319ec_prof);

        
        $__internal_ac561caf08d9deda4ece9a2f8a77017e60203a66de32c989a73f32605520fd9c->leave($__internal_ac561caf08d9deda4ece9a2f8a77017e60203a66de32c989a73f32605520fd9c_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_27327019a087c512fa5a39081eb0e2abc2f3fe6e111af2db62e8266c296024d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27327019a087c512fa5a39081eb0e2abc2f3fe6e111af2db62e8266c296024d2->enter($__internal_27327019a087c512fa5a39081eb0e2abc2f3fe6e111af2db62e8266c296024d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1018289831424d38b18fdc6eec8b8eed16cd298e23a02a973dd29b45945d1344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1018289831424d38b18fdc6eec8b8eed16cd298e23a02a973dd29b45945d1344->enter($__internal_1018289831424d38b18fdc6eec8b8eed16cd298e23a02a973dd29b45945d1344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1018289831424d38b18fdc6eec8b8eed16cd298e23a02a973dd29b45945d1344->leave($__internal_1018289831424d38b18fdc6eec8b8eed16cd298e23a02a973dd29b45945d1344_prof);

        
        $__internal_27327019a087c512fa5a39081eb0e2abc2f3fe6e111af2db62e8266c296024d2->leave($__internal_27327019a087c512fa5a39081eb0e2abc2f3fe6e111af2db62e8266c296024d2_prof);

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
