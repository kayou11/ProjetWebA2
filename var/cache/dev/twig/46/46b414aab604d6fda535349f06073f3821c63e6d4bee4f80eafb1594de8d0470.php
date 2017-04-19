<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_cf679e4313ec96ceb756fb5152cb18b652533818601427bb046941fd37761a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_491d97a2c6b430d4c868a8ea52b9cffcae5b0b9d46a71c7c91825519da997d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491d97a2c6b430d4c868a8ea52b9cffcae5b0b9d46a71c7c91825519da997d57->enter($__internal_491d97a2c6b430d4c868a8ea52b9cffcae5b0b9d46a71c7c91825519da997d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_f08a5fe0ac222a0749a7e08d0260901d2de7225e252554c1722fa30a4988c353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08a5fe0ac222a0749a7e08d0260901d2de7225e252554c1722fa30a4988c353->enter($__internal_f08a5fe0ac222a0749a7e08d0260901d2de7225e252554c1722fa30a4988c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_491d97a2c6b430d4c868a8ea52b9cffcae5b0b9d46a71c7c91825519da997d57->leave($__internal_491d97a2c6b430d4c868a8ea52b9cffcae5b0b9d46a71c7c91825519da997d57_prof);

        
        $__internal_f08a5fe0ac222a0749a7e08d0260901d2de7225e252554c1722fa30a4988c353->leave($__internal_f08a5fe0ac222a0749a7e08d0260901d2de7225e252554c1722fa30a4988c353_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_fe1e4a6a3fdc83561aa62846fc00a7d51228820542cc7c5489af32adf917c991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1e4a6a3fdc83561aa62846fc00a7d51228820542cc7c5489af32adf917c991->enter($__internal_fe1e4a6a3fdc83561aa62846fc00a7d51228820542cc7c5489af32adf917c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ae4f8ceca843621d9a44a7d7da7c8b9e3fbc3a73018035710ee04207d5013ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae4f8ceca843621d9a44a7d7da7c8b9e3fbc3a73018035710ee04207d5013ee->enter($__internal_8ae4f8ceca843621d9a44a7d7da7c8b9e3fbc3a73018035710ee04207d5013ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 22, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 22, $this->getSourceContext()); })())))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 28, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 36, $this->getSourceContext()); })()))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 37, $this->getSourceContext()); })());
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 44, $this->getSourceContext()); })()))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 46, $this->getSourceContext()); })());
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 51, $this->getSourceContext()); })());
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_8ae4f8ceca843621d9a44a7d7da7c8b9e3fbc3a73018035710ee04207d5013ee->leave($__internal_8ae4f8ceca843621d9a44a7d7da7c8b9e3fbc3a73018035710ee04207d5013ee_prof);

        
        $__internal_fe1e4a6a3fdc83561aa62846fc00a7d51228820542cc7c5489af32adf917c991->leave($__internal_fe1e4a6a3fdc83561aa62846fc00a7d51228820542cc7c5489af32adf917c991_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_da910049ba7511db242dd2b523f2ee8a61e476e677dce85cb20a909cabd7093f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da910049ba7511db242dd2b523f2ee8a61e476e677dce85cb20a909cabd7093f->enter($__internal_da910049ba7511db242dd2b523f2ee8a61e476e677dce85cb20a909cabd7093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_40d8f9ff990012ce71a1fdb951376f932f6615e5fa4fb0dfd84c13d85be374ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d8f9ff990012ce71a1fdb951376f932f6615e5fa4fb0dfd84c13d85be374ae->enter($__internal_40d8f9ff990012ce71a1fdb951376f932f6615e5fa4fb0dfd84c13d85be374ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_40d8f9ff990012ce71a1fdb951376f932f6615e5fa4fb0dfd84c13d85be374ae->leave($__internal_40d8f9ff990012ce71a1fdb951376f932f6615e5fa4fb0dfd84c13d85be374ae_prof);

        
        $__internal_da910049ba7511db242dd2b523f2ee8a61e476e677dce85cb20a909cabd7093f->leave($__internal_da910049ba7511db242dd2b523f2ee8a61e476e677dce85cb20a909cabd7093f_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_767e39c4d9441ccbc6cfd979bc131aed6ae0bf0f5ae98bc257dea60663b9316b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767e39c4d9441ccbc6cfd979bc131aed6ae0bf0f5ae98bc257dea60663b9316b->enter($__internal_767e39c4d9441ccbc6cfd979bc131aed6ae0bf0f5ae98bc257dea60663b9316b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_03b5dae86c0e0ed53b23ecf729cf811bc2af4948b4f4205101c5c0a8e01c48d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b5dae86c0e0ed53b23ecf729cf811bc2af4948b4f4205101c5c0a8e01c48d1->enter($__internal_03b5dae86c0e0ed53b23ecf729cf811bc2af4948b4f4205101c5c0a8e01c48d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_03b5dae86c0e0ed53b23ecf729cf811bc2af4948b4f4205101c5c0a8e01c48d1->leave($__internal_03b5dae86c0e0ed53b23ecf729cf811bc2af4948b4f4205101c5c0a8e01c48d1_prof);

        
        $__internal_767e39c4d9441ccbc6cfd979bc131aed6ae0bf0f5ae98bc257dea60663b9316b->leave($__internal_767e39c4d9441ccbc6cfd979bc131aed6ae0bf0f5ae98bc257dea60663b9316b_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_ad18a96dab89e489b731f1b9ddc12dfbcb1c94f41ad8d5a5795d5427ce7c8611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad18a96dab89e489b731f1b9ddc12dfbcb1c94f41ad8d5a5795d5427ce7c8611->enter($__internal_ad18a96dab89e489b731f1b9ddc12dfbcb1c94f41ad8d5a5795d5427ce7c8611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_c012e415b75c5b2c3013a87ef0a32bc3bba779e35ea882976f78e90453ce6c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c012e415b75c5b2c3013a87ef0a32bc3bba779e35ea882976f78e90453ce6c6e->enter($__internal_c012e415b75c5b2c3013a87ef0a32bc3bba779e35ea882976f78e90453ce6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_c012e415b75c5b2c3013a87ef0a32bc3bba779e35ea882976f78e90453ce6c6e->leave($__internal_c012e415b75c5b2c3013a87ef0a32bc3bba779e35ea882976f78e90453ce6c6e_prof);

        
        $__internal_ad18a96dab89e489b731f1b9ddc12dfbcb1c94f41ad8d5a5795d5427ce7c8611->leave($__internal_ad18a96dab89e489b731f1b9ddc12dfbcb1c94f41ad8d5a5795d5427ce7c8611_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_be1713398d9fbb854d3f9ce0e618b7267a4ae6bdd6d342795a2978fcc1689146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1713398d9fbb854d3f9ce0e618b7267a4ae6bdd6d342795a2978fcc1689146->enter($__internal_be1713398d9fbb854d3f9ce0e618b7267a4ae6bdd6d342795a2978fcc1689146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_eb26d6247e24343c99f02b409ba82da4df88952e3e7b7e224b662b249958ca35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb26d6247e24343c99f02b409ba82da4df88952e3e7b7e224b662b249958ca35->enter($__internal_eb26d6247e24343c99f02b409ba82da4df88952e3e7b7e224b662b249958ca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_eb26d6247e24343c99f02b409ba82da4df88952e3e7b7e224b662b249958ca35->leave($__internal_eb26d6247e24343c99f02b409ba82da4df88952e3e7b7e224b662b249958ca35_prof);

        
        $__internal_be1713398d9fbb854d3f9ce0e618b7267a4ae6bdd6d342795a2978fcc1689146->leave($__internal_be1713398d9fbb854d3f9ce0e618b7267a4ae6bdd6d342795a2978fcc1689146_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
