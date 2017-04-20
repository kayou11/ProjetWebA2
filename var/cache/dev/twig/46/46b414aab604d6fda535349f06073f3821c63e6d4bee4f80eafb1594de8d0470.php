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
        $__internal_93728ae133a39280a80a039acbfbdf3a8d8779a05555b80c2af5e25685c04d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93728ae133a39280a80a039acbfbdf3a8d8779a05555b80c2af5e25685c04d2b->enter($__internal_93728ae133a39280a80a039acbfbdf3a8d8779a05555b80c2af5e25685c04d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_612221ffa12c280f76a2f662a8106a46814caf987bd94501ea364f3988d21972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612221ffa12c280f76a2f662a8106a46814caf987bd94501ea364f3988d21972->enter($__internal_612221ffa12c280f76a2f662a8106a46814caf987bd94501ea364f3988d21972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_93728ae133a39280a80a039acbfbdf3a8d8779a05555b80c2af5e25685c04d2b->leave($__internal_93728ae133a39280a80a039acbfbdf3a8d8779a05555b80c2af5e25685c04d2b_prof);

        
        $__internal_612221ffa12c280f76a2f662a8106a46814caf987bd94501ea364f3988d21972->leave($__internal_612221ffa12c280f76a2f662a8106a46814caf987bd94501ea364f3988d21972_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8c02999231abddfb6340d567544a666be264d8f3139b5d23028333bf66b7c7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c02999231abddfb6340d567544a666be264d8f3139b5d23028333bf66b7c7b2->enter($__internal_8c02999231abddfb6340d567544a666be264d8f3139b5d23028333bf66b7c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b8861d411f6d6d09561571c59725c244b355122e89f6c88d9080a88fd43a210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8861d411f6d6d09561571c59725c244b355122e89f6c88d9080a88fd43a210->enter($__internal_3b8861d411f6d6d09561571c59725c244b355122e89f6c88d9080a88fd43a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3b8861d411f6d6d09561571c59725c244b355122e89f6c88d9080a88fd43a210->leave($__internal_3b8861d411f6d6d09561571c59725c244b355122e89f6c88d9080a88fd43a210_prof);

        
        $__internal_8c02999231abddfb6340d567544a666be264d8f3139b5d23028333bf66b7c7b2->leave($__internal_8c02999231abddfb6340d567544a666be264d8f3139b5d23028333bf66b7c7b2_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_12ca2c7f9bf1589353fb1ade62a92a6ca798d0beb888158a974b2ecc08926f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ca2c7f9bf1589353fb1ade62a92a6ca798d0beb888158a974b2ecc08926f31->enter($__internal_12ca2c7f9bf1589353fb1ade62a92a6ca798d0beb888158a974b2ecc08926f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_4931f18f29304c5c6e18a926d00082bb101aaa1ef5212cab1acea6a3e0e91c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4931f18f29304c5c6e18a926d00082bb101aaa1ef5212cab1acea6a3e0e91c5b->enter($__internal_4931f18f29304c5c6e18a926d00082bb101aaa1ef5212cab1acea6a3e0e91c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_4931f18f29304c5c6e18a926d00082bb101aaa1ef5212cab1acea6a3e0e91c5b->leave($__internal_4931f18f29304c5c6e18a926d00082bb101aaa1ef5212cab1acea6a3e0e91c5b_prof);

        
        $__internal_12ca2c7f9bf1589353fb1ade62a92a6ca798d0beb888158a974b2ecc08926f31->leave($__internal_12ca2c7f9bf1589353fb1ade62a92a6ca798d0beb888158a974b2ecc08926f31_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_5632b0c0ab088eb240224060301056a5947e4352b287459fa3016d903415a205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5632b0c0ab088eb240224060301056a5947e4352b287459fa3016d903415a205->enter($__internal_5632b0c0ab088eb240224060301056a5947e4352b287459fa3016d903415a205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_fcb646ffe7dc0f119c465e7d833166535c54e1a4e4757f0031693a4aeb24147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb646ffe7dc0f119c465e7d833166535c54e1a4e4757f0031693a4aeb24147c->enter($__internal_fcb646ffe7dc0f119c465e7d833166535c54e1a4e4757f0031693a4aeb24147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_fcb646ffe7dc0f119c465e7d833166535c54e1a4e4757f0031693a4aeb24147c->leave($__internal_fcb646ffe7dc0f119c465e7d833166535c54e1a4e4757f0031693a4aeb24147c_prof);

        
        $__internal_5632b0c0ab088eb240224060301056a5947e4352b287459fa3016d903415a205->leave($__internal_5632b0c0ab088eb240224060301056a5947e4352b287459fa3016d903415a205_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_e7fff5986d877b14e2cb2f619f2b73c4ac96a16d10df8809f2ddb65daa608ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fff5986d877b14e2cb2f619f2b73c4ac96a16d10df8809f2ddb65daa608ef1->enter($__internal_e7fff5986d877b14e2cb2f619f2b73c4ac96a16d10df8809f2ddb65daa608ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_1596bdf54410d7f6f8e86192d1201500034fc9bc2a0d28afbb5220264a75f3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1596bdf54410d7f6f8e86192d1201500034fc9bc2a0d28afbb5220264a75f3a4->enter($__internal_1596bdf54410d7f6f8e86192d1201500034fc9bc2a0d28afbb5220264a75f3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_1596bdf54410d7f6f8e86192d1201500034fc9bc2a0d28afbb5220264a75f3a4->leave($__internal_1596bdf54410d7f6f8e86192d1201500034fc9bc2a0d28afbb5220264a75f3a4_prof);

        
        $__internal_e7fff5986d877b14e2cb2f619f2b73c4ac96a16d10df8809f2ddb65daa608ef1->leave($__internal_e7fff5986d877b14e2cb2f619f2b73c4ac96a16d10df8809f2ddb65daa608ef1_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_d2ee85c70679794eced7bfe03f999a94448d32338c0bc7820e1fb5e95caf8c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ee85c70679794eced7bfe03f999a94448d32338c0bc7820e1fb5e95caf8c72->enter($__internal_d2ee85c70679794eced7bfe03f999a94448d32338c0bc7820e1fb5e95caf8c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_a05282edb37eae7966677bab298c5bff6e0aa27ffe34f4fb15ae1043639109b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05282edb37eae7966677bab298c5bff6e0aa27ffe34f4fb15ae1043639109b9->enter($__internal_a05282edb37eae7966677bab298c5bff6e0aa27ffe34f4fb15ae1043639109b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_a05282edb37eae7966677bab298c5bff6e0aa27ffe34f4fb15ae1043639109b9->leave($__internal_a05282edb37eae7966677bab298c5bff6e0aa27ffe34f4fb15ae1043639109b9_prof);

        
        $__internal_d2ee85c70679794eced7bfe03f999a94448d32338c0bc7820e1fb5e95caf8c72->leave($__internal_d2ee85c70679794eced7bfe03f999a94448d32338c0bc7820e1fb5e95caf8c72_prof);

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
