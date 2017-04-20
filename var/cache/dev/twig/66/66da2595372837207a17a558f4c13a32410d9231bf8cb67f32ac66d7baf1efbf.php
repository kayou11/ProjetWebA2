<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_86b28ddefcfef5bb23061021c0df65479a7ec729af34c1637e178cbf9ba0586c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d153c84ce40611a076a7240bb4f06a1284aa4431fd5088225201afb8fb51160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d153c84ce40611a076a7240bb4f06a1284aa4431fd5088225201afb8fb51160->enter($__internal_8d153c84ce40611a076a7240bb4f06a1284aa4431fd5088225201afb8fb51160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_e4e05988c7465620dc47792df8a965587d23d6bb2d9d2fd131b2b77b29cf4e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e05988c7465620dc47792df8a965587d23d6bb2d9d2fd131b2b77b29cf4e57->enter($__internal_e4e05988c7465620dc47792df8a965587d23d6bb2d9d2fd131b2b77b29cf4e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d153c84ce40611a076a7240bb4f06a1284aa4431fd5088225201afb8fb51160->leave($__internal_8d153c84ce40611a076a7240bb4f06a1284aa4431fd5088225201afb8fb51160_prof);

        
        $__internal_e4e05988c7465620dc47792df8a965587d23d6bb2d9d2fd131b2b77b29cf4e57->leave($__internal_e4e05988c7465620dc47792df8a965587d23d6bb2d9d2fd131b2b77b29cf4e57_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_693ca0dde62f6f54284a5e3d8b30c5b8863b92e2ae2ed97462432718f651e95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693ca0dde62f6f54284a5e3d8b30c5b8863b92e2ae2ed97462432718f651e95b->enter($__internal_693ca0dde62f6f54284a5e3d8b30c5b8863b92e2ae2ed97462432718f651e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_946a217c0dfdc62eb61e5c414e838a629738e77b0bad6eea23f9e555e38d24f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946a217c0dfdc62eb61e5c414e838a629738e77b0bad6eea23f9e555e38d24f8->enter($__internal_946a217c0dfdc62eb61e5c414e838a629738e77b0bad6eea23f9e555e38d24f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_946a217c0dfdc62eb61e5c414e838a629738e77b0bad6eea23f9e555e38d24f8->leave($__internal_946a217c0dfdc62eb61e5c414e838a629738e77b0bad6eea23f9e555e38d24f8_prof);

        
        $__internal_693ca0dde62f6f54284a5e3d8b30c5b8863b92e2ae2ed97462432718f651e95b->leave($__internal_693ca0dde62f6f54284a5e3d8b30c5b8863b92e2ae2ed97462432718f651e95b_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17d1ed4162867928115b7ffd3ad10a78068e2819a8a3289c2be4a7212d2ffbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d1ed4162867928115b7ffd3ad10a78068e2819a8a3289c2be4a7212d2ffbdf->enter($__internal_17d1ed4162867928115b7ffd3ad10a78068e2819a8a3289c2be4a7212d2ffbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_362047e223fead7551c3dab39868f6774c03f0304664035817c33dd6e73f6f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362047e223fead7551c3dab39868f6774c03f0304664035817c33dd6e73f6f67->enter($__internal_362047e223fead7551c3dab39868f6774c03f0304664035817c33dd6e73f6f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_362047e223fead7551c3dab39868f6774c03f0304664035817c33dd6e73f6f67->leave($__internal_362047e223fead7551c3dab39868f6774c03f0304664035817c33dd6e73f6f67_prof);

        
        $__internal_17d1ed4162867928115b7ffd3ad10a78068e2819a8a3289c2be4a7212d2ffbdf->leave($__internal_17d1ed4162867928115b7ffd3ad10a78068e2819a8a3289c2be4a7212d2ffbdf_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_416bd880e642793d9ae5934b5f2887b4e70760d16c8cbfced4ac4fad1ab91a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416bd880e642793d9ae5934b5f2887b4e70760d16c8cbfced4ac4fad1ab91a7c->enter($__internal_416bd880e642793d9ae5934b5f2887b4e70760d16c8cbfced4ac4fad1ab91a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02443f6615bdbb3727f45e01653838278b5ec3cab54c80f39e7985994f69b1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02443f6615bdbb3727f45e01653838278b5ec3cab54c80f39e7985994f69b1f2->enter($__internal_02443f6615bdbb3727f45e01653838278b5ec3cab54c80f39e7985994f69b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 19, $this->getSourceContext()); })()) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 23, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 25, $this->getSourceContext()); })())) {
                        // line 26
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 27
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 29, $this->getSourceContext()); })())) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 31, $this->getSourceContext()); })()) + 1);
                        // line 32
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "create"), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 36, $this->getSourceContext()); })()), "admin_code" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 37
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 40
$context["group"], "icon", array()))));
                            // line 41
                            echo "
                    ";
                        }
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "
";
        
        $__internal_02443f6615bdbb3727f45e01653838278b5ec3cab54c80f39e7985994f69b1f2->leave($__internal_02443f6615bdbb3727f45e01653838278b5ec3cab54c80f39e7985994f69b1f2_prof);

        
        $__internal_416bd880e642793d9ae5934b5f2887b4e70760d16c8cbfced4ac4fad1ab91a7c->leave($__internal_416bd880e642793d9ae5934b5f2887b4e70760d16c8cbfced4ac4fad1ab91a7c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  164 => 46,  158 => 45,  155 => 44,  149 => 43,  145 => 41,  143 => 40,  142 => 37,  141 => 36,  139 => 33,  136 => 32,  133 => 31,  128 => 30,  126 => 29,  123 => 28,  116 => 27,  113 => 26,  107 => 25,  104 => 24,  100 => 23,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\">

        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
