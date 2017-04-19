<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_c5a9e907963262451dcc109023c86a29f4a908444e91664bcf470651294508c4 extends Twig_Template
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
        $__internal_139e4d9744555c66b769968a402731018a2d0ea0a76d6c97b434e304d4c0a76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139e4d9744555c66b769968a402731018a2d0ea0a76d6c97b434e304d4c0a76d->enter($__internal_139e4d9744555c66b769968a402731018a2d0ea0a76d6c97b434e304d4c0a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_25a223a5f744f9bad273cf54aed98fbb449041d5558cdf271fc2a5de008207a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a223a5f744f9bad273cf54aed98fbb449041d5558cdf271fc2a5de008207a3->enter($__internal_25a223a5f744f9bad273cf54aed98fbb449041d5558cdf271fc2a5de008207a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139e4d9744555c66b769968a402731018a2d0ea0a76d6c97b434e304d4c0a76d->leave($__internal_139e4d9744555c66b769968a402731018a2d0ea0a76d6c97b434e304d4c0a76d_prof);

        
        $__internal_25a223a5f744f9bad273cf54aed98fbb449041d5558cdf271fc2a5de008207a3->leave($__internal_25a223a5f744f9bad273cf54aed98fbb449041d5558cdf271fc2a5de008207a3_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_86a3e75a28e79bf55487c78525d99f97d2be2aaa9b4b2c3d2522fff68f6c80db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a3e75a28e79bf55487c78525d99f97d2be2aaa9b4b2c3d2522fff68f6c80db->enter($__internal_86a3e75a28e79bf55487c78525d99f97d2be2aaa9b4b2c3d2522fff68f6c80db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bba4d077a552313987bac7c931885c14251b3af3c29888a7a3982aef140ef87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba4d077a552313987bac7c931885c14251b3af3c29888a7a3982aef140ef87->enter($__internal_5bba4d077a552313987bac7c931885c14251b3af3c29888a7a3982aef140ef87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_5bba4d077a552313987bac7c931885c14251b3af3c29888a7a3982aef140ef87->leave($__internal_5bba4d077a552313987bac7c931885c14251b3af3c29888a7a3982aef140ef87_prof);

        
        $__internal_86a3e75a28e79bf55487c78525d99f97d2be2aaa9b4b2c3d2522fff68f6c80db->leave($__internal_86a3e75a28e79bf55487c78525d99f97d2be2aaa9b4b2c3d2522fff68f6c80db_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_42de507d9dbc994e17423f5ce6df05726381eeb4f40ffad7df14454541501baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42de507d9dbc994e17423f5ce6df05726381eeb4f40ffad7df14454541501baa->enter($__internal_42de507d9dbc994e17423f5ce6df05726381eeb4f40ffad7df14454541501baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_379b18f1b962943dd579171c601f7f1566baf3eb774fa4f727e52b6e3f502b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b18f1b962943dd579171c601f7f1566baf3eb774fa4f727e52b6e3f502b77->enter($__internal_379b18f1b962943dd579171c601f7f1566baf3eb774fa4f727e52b6e3f502b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_379b18f1b962943dd579171c601f7f1566baf3eb774fa4f727e52b6e3f502b77->leave($__internal_379b18f1b962943dd579171c601f7f1566baf3eb774fa4f727e52b6e3f502b77_prof);

        
        $__internal_42de507d9dbc994e17423f5ce6df05726381eeb4f40ffad7df14454541501baa->leave($__internal_42de507d9dbc994e17423f5ce6df05726381eeb4f40ffad7df14454541501baa_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae1e5ce5f5abcb83261a22c6252585b42d56562a9040a74a45fe90a04707084f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1e5ce5f5abcb83261a22c6252585b42d56562a9040a74a45fe90a04707084f->enter($__internal_ae1e5ce5f5abcb83261a22c6252585b42d56562a9040a74a45fe90a04707084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9d98c26b41602f22861f724e34012e474308f068d2537100420ab940b63655d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d98c26b41602f22861f724e34012e474308f068d2537100420ab940b63655d->enter($__internal_f9d98c26b41602f22861f724e34012e474308f068d2537100420ab940b63655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f9d98c26b41602f22861f724e34012e474308f068d2537100420ab940b63655d->leave($__internal_f9d98c26b41602f22861f724e34012e474308f068d2537100420ab940b63655d_prof);

        
        $__internal_ae1e5ce5f5abcb83261a22c6252585b42d56562a9040a74a45fe90a04707084f->leave($__internal_ae1e5ce5f5abcb83261a22c6252585b42d56562a9040a74a45fe90a04707084f_prof);

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
