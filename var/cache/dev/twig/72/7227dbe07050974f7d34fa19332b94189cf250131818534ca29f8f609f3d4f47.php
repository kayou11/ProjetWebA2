<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_a3b551ca31fb92b2976507f0047e1d83eb4619322fc62d193aa3a85ad07d3408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b37520c7a04394fa84644fd5d6323362cb92628fa18bc320f15feab019c29c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b37520c7a04394fa84644fd5d6323362cb92628fa18bc320f15feab019c29c4->enter($__internal_6b37520c7a04394fa84644fd5d6323362cb92628fa18bc320f15feab019c29c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $__internal_312aec9bbd1e687692480fcc38cc2bc589b32a292d8e83f88721e71ca706d50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312aec9bbd1e687692480fcc38cc2bc589b32a292d8e83f88721e71ca706d50e->enter($__internal_312aec9bbd1e687692480fcc38cc2bc589b32a292d8e83f88721e71ca706d50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b37520c7a04394fa84644fd5d6323362cb92628fa18bc320f15feab019c29c4->leave($__internal_6b37520c7a04394fa84644fd5d6323362cb92628fa18bc320f15feab019c29c4_prof);

        
        $__internal_312aec9bbd1e687692480fcc38cc2bc589b32a292d8e83f88721e71ca706d50e->leave($__internal_312aec9bbd1e687692480fcc38cc2bc589b32a292d8e83f88721e71ca706d50e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b5832edf623cc7ec3665b0dbfc18fa276913b10e10e973f1706e08941a7296a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5832edf623cc7ec3665b0dbfc18fa276913b10e10e973f1706e08941a7296a2->enter($__internal_b5832edf623cc7ec3665b0dbfc18fa276913b10e10e973f1706e08941a7296a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_74df1fa9e4a49e9d00b30a4ef92d74a1748a1b66e01cfec0b6bfb595484ef8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74df1fa9e4a49e9d00b30a4ef92d74a1748a1b66e01cfec0b6bfb595484ef8ba->enter($__internal_74df1fa9e4a49e9d00b30a4ef92d74a1748a1b66e01cfec0b6bfb595484ef8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                ";
        // line 18
        $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "icon", array()), "")) : (""));
        // line 19
        echo "                ";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 19, $this->getSourceContext()); })());
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 21, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 21, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 25
        if (((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 25, $this->getSourceContext()); })()) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 25, $this->getSourceContext()); })()), "getNbResults", array(), "method") > 0))) {
            // line 26
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 26, $this->getSourceContext()); })()), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 27
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "hasAccess", array(0 => "create"), "method"))) {
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "hasAccess", array(0 => "list"), "method"))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if (((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 39, $this->getSourceContext()); })()) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 39, $this->getSourceContext()); })()), "getResults", array(), "method")))) {
            // line 40
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 42, $this->getSourceContext()); })()), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 43
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 43, $this->getSourceContext()); })()), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 44
                echo "                            ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 44, $this->getSourceContext()); })())) {
                    // line 45
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 45, $this->getSourceContext()); })()), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 47
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 47, $this->getSourceContext()); })()), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 53
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 59
        echo "        </div>
    </div>
";
        
        $__internal_74df1fa9e4a49e9d00b30a4ef92d74a1748a1b66e01cfec0b6bfb595484ef8ba->leave($__internal_74df1fa9e4a49e9d00b30a4ef92d74a1748a1b66e01cfec0b6bfb595484ef8ba_prof);

        
        $__internal_b5832edf623cc7ec3665b0dbfc18fa276913b10e10e973f1706e08941a7296a2->leave($__internal_b5832edf623cc7ec3665b0dbfc18fa276913b10e10e973f1706e08941a7296a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  145 => 55,  141 => 53,  136 => 50,  130 => 49,  124 => 47,  116 => 45,  113 => 44,  110 => 43,  106 => 42,  102 => 40,  100 => 39,  96 => 37,  88 => 33,  85 => 32,  77 => 28,  75 => 27,  70 => 26,  68 => 25,  61 => 21,  55 => 19,  53 => 18,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                {% set icon = settings.icon|default('') %}
                {{ icon|raw }}
                <h3 class=\"box-title\">
                    {{ admin.label|trans({}, admin.translationdomain) }}
                </h3>

                <div class=\"box-tools pull-right\">
                    {% if pager and pager.getNbResults() > 0 %}
                        <span class=\"badge\">{{ pager.getNbResults() }}</span>
                    {% elseif admin.hasRoute('create') and admin.hasAccess('create') %}
                        <a href=\"{{ admin.generateUrl('create') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
            {% if pager and pager.getResults()|length %}
                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        {% for result in pager.getResults() %}
                            {% set link = admin.getSearchResultLink(result) %}
                            {% if link %}
                                <li><a href=\"{{ link }}\">{{ admin.toString(result) }}</a></li>
                            {% else %}
                                <li><a>{{ admin.toString(result) }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            {% else %}
                <div class=\"box-body\">
                    <p>
                        <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_search_result.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Block/block_search_result.html.twig");
    }
}
