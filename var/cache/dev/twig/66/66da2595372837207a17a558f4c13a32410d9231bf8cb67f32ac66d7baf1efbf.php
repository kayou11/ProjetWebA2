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
        $__internal_dccb704456d41bce4509867a09a2fa065daf26dba80836abbd94f50188e236fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccb704456d41bce4509867a09a2fa065daf26dba80836abbd94f50188e236fc->enter($__internal_dccb704456d41bce4509867a09a2fa065daf26dba80836abbd94f50188e236fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_0fc2c670fbc27bf269da6e59cab8e5ddece405c635f0fafabdc1dc3a1ad645a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc2c670fbc27bf269da6e59cab8e5ddece405c635f0fafabdc1dc3a1ad645a9->enter($__internal_0fc2c670fbc27bf269da6e59cab8e5ddece405c635f0fafabdc1dc3a1ad645a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dccb704456d41bce4509867a09a2fa065daf26dba80836abbd94f50188e236fc->leave($__internal_dccb704456d41bce4509867a09a2fa065daf26dba80836abbd94f50188e236fc_prof);

        
        $__internal_0fc2c670fbc27bf269da6e59cab8e5ddece405c635f0fafabdc1dc3a1ad645a9->leave($__internal_0fc2c670fbc27bf269da6e59cab8e5ddece405c635f0fafabdc1dc3a1ad645a9_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_03a6d56192ab910d8e740dd7a08fb8c05ffc41b6175474b2fec8961a45a60291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a6d56192ab910d8e740dd7a08fb8c05ffc41b6175474b2fec8961a45a60291->enter($__internal_03a6d56192ab910d8e740dd7a08fb8c05ffc41b6175474b2fec8961a45a60291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3127cec60d6ef5334517a54bc146e30b6dc84098e5183b08966294964753bb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3127cec60d6ef5334517a54bc146e30b6dc84098e5183b08966294964753bb8f->enter($__internal_3127cec60d6ef5334517a54bc146e30b6dc84098e5183b08966294964753bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_3127cec60d6ef5334517a54bc146e30b6dc84098e5183b08966294964753bb8f->leave($__internal_3127cec60d6ef5334517a54bc146e30b6dc84098e5183b08966294964753bb8f_prof);

        
        $__internal_03a6d56192ab910d8e740dd7a08fb8c05ffc41b6175474b2fec8961a45a60291->leave($__internal_03a6d56192ab910d8e740dd7a08fb8c05ffc41b6175474b2fec8961a45a60291_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6eb5e8705494b6b6f0ae389118e3c3e1ea698539c941ff2c670e87ed6ca1c35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb5e8705494b6b6f0ae389118e3c3e1ea698539c941ff2c670e87ed6ca1c35d->enter($__internal_6eb5e8705494b6b6f0ae389118e3c3e1ea698539c941ff2c670e87ed6ca1c35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_bb03232f528a4bc355be12912f7a6dae6b71af48fb03bba8e88b7b50f3e4a351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb03232f528a4bc355be12912f7a6dae6b71af48fb03bba8e88b7b50f3e4a351->enter($__internal_bb03232f528a4bc355be12912f7a6dae6b71af48fb03bba8e88b7b50f3e4a351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_bb03232f528a4bc355be12912f7a6dae6b71af48fb03bba8e88b7b50f3e4a351->leave($__internal_bb03232f528a4bc355be12912f7a6dae6b71af48fb03bba8e88b7b50f3e4a351_prof);

        
        $__internal_6eb5e8705494b6b6f0ae389118e3c3e1ea698539c941ff2c670e87ed6ca1c35d->leave($__internal_6eb5e8705494b6b6f0ae389118e3c3e1ea698539c941ff2c670e87ed6ca1c35d_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_7df338c88f77d18ca6e7cc173421e091612f274fd9e3885232944af9088a49b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df338c88f77d18ca6e7cc173421e091612f274fd9e3885232944af9088a49b9->enter($__internal_7df338c88f77d18ca6e7cc173421e091612f274fd9e3885232944af9088a49b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b14e547d0bb73748cfd2e4972e09786599a70c7bca86290d169e6d86a14e1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b14e547d0bb73748cfd2e4972e09786599a70c7bca86290d169e6d86a14e1ee->enter($__internal_3b14e547d0bb73748cfd2e4972e09786599a70c7bca86290d169e6d86a14e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3b14e547d0bb73748cfd2e4972e09786599a70c7bca86290d169e6d86a14e1ee->leave($__internal_3b14e547d0bb73748cfd2e4972e09786599a70c7bca86290d169e6d86a14e1ee_prof);

        
        $__internal_7df338c88f77d18ca6e7cc173421e091612f274fd9e3885232944af9088a49b9->leave($__internal_7df338c88f77d18ca6e7cc173421e091612f274fd9e3885232944af9088a49b9_prof);

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
