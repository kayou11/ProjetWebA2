<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_76772a47589e694f18f53cf92f6bad392dbbf98f68c484557bc127d9067c31a0 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f99457ed477c9b26ba0a60ad9068acbfecac89caf859f683fb01f541a591033c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99457ed477c9b26ba0a60ad9068acbfecac89caf859f683fb01f541a591033c->enter($__internal_f99457ed477c9b26ba0a60ad9068acbfecac89caf859f683fb01f541a591033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_40ba70f2cc3c488babd5f90f81e2de1a47a9bc829dbfc1ddb348853d99aa9008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ba70f2cc3c488babd5f90f81e2de1a47a9bc829dbfc1ddb348853d99aa9008->enter($__internal_40ba70f2cc3c488babd5f90f81e2de1a47a9bc829dbfc1ddb348853d99aa9008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99457ed477c9b26ba0a60ad9068acbfecac89caf859f683fb01f541a591033c->leave($__internal_f99457ed477c9b26ba0a60ad9068acbfecac89caf859f683fb01f541a591033c_prof);

        
        $__internal_40ba70f2cc3c488babd5f90f81e2de1a47a9bc829dbfc1ddb348853d99aa9008->leave($__internal_40ba70f2cc3c488babd5f90f81e2de1a47a9bc829dbfc1ddb348853d99aa9008_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f1703dde978a09665fc6f6cac905168b643dc2581f1ad6cdb61e0c66c0046d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1703dde978a09665fc6f6cac905168b643dc2581f1ad6cdb61e0c66c0046d4f->enter($__internal_f1703dde978a09665fc6f6cac905168b643dc2581f1ad6cdb61e0c66c0046d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_1a3e94baef87747de953a071d7e26d49d0f785db614b377bcfe25990379fab70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3e94baef87747de953a071d7e26d49d0f785db614b377bcfe25990379fab70->enter($__internal_1a3e94baef87747de953a071d7e26d49d0f785db614b377bcfe25990379fab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_1a3e94baef87747de953a071d7e26d49d0f785db614b377bcfe25990379fab70->leave($__internal_1a3e94baef87747de953a071d7e26d49d0f785db614b377bcfe25990379fab70_prof);

        
        $__internal_f1703dde978a09665fc6f6cac905168b643dc2581f1ad6cdb61e0c66c0046d4f->leave($__internal_f1703dde978a09665fc6f6cac905168b643dc2581f1ad6cdb61e0c66c0046d4f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a1c860a2604ea73d44161fb5b3ec16234977210681f9f23ca9469e9f665836d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c860a2604ea73d44161fb5b3ec16234977210681f9f23ca9469e9f665836d4->enter($__internal_a1c860a2604ea73d44161fb5b3ec16234977210681f9f23ca9469e9f665836d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_23b35af10f8196f3abea5017ec0b17c43127090d0f8d62e6c617b2d40fbba209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b35af10f8196f3abea5017ec0b17c43127090d0f8d62e6c617b2d40fbba209->enter($__internal_23b35af10f8196f3abea5017ec0b17c43127090d0f8d62e6c617b2d40fbba209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_23b35af10f8196f3abea5017ec0b17c43127090d0f8d62e6c617b2d40fbba209->leave($__internal_23b35af10f8196f3abea5017ec0b17c43127090d0f8d62e6c617b2d40fbba209_prof);

        
        $__internal_a1c860a2604ea73d44161fb5b3ec16234977210681f9f23ca9469e9f665836d4->leave($__internal_a1c860a2604ea73d44161fb5b3ec16234977210681f9f23ca9469e9f665836d4_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ea2b670c7f1bacf07082724b11653900d07afb5ad06e6bbb2ca107cc7fae689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea2b670c7f1bacf07082724b11653900d07afb5ad06e6bbb2ca107cc7fae689->enter($__internal_2ea2b670c7f1bacf07082724b11653900d07afb5ad06e6bbb2ca107cc7fae689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ba05ee08c102e83116e95386bb207ebad63206de0f3f63a8bfb0b627075a868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba05ee08c102e83116e95386bb207ebad63206de0f3f63a8bfb0b627075a868->enter($__internal_6ba05ee08c102e83116e95386bb207ebad63206de0f3f63a8bfb0b627075a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !((isset($context["batch_translation_domain"]) || array_key_exists("batch_translation_domain", $context) ? $context["batch_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "batch_translation_domain" does not exist.', 24, $this->getSourceContext()); })()) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["action_label"]) || array_key_exists("action_label", $context) ? $context["action_label"] : (function () { throw new Twig_Error_Runtime('Variable "action_label" does not exist.', 25, $this->getSourceContext()); })()), array(), (isset($context["batch_translation_domain"]) || array_key_exists("batch_translation_domain", $context) ? $context["batch_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "batch_translation_domain" does not exist.', 25, $this->getSourceContext()); })()));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) || array_key_exists("action_label", $context) ? $context["action_label"] : (function () { throw new Twig_Error_Runtime('Variable "action_label" does not exist.', 27, $this->getSourceContext()); })())), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 30, $this->getSourceContext()); })()), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 33, $this->getSourceContext()); })()), "idx", array())), array("%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 33, $this->getSourceContext()); })()), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 37, $this->getSourceContext()); })()), "generateUrl", array(0 => "batch", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 37, $this->getSourceContext()); })()), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 39, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 48, $this->getSourceContext()); })()), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 48, $this->getSourceContext()); })()), "hasAccess", array(0 => "list"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 51, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6ba05ee08c102e83116e95386bb207ebad63206de0f3f63a8bfb0b627075a868->leave($__internal_6ba05ee08c102e83116e95386bb207ebad63206de0f3f63a8bfb0b627075a868_prof);

        
        $__internal_2ea2b670c7f1bacf07082724b11653900d07afb5ad06e6bbb2ca107cc7fae689->leave($__internal_2ea2b670c7f1bacf07082724b11653900d07afb5ad06e6bbb2ca107cc7fae689_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
