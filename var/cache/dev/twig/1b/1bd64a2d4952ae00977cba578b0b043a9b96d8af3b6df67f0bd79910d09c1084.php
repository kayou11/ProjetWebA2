<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_9b1a2a466fd54929d34522c715f923b32d362b74accf950fcea019e7081ed3ab extends Twig_Template
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
        $__internal_0cde9cc52758197d5b02d0d0c740d67c9e149271e2ae083fb68056ed3bbd390d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cde9cc52758197d5b02d0d0c740d67c9e149271e2ae083fb68056ed3bbd390d->enter($__internal_0cde9cc52758197d5b02d0d0c740d67c9e149271e2ae083fb68056ed3bbd390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_4dfb7f1d65666232d5e1ff9ddca774ee733e6de404ec23c0a2cebe12ed4ab316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb7f1d65666232d5e1ff9ddca774ee733e6de404ec23c0a2cebe12ed4ab316->enter($__internal_4dfb7f1d65666232d5e1ff9ddca774ee733e6de404ec23c0a2cebe12ed4ab316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cde9cc52758197d5b02d0d0c740d67c9e149271e2ae083fb68056ed3bbd390d->leave($__internal_0cde9cc52758197d5b02d0d0c740d67c9e149271e2ae083fb68056ed3bbd390d_prof);

        
        $__internal_4dfb7f1d65666232d5e1ff9ddca774ee733e6de404ec23c0a2cebe12ed4ab316->leave($__internal_4dfb7f1d65666232d5e1ff9ddca774ee733e6de404ec23c0a2cebe12ed4ab316_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c5b7ff11d1cafff57b99074f6b68d040e91384ada6f59e7d3f7b8f817d8d7e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7ff11d1cafff57b99074f6b68d040e91384ada6f59e7d3f7b8f817d8d7e74->enter($__internal_c5b7ff11d1cafff57b99074f6b68d040e91384ada6f59e7d3f7b8f817d8d7e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_d2d081baede3add3866b9fb41edf84671824f2242f38f0097206a8cf4d485bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d081baede3add3866b9fb41edf84671824f2242f38f0097206a8cf4d485bad->enter($__internal_d2d081baede3add3866b9fb41edf84671824f2242f38f0097206a8cf4d485bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_d2d081baede3add3866b9fb41edf84671824f2242f38f0097206a8cf4d485bad->leave($__internal_d2d081baede3add3866b9fb41edf84671824f2242f38f0097206a8cf4d485bad_prof);

        
        $__internal_c5b7ff11d1cafff57b99074f6b68d040e91384ada6f59e7d3f7b8f817d8d7e74->leave($__internal_c5b7ff11d1cafff57b99074f6b68d040e91384ada6f59e7d3f7b8f817d8d7e74_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_92ffe905e0640784864fd0b9ff54615f837a57c5ed8956cf4ab53cd0e7a6d09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ffe905e0640784864fd0b9ff54615f837a57c5ed8956cf4ab53cd0e7a6d09a->enter($__internal_92ffe905e0640784864fd0b9ff54615f837a57c5ed8956cf4ab53cd0e7a6d09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_d63a45a74eecda1d2b0fd690a3ec121aa74c40ad50e991221107d56388cc481e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63a45a74eecda1d2b0fd690a3ec121aa74c40ad50e991221107d56388cc481e->enter($__internal_d63a45a74eecda1d2b0fd690a3ec121aa74c40ad50e991221107d56388cc481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d63a45a74eecda1d2b0fd690a3ec121aa74c40ad50e991221107d56388cc481e->leave($__internal_d63a45a74eecda1d2b0fd690a3ec121aa74c40ad50e991221107d56388cc481e_prof);

        
        $__internal_92ffe905e0640784864fd0b9ff54615f837a57c5ed8956cf4ab53cd0e7a6d09a->leave($__internal_92ffe905e0640784864fd0b9ff54615f837a57c5ed8956cf4ab53cd0e7a6d09a_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_a922c818c95bb3d1dfa80f8717b57a92b7f04566d7d3792259d6704bf8e994ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a922c818c95bb3d1dfa80f8717b57a92b7f04566d7d3792259d6704bf8e994ec->enter($__internal_a922c818c95bb3d1dfa80f8717b57a92b7f04566d7d3792259d6704bf8e994ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9790bf19a47c22f548a50f39dd2ff16ad7fccc1dd1f1bca5cadafe37df4b5267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9790bf19a47c22f548a50f39dd2ff16ad7fccc1dd1f1bca5cadafe37df4b5267->enter($__internal_9790bf19a47c22f548a50f39dd2ff16ad7fccc1dd1f1bca5cadafe37df4b5267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9790bf19a47c22f548a50f39dd2ff16ad7fccc1dd1f1bca5cadafe37df4b5267->leave($__internal_9790bf19a47c22f548a50f39dd2ff16ad7fccc1dd1f1bca5cadafe37df4b5267_prof);

        
        $__internal_a922c818c95bb3d1dfa80f8717b57a92b7f04566d7d3792259d6704bf8e994ec->leave($__internal_a922c818c95bb3d1dfa80f8717b57a92b7f04566d7d3792259d6704bf8e994ec_prof);

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
