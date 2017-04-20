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
        $__internal_05e8f8a55e79fc70018079a5deda4ea5cff6fdc7d9253017697a6b2b1a3e4f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e8f8a55e79fc70018079a5deda4ea5cff6fdc7d9253017697a6b2b1a3e4f46->enter($__internal_05e8f8a55e79fc70018079a5deda4ea5cff6fdc7d9253017697a6b2b1a3e4f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_2b921d399994636b29c58cf869fa2305b4913e0ab8bdc38a84a8d10d964223b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b921d399994636b29c58cf869fa2305b4913e0ab8bdc38a84a8d10d964223b5->enter($__internal_2b921d399994636b29c58cf869fa2305b4913e0ab8bdc38a84a8d10d964223b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_05e8f8a55e79fc70018079a5deda4ea5cff6fdc7d9253017697a6b2b1a3e4f46->leave($__internal_05e8f8a55e79fc70018079a5deda4ea5cff6fdc7d9253017697a6b2b1a3e4f46_prof);

        
        $__internal_2b921d399994636b29c58cf869fa2305b4913e0ab8bdc38a84a8d10d964223b5->leave($__internal_2b921d399994636b29c58cf869fa2305b4913e0ab8bdc38a84a8d10d964223b5_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_d08142b49e2000fca121577fb6fb0095dba8bda0493ba777d3626469f1718ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08142b49e2000fca121577fb6fb0095dba8bda0493ba777d3626469f1718ef4->enter($__internal_d08142b49e2000fca121577fb6fb0095dba8bda0493ba777d3626469f1718ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_81d9ead0a8443510db2ab0fbaa528aadfa161e6dcc768c6ec6e879c3ee331c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d9ead0a8443510db2ab0fbaa528aadfa161e6dcc768c6ec6e879c3ee331c46->enter($__internal_81d9ead0a8443510db2ab0fbaa528aadfa161e6dcc768c6ec6e879c3ee331c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_81d9ead0a8443510db2ab0fbaa528aadfa161e6dcc768c6ec6e879c3ee331c46->leave($__internal_81d9ead0a8443510db2ab0fbaa528aadfa161e6dcc768c6ec6e879c3ee331c46_prof);

        
        $__internal_d08142b49e2000fca121577fb6fb0095dba8bda0493ba777d3626469f1718ef4->leave($__internal_d08142b49e2000fca121577fb6fb0095dba8bda0493ba777d3626469f1718ef4_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_543dc4d064425b47159926542b3e55b9613fd6db34a766512d579a6177a62bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543dc4d064425b47159926542b3e55b9613fd6db34a766512d579a6177a62bc2->enter($__internal_543dc4d064425b47159926542b3e55b9613fd6db34a766512d579a6177a62bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_231f59ba0122296b26e1a02308b93be1ae37d4aa6614904b98436ef6773aea8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231f59ba0122296b26e1a02308b93be1ae37d4aa6614904b98436ef6773aea8e->enter($__internal_231f59ba0122296b26e1a02308b93be1ae37d4aa6614904b98436ef6773aea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_231f59ba0122296b26e1a02308b93be1ae37d4aa6614904b98436ef6773aea8e->leave($__internal_231f59ba0122296b26e1a02308b93be1ae37d4aa6614904b98436ef6773aea8e_prof);

        
        $__internal_543dc4d064425b47159926542b3e55b9613fd6db34a766512d579a6177a62bc2->leave($__internal_543dc4d064425b47159926542b3e55b9613fd6db34a766512d579a6177a62bc2_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_ea839adc83af457c8cb0b478178bde4d1b69ad03e4672afefff8b526c1671dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea839adc83af457c8cb0b478178bde4d1b69ad03e4672afefff8b526c1671dfe->enter($__internal_ea839adc83af457c8cb0b478178bde4d1b69ad03e4672afefff8b526c1671dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_38b122c1ba640de8f5b69a250e6efff25bf2a92ff25e84dd7cbc2f8bd5722916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b122c1ba640de8f5b69a250e6efff25bf2a92ff25e84dd7cbc2f8bd5722916->enter($__internal_38b122c1ba640de8f5b69a250e6efff25bf2a92ff25e84dd7cbc2f8bd5722916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_38b122c1ba640de8f5b69a250e6efff25bf2a92ff25e84dd7cbc2f8bd5722916->leave($__internal_38b122c1ba640de8f5b69a250e6efff25bf2a92ff25e84dd7cbc2f8bd5722916_prof);

        
        $__internal_ea839adc83af457c8cb0b478178bde4d1b69ad03e4672afefff8b526c1671dfe->leave($__internal_ea839adc83af457c8cb0b478178bde4d1b69ad03e4672afefff8b526c1671dfe_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_d9eb260b638062416c72c274ecb3840c5b16f37e1afab2d1016a514c065ab8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eb260b638062416c72c274ecb3840c5b16f37e1afab2d1016a514c065ab8cc->enter($__internal_d9eb260b638062416c72c274ecb3840c5b16f37e1afab2d1016a514c065ab8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_a5a9411d8126188f09b02a15e69cf234c82507050534d1699d98e8e58fa6e45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a9411d8126188f09b02a15e69cf234c82507050534d1699d98e8e58fa6e45f->enter($__internal_a5a9411d8126188f09b02a15e69cf234c82507050534d1699d98e8e58fa6e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_a5a9411d8126188f09b02a15e69cf234c82507050534d1699d98e8e58fa6e45f->leave($__internal_a5a9411d8126188f09b02a15e69cf234c82507050534d1699d98e8e58fa6e45f_prof);

        
        $__internal_d9eb260b638062416c72c274ecb3840c5b16f37e1afab2d1016a514c065ab8cc->leave($__internal_d9eb260b638062416c72c274ecb3840c5b16f37e1afab2d1016a514c065ab8cc_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_c0e9b3c17996aa9c71f007a2fd09fc2009f1ee3c4125bb413e892c4728c1cdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e9b3c17996aa9c71f007a2fd09fc2009f1ee3c4125bb413e892c4728c1cdfe->enter($__internal_c0e9b3c17996aa9c71f007a2fd09fc2009f1ee3c4125bb413e892c4728c1cdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_458a9ccb80f2fa59d19f69af83245ccb39ddf8e6d78e73230b4632329e0db55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458a9ccb80f2fa59d19f69af83245ccb39ddf8e6d78e73230b4632329e0db55b->enter($__internal_458a9ccb80f2fa59d19f69af83245ccb39ddf8e6d78e73230b4632329e0db55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_458a9ccb80f2fa59d19f69af83245ccb39ddf8e6d78e73230b4632329e0db55b->leave($__internal_458a9ccb80f2fa59d19f69af83245ccb39ddf8e6d78e73230b4632329e0db55b_prof);

        
        $__internal_c0e9b3c17996aa9c71f007a2fd09fc2009f1ee3c4125bb413e892c4728c1cdfe->leave($__internal_c0e9b3c17996aa9c71f007a2fd09fc2009f1ee3c4125bb413e892c4728c1cdfe_prof);

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
