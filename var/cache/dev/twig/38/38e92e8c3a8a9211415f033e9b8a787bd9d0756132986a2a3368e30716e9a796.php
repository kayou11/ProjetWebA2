<?php

/* SonataAdminBundle:CRUD:tree.html.twig */
class __TwigTemplate_2ab9547c46a06f9031dbb73f81349a2e622406393a36decad34c3e633aedfee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:tree.html.twig", 16);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4cb87296151f4806686dc1e3d4596d95a193ad430161f31b4c408a31e86fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cb87296151f4806686dc1e3d4596d95a193ad430161f31b4c408a31e86fed0->enter($__internal_e4cb87296151f4806686dc1e3d4596d95a193ad430161f31b4c408a31e86fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:tree.html.twig"));

        $__internal_68b7795aa1cd6d6ef7ce19bac23addfeb76fd0d178b475d4a362794e2830bc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b7795aa1cd6d6ef7ce19bac23addfeb76fd0d178b475d4a362794e2830bc15->enter($__internal_68b7795aa1cd6d6ef7ce19bac23addfeb76fd0d178b475d4a362794e2830bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:tree.html.twig"));

        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4cb87296151f4806686dc1e3d4596d95a193ad430161f31b4c408a31e86fed0->leave($__internal_e4cb87296151f4806686dc1e3d4596d95a193ad430161f31b4c408a31e86fed0_prof);

        
        $__internal_68b7795aa1cd6d6ef7ce19bac23addfeb76fd0d178b475d4a362794e2830bc15->leave($__internal_68b7795aa1cd6d6ef7ce19bac23addfeb76fd0d178b475d4a362794e2830bc15_prof);

    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_612e1e2fec1d2423c089f58382bb2ec74073b605ac7aff13495a318354ee7724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612e1e2fec1d2423c089f58382bb2ec74073b605ac7aff13495a318354ee7724->enter($__internal_612e1e2fec1d2423c089f58382bb2ec74073b605ac7aff13495a318354ee7724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4090a1cdff0cca31195e9c486f2a34444296573087bb4484b232b78bada72f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4090a1cdff0cca31195e9c486f2a34444296573087bb4484b232b78bada72f97->enter($__internal_4090a1cdff0cca31195e9c486f2a34444296573087bb4484b232b78bada72f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 41
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:list_tab_menu.html.twig", "SonataAdminBundle:CRUD:tree.html.twig", 41)->display(array("mode" => "tree", "action" =>         // line 43
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 43, $this->getSourceContext()); })()), "admin" =>         // line 44
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 44, $this->getSourceContext()); })())));
        
        $__internal_4090a1cdff0cca31195e9c486f2a34444296573087bb4484b232b78bada72f97->leave($__internal_4090a1cdff0cca31195e9c486f2a34444296573087bb4484b232b78bada72f97_prof);

        
        $__internal_612e1e2fec1d2423c089f58382bb2ec74073b605ac7aff13495a318354ee7724->leave($__internal_612e1e2fec1d2423c089f58382bb2ec74073b605ac7aff13495a318354ee7724_prof);

    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_b363085d4e608f014535a8f1d3cb3437a5a93c3759cbfc07b132b5835354792e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b363085d4e608f014535a8f1d3cb3437a5a93c3759cbfc07b132b5835354792e->enter($__internal_b363085d4e608f014535a8f1d3cb3437a5a93c3759cbfc07b132b5835354792e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_2745d987d458c1c04efa6feda8615f560828117999bcaa8c2eba1e3414c7a9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2745d987d458c1c04efa6feda8615f560828117999bcaa8c2eba1e3414c7a9e4->enter($__internal_2745d987d458c1c04efa6feda8615f560828117999bcaa8c2eba1e3414c7a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("element.tree_site_label", array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 53, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
        echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentSite"]) || array_key_exists("currentSite", $context) ? $context["currentSite"] : (function () { throw new Twig_Error_Runtime('Variable "currentSite" does not exist.', 56, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contexts"]) || array_key_exists("contexts", $context) ? $context["contexts"] : (function () { throw new Twig_Error_Runtime('Variable "contexts" does not exist.', 59, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["context"]) {
            // line 60
            echo "                                <li>
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 61, $this->getSourceContext()); })()), "generateUrl", array(0 => "tree", 1 => array("context" => twig_get_attribute($this->env, $this->getSourceContext(), $context["context"], "id", array()))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 62
            if (((isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new Twig_Error_Runtime('Variable "currentContext" does not exist.', 62, $this->getSourceContext()); })()) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["context"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentContext"]) || array_key_exists("currentContext", $context) ? $context["currentContext"] : (function () { throw new Twig_Error_Runtime('Variable "currentContext" does not exist.', 62, $this->getSourceContext()); })()), "id", array())))) {
                // line 63
                echo "                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            </span>
                                        ";
            }
            // line 67
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new Twig_Error_Runtime('Variable "site" does not exist.', 67, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 76
        echo $context["tree"]->macro_navigate_child((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new Twig_Error_Runtime('Variable "collection" does not exist.', 76, $this->getSourceContext()); })()), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 76, $this->getSourceContext()); })()), true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2745d987d458c1c04efa6feda8615f560828117999bcaa8c2eba1e3414c7a9e4->leave($__internal_2745d987d458c1c04efa6feda8615f560828117999bcaa8c2eba1e3414c7a9e4_prof);

        
        $__internal_b363085d4e608f014535a8f1d3cb3437a5a93c3759cbfc07b132b5835354792e->leave($__internal_b363085d4e608f014535a8f1d3cb3437a5a93c3759cbfc07b132b5835354792e_prof);

    }

    // line 19
    public function macro_navigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7ff9224ca1c3c4b750b5cbc72c876546e9f002d61c437f7ec9e6556a93499b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7ff9224ca1c3c4b750b5cbc72c876546e9f002d61c437f7ec9e6556a93499b58->enter($__internal_7ff9224ca1c3c4b750b5cbc72c876546e9f002d61c437f7ec9e6556a93499b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            $__internal_20dca2f4d5488d2974fd024450b9000b8b32bf430d9021e9c28c6ae5cd85cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_20dca2f4d5488d2974fd024450b9000b8b32bf430d9021e9c28c6ae5cd85cc23->enter($__internal_20dca2f4d5488d2974fd024450b9000b8b32bf430d9021e9c28c6ae5cd85cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 20
            echo "    <ul";
            if ((isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new Twig_Error_Runtime('Variable "root" does not exist.', 20, $this->getSourceContext()); })())) {
                echo " class=\"sonata-tree\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new Twig_Error_Runtime('Variable "collection" does not exist.', 21, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !(isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new Twig_Error_Runtime('Variable "root" does not exist.', 21, $this->getSourceContext()); })())) {
                    // line 22
                    echo "            <li>
                <div class=\"sonata-tree__item\">
                    ";
                    // line 24
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], "parent", array())) {
                        echo "<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>";
                    }
                    // line 25
                    echo "                    <i class=\"fa fa-code\" aria-hidden=\"true\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], "name", array()), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], "description", array()), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">edit <i class=\"fa fa-magic\" aria-hidden=\"true\"></i></a>
                    ";
                    // line 29
                    if (true) {
                        echo "<span class=\"label label-warning pull-right\">true</span>";
                    }
                    // line 30
                    echo "                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "navigate_child", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], "children", array()), 1 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), 2 => false), "method"), "html", null, true);
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_20dca2f4d5488d2974fd024450b9000b8b32bf430d9021e9c28c6ae5cd85cc23->leave($__internal_20dca2f4d5488d2974fd024450b9000b8b32bf430d9021e9c28c6ae5cd85cc23_prof);

            
            $__internal_7ff9224ca1c3c4b750b5cbc72c876546e9f002d61c437f7ec9e6556a93499b58->leave($__internal_7ff9224ca1c3c4b750b5cbc72c876546e9f002d61c437f7ec9e6556a93499b58_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 37,  218 => 35,  212 => 33,  210 => 32,  206 => 30,  202 => 29,  198 => 28,  194 => 27,  188 => 26,  185 => 25,  181 => 24,  177 => 22,  172 => 21,  165 => 20,  145 => 19,  130 => 76,  123 => 71,  112 => 67,  106 => 63,  104 => 62,  100 => 61,  97 => 60,  93 => 59,  87 => 56,  81 => 53,  75 => 49,  66 => 48,  56 => 44,  55 => 43,  53 => 41,  44 => 40,  34 => 16,  32 => 18,  11 => 16,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{#
    This template is not used at all, it is just a template that you can use to create
    your own custom tree view.
#}
{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}

{% import _self as tree %}
{% macro navigate_child(collection, admin, root) %}
    <ul{% if root %} class=\"sonata-tree\"{% endif %}>
        {% for element in collection if not root %}
            <li>
                <div class=\"sonata-tree__item\">
                    {% if element.parent %}<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>{% endif %}
                    <i class=\"fa fa-code\" aria-hidden=\"true\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"{{ admin.generateObjectUrl('edit', element) }}\">{{ element.name }}</a>
                    <i class=\"text-muted\">{{ element.description }}</i>
                    <a class=\"label label-default pull-right\" href=\"{{ admin.generateObjectUrl('edit', element) }}\">edit <i class=\"fa fa-magic\" aria-hidden=\"true\"></i></a>
                    {% if true %}<span class=\"label label-warning pull-right\">true</span>{% endif %}
                </div>

                {% if element.children|length %}
                    {{ _self.navigate_child(element.children, admin, false) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block tab_menu %}
    {% include 'SonataAdminBundle:CRUD:list_tab_menu.html.twig' with {
        'mode':   'tree',
        'action': action,
        'admin':  admin,
    } only %}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    {{ 'element.tree_site_label'|trans({}, admin.translationdomain) }}
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">{{ currentSite.name }}</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {% for context in contexts %}
                                <li>
                                    <a href=\"{{ admin.generateUrl('tree', { 'context': context.id }) }}\">
                                        {% if currentContext and context.id == currentContext.id %}
                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            </span>
                                        {% endif %}
                                        {{ site.name }}
                                    </a>
                                </li>
                            {% endfor%}
                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                {{ tree.navigate_child(collection, admin, true) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:tree.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/tree.html.twig");
    }
}
