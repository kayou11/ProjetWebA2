<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_1f0cd328591a4ddc87d58ee33f3c71fe74427ee6539f2ebc17ec94fb078b5f5d extends Twig_Template
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
        $__internal_d39e2d9bfa2bcabbfb6554c34bcb40a325e01ddbe8ad1d5977547bc06f44a9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39e2d9bfa2bcabbfb6554c34bcb40a325e01ddbe8ad1d5977547bc06f44a9f0->enter($__internal_d39e2d9bfa2bcabbfb6554c34bcb40a325e01ddbe8ad1d5977547bc06f44a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_d54386abf700a2430aef85e2733d34e57de114f2d02d67422ccf9b5cdab20e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54386abf700a2430aef85e2733d34e57de114f2d02d67422ccf9b5cdab20e98->enter($__internal_d54386abf700a2430aef85e2733d34e57de114f2d02d67422ccf9b5cdab20e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d39e2d9bfa2bcabbfb6554c34bcb40a325e01ddbe8ad1d5977547bc06f44a9f0->leave($__internal_d39e2d9bfa2bcabbfb6554c34bcb40a325e01ddbe8ad1d5977547bc06f44a9f0_prof);

        
        $__internal_d54386abf700a2430aef85e2733d34e57de114f2d02d67422ccf9b5cdab20e98->leave($__internal_d54386abf700a2430aef85e2733d34e57de114f2d02d67422ccf9b5cdab20e98_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c5dbd7b96b40be96a0505c91625c639bf7e33f84e2191d4b654c3a487ac7480b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dbd7b96b40be96a0505c91625c639bf7e33f84e2191d4b654c3a487ac7480b->enter($__internal_c5dbd7b96b40be96a0505c91625c639bf7e33f84e2191d4b654c3a487ac7480b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f30e219bd0634c90ad02dc7e7ac9de526171448975850186239ad8a77c8f6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f30e219bd0634c90ad02dc7e7ac9de526171448975850186239ad8a77c8f6b8->enter($__internal_2f30e219bd0634c90ad02dc7e7ac9de526171448975850186239ad8a77c8f6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2f30e219bd0634c90ad02dc7e7ac9de526171448975850186239ad8a77c8f6b8->leave($__internal_2f30e219bd0634c90ad02dc7e7ac9de526171448975850186239ad8a77c8f6b8_prof);

        
        $__internal_c5dbd7b96b40be96a0505c91625c639bf7e33f84e2191d4b654c3a487ac7480b->leave($__internal_c5dbd7b96b40be96a0505c91625c639bf7e33f84e2191d4b654c3a487ac7480b_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_3d000472575111399780867a178234635bacf4eb7c9556b7d3d9e0ddbf2d6f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d000472575111399780867a178234635bacf4eb7c9556b7d3d9e0ddbf2d6f64->enter($__internal_3d000472575111399780867a178234635bacf4eb7c9556b7d3d9e0ddbf2d6f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_3deaf6361f7f867d47c30af1d6007330d8979eef2a2a30cafb1a332fdf820c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3deaf6361f7f867d47c30af1d6007330d8979eef2a2a30cafb1a332fdf820c1d->enter($__internal_3deaf6361f7f867d47c30af1d6007330d8979eef2a2a30cafb1a332fdf820c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_3deaf6361f7f867d47c30af1d6007330d8979eef2a2a30cafb1a332fdf820c1d->leave($__internal_3deaf6361f7f867d47c30af1d6007330d8979eef2a2a30cafb1a332fdf820c1d_prof);

        
        $__internal_3d000472575111399780867a178234635bacf4eb7c9556b7d3d9e0ddbf2d6f64->leave($__internal_3d000472575111399780867a178234635bacf4eb7c9556b7d3d9e0ddbf2d6f64_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_8f35e74aeecd16be16213fb378d3bc0276e2207a4e0e042b7afcd8f229007f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f35e74aeecd16be16213fb378d3bc0276e2207a4e0e042b7afcd8f229007f97->enter($__internal_8f35e74aeecd16be16213fb378d3bc0276e2207a4e0e042b7afcd8f229007f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_dac0afdf7137be13bfcfc32e0544d4734849491657d41644b6d9152194ca0ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac0afdf7137be13bfcfc32e0544d4734849491657d41644b6d9152194ca0ebd->enter($__internal_dac0afdf7137be13bfcfc32e0544d4734849491657d41644b6d9152194ca0ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_dac0afdf7137be13bfcfc32e0544d4734849491657d41644b6d9152194ca0ebd->leave($__internal_dac0afdf7137be13bfcfc32e0544d4734849491657d41644b6d9152194ca0ebd_prof);

        
        $__internal_8f35e74aeecd16be16213fb378d3bc0276e2207a4e0e042b7afcd8f229007f97->leave($__internal_8f35e74aeecd16be16213fb378d3bc0276e2207a4e0e042b7afcd8f229007f97_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_4b87d6a535be203d1c33e170f3c2eee64834b36f6eb3fdb93cefff255e605032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b87d6a535be203d1c33e170f3c2eee64834b36f6eb3fdb93cefff255e605032->enter($__internal_4b87d6a535be203d1c33e170f3c2eee64834b36f6eb3fdb93cefff255e605032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_ea14108e80f66825759d0f9e2155c5e13168cbc88245045ef1a3969bbf761585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea14108e80f66825759d0f9e2155c5e13168cbc88245045ef1a3969bbf761585->enter($__internal_ea14108e80f66825759d0f9e2155c5e13168cbc88245045ef1a3969bbf761585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_ea14108e80f66825759d0f9e2155c5e13168cbc88245045ef1a3969bbf761585->leave($__internal_ea14108e80f66825759d0f9e2155c5e13168cbc88245045ef1a3969bbf761585_prof);

        
        $__internal_4b87d6a535be203d1c33e170f3c2eee64834b36f6eb3fdb93cefff255e605032->leave($__internal_4b87d6a535be203d1c33e170f3c2eee64834b36f6eb3fdb93cefff255e605032_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_733054fe40c6b80a85bb2bdeedb7e1da40268c5630efb0fe87a331492fea1bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733054fe40c6b80a85bb2bdeedb7e1da40268c5630efb0fe87a331492fea1bc3->enter($__internal_733054fe40c6b80a85bb2bdeedb7e1da40268c5630efb0fe87a331492fea1bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_b820551761c721cc0662d855843ea3ca4f9f175db9a15c51bcf397454dc2fda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b820551761c721cc0662d855843ea3ca4f9f175db9a15c51bcf397454dc2fda6->enter($__internal_b820551761c721cc0662d855843ea3ca4f9f175db9a15c51bcf397454dc2fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_b820551761c721cc0662d855843ea3ca4f9f175db9a15c51bcf397454dc2fda6->leave($__internal_b820551761c721cc0662d855843ea3ca4f9f175db9a15c51bcf397454dc2fda6_prof);

        
        $__internal_733054fe40c6b80a85bb2bdeedb7e1da40268c5630efb0fe87a331492fea1bc3->leave($__internal_733054fe40c6b80a85bb2bdeedb7e1da40268c5630efb0fe87a331492fea1bc3_prof);

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
