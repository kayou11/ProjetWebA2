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
        $__internal_f7267f60592a612db68f8e146d76ae7290454ca36a57ca5658b179be10d7f37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7267f60592a612db68f8e146d76ae7290454ca36a57ca5658b179be10d7f37c->enter($__internal_f7267f60592a612db68f8e146d76ae7290454ca36a57ca5658b179be10d7f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_57fe2cf744e4768ad8a764ee262db8395036b72ff23f1678fd14b3c2ef57e93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fe2cf744e4768ad8a764ee262db8395036b72ff23f1678fd14b3c2ef57e93d->enter($__internal_57fe2cf744e4768ad8a764ee262db8395036b72ff23f1678fd14b3c2ef57e93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7267f60592a612db68f8e146d76ae7290454ca36a57ca5658b179be10d7f37c->leave($__internal_f7267f60592a612db68f8e146d76ae7290454ca36a57ca5658b179be10d7f37c_prof);

        
        $__internal_57fe2cf744e4768ad8a764ee262db8395036b72ff23f1678fd14b3c2ef57e93d->leave($__internal_57fe2cf744e4768ad8a764ee262db8395036b72ff23f1678fd14b3c2ef57e93d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_54c49f4a62a1ee7523bcfaf4dc3234a0530095aa28daa6f8561af3e4fec4548a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c49f4a62a1ee7523bcfaf4dc3234a0530095aa28daa6f8561af3e4fec4548a->enter($__internal_54c49f4a62a1ee7523bcfaf4dc3234a0530095aa28daa6f8561af3e4fec4548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f84c04efca3d74cbc8dc88c523bb684b52f0e95bd2cc26e7a684839293ba00af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84c04efca3d74cbc8dc88c523bb684b52f0e95bd2cc26e7a684839293ba00af->enter($__internal_f84c04efca3d74cbc8dc88c523bb684b52f0e95bd2cc26e7a684839293ba00af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_f84c04efca3d74cbc8dc88c523bb684b52f0e95bd2cc26e7a684839293ba00af->leave($__internal_f84c04efca3d74cbc8dc88c523bb684b52f0e95bd2cc26e7a684839293ba00af_prof);

        
        $__internal_54c49f4a62a1ee7523bcfaf4dc3234a0530095aa28daa6f8561af3e4fec4548a->leave($__internal_54c49f4a62a1ee7523bcfaf4dc3234a0530095aa28daa6f8561af3e4fec4548a_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_64a1f57d2a89b98eeb98f1f1947964b2515be88db6247d235b06673df5079a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a1f57d2a89b98eeb98f1f1947964b2515be88db6247d235b06673df5079a13->enter($__internal_64a1f57d2a89b98eeb98f1f1947964b2515be88db6247d235b06673df5079a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_befdd8fbf100ada7cde06c6deb9f994a32653d5a4e583cb0061e16aa704ce79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befdd8fbf100ada7cde06c6deb9f994a32653d5a4e583cb0061e16aa704ce79c->enter($__internal_befdd8fbf100ada7cde06c6deb9f994a32653d5a4e583cb0061e16aa704ce79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_befdd8fbf100ada7cde06c6deb9f994a32653d5a4e583cb0061e16aa704ce79c->leave($__internal_befdd8fbf100ada7cde06c6deb9f994a32653d5a4e583cb0061e16aa704ce79c_prof);

        
        $__internal_64a1f57d2a89b98eeb98f1f1947964b2515be88db6247d235b06673df5079a13->leave($__internal_64a1f57d2a89b98eeb98f1f1947964b2515be88db6247d235b06673df5079a13_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f74011c115c034e84e3a793ed4d69e38f46563065b00ea1a3bb78f3d8b0411e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f74011c115c034e84e3a793ed4d69e38f46563065b00ea1a3bb78f3d8b0411e->enter($__internal_8f74011c115c034e84e3a793ed4d69e38f46563065b00ea1a3bb78f3d8b0411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ebde8e81a26eb1170e47b70679b6354b64e6fd8f13a1f8ee6ec58bb3a9d1eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebde8e81a26eb1170e47b70679b6354b64e6fd8f13a1f8ee6ec58bb3a9d1eb6->enter($__internal_6ebde8e81a26eb1170e47b70679b6354b64e6fd8f13a1f8ee6ec58bb3a9d1eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6ebde8e81a26eb1170e47b70679b6354b64e6fd8f13a1f8ee6ec58bb3a9d1eb6->leave($__internal_6ebde8e81a26eb1170e47b70679b6354b64e6fd8f13a1f8ee6ec58bb3a9d1eb6_prof);

        
        $__internal_8f74011c115c034e84e3a793ed4d69e38f46563065b00ea1a3bb78f3d8b0411e->leave($__internal_8f74011c115c034e84e3a793ed4d69e38f46563065b00ea1a3bb78f3d8b0411e_prof);

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
